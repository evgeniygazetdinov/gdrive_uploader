# Google Drive Uploader

A script for automatically uploading files to Google Drive while saving information about uploaded files.

## Features

- Upload files to Google Drive
- Automatic saving of the authorization token
- Saving information about uploaded files in JSON
- Generation of direct download links
- Checking for duplicate files

## Installation

1. Install the necessary dependencies:
```bash
pip install google-auth-oauthlib google-auth-httplib2 google-api-python-client
```

TODO before
```bash
python -m venv venv
source venv/bin/activate
pip install -r requirements.txt
python main.py
```

before running the script

1. Go to the Google Cloud Console
2. Create a new project
3. Enable the Google Drive API
4. Create OAuth 2.0 credentials (download as credentials.json)
5. Place the downloaded credentials file.json to the same folder where the script is located

6. In the script, change the folder_path variable at the end of the file, specifying the path to the folder with the files you want to download.


7.The first time you run the script, a browser window will open where you will need to log in to your Google account and allow access. After that, the token will be saved, and reauthorization will not be required.

If the redirect_uri_mismatch error is returned, it occurs due to incorrect OAuth settings in the Google Cloud Console. 

Go to the Google Cloud Console
Choose your project
Go to "APIs & Services" → "Credentials"
Find your OAuth 2.0 Client ID credentials and click on them
In the "Authorized redirect URIs" section, add the following URIs:
http://localhost:8080/
http://localhost
Click "Save" (or "Save")
Download the updated credentials (they should be called client.json) and put them in the same folder where the script is located.