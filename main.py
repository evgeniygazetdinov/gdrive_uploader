from google.oauth2.credentials import Credentials
from google_auth_oauthlib.flow import InstalledAppFlow
from google.auth.transport.requests import Request
from googleapiclient.discovery import build
from googleapiclient.http import MediaFileUpload
import os
import pickle
import json

SCOPES = ['https://www.googleapis.com/auth/drive.file']
JSON_FILE = 'uploaded_files.json'

def set_file_permissions(service, file_id):
    try:
        # Создаем разрешение для всех пользователей с ссылкой
        permission = {
            'type': 'anyone',
            'role': 'reader',
            'allowFileDiscovery': False
        }
        
        service.permissions().create(
            fileId=file_id,
            body=permission,
            fields='id'
        ).execute()
        
        return True
    except Exception as e:
        print(f"Ошибка при установке прав доступа: {str(e)}")
        return False

def authenticate():
    creds = None
    if os.path.exists('token.pickle'):
        with open('token.pickle', 'rb') as token:
            creds = pickle.load(token)
    
    if not creds or not creds.valid:
        if creds and creds.expired and creds.refresh_token:
            creds.refresh(Request())
        else:
            flow = InstalledAppFlow.from_client_secrets_file(
                'client.json', SCOPES)
            creds = flow.run_local_server(port=0)
        # Save the credentials for the next run
        with open('token.pickle', 'wb') as token:
            pickle.dump(creds, token)
    
    return creds

def get_download_link(file_id):
    return f'https://drive.google.com/uc?export=download&id={file_id}'

def load_existing_data():
    if os.path.exists(JSON_FILE):
        if os.path.getsize(JSON_FILE) > 0:  # Проверяем, что файл не пустой
            try:
                with open(JSON_FILE) as f:
                    return json.load(f)
            except json.JSONDecodeError:
                print(f"Ошибка чтения JSON файла {JSON_FILE}")
                return {}
    return {}

def save_to_json(data):
    existing_data = load_existing_data()
    existing_data.update(data)
    with open(JSON_FILE, 'w') as f:
          f.write(json.dumps(existing_data, ensure_ascii=False))
    
    return existing_data

def upload_file(service, file_path, folder_id=None):
    file_name = os.path.basename(file_path)
    file_metadata = {'name': file_name}
    
    if folder_id:
        file_metadata['parents'] = [folder_id]
    
    media = MediaFileUpload(file_path, resumable=True)
    file = service.files().create(
        body=file_metadata,
        media_body=media,
        fields='id'
    ).execute()
    
    file_id = file["id"]
    
    # Устанавливаем права доступа
    set_file_permissions(service, file_id)
    
    print(f'Файл {file_name} успешно загружен, ID: {file_id}')
    download_link = get_download_link(file_id)
    key = file_name.split('.')[0]
    return {key: download_link}

def upload_folder(local_folder_path):
    data = {}
    try:
        creds = authenticate()
        service = build('drive', 'v3', credentials=creds)
        
        for filename in os.listdir(local_folder_path):
            file_path = os.path.join(local_folder_path, filename)
            if os.path.isfile(file_path):
                data.update(upload_file(service, file_path))
                updated_data = save_to_json(data)
        # Сохраняем в JSON и получаем обновленные данные

        
        print("\nВсе загруженные файлы:")
        for key, value in updated_data.items():
            print(f"\nФайл: {key}")
            print(f"ID: {value['id']}")
            print(f"Ссылка: {value['download_link']}")
                
    except Exception as e:
        print(f'Произошла ошибка: {str(e)}')
    
    return data

if __name__ == '__main__':
    folder_path = os.getcwd()+'/flags'
    uploaded_data = upload_folder(folder_path)
