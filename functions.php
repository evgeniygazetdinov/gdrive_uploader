<?php
//to js from php 
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$



// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$



// =============style-connect================================================
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    	wp_enqueue_script('jquery_local', get_template_directory_uri() . '/assets/js/jquery-3.2.0.min.js');
      wp_enqueue_script( 'fflanding-js', get_template_directory_uri() . '/assets/js/main.js');
	  wp_enqueue_style( 'style-name', get_stylesheet_uri() );
};   
// =============================================================

// &&&&&&&&&&&&&&&&&&&&&&&&&&&&& menu-staff &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
function register_my_menus() {
    register_nav_menus(
      array(
        'new-menu' => __( 'FFlanding_menu' ),
   
      )
    );
  }
  add_action( 'init', 'register_my_menus' );


  //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
 //REGISTER PORTFILIOTYPE

 add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init

 function true_register_post_type_init() {
   $labels = array(
     'name' => 'Портфолио',
     'singular_name' => 'Портфолио', // админ панель Добавить->Функцию
     'add_new' => 'Добавить Портфолио',
     'add_new_item' => 'Добавить новое Портфолио', // заголовок тега <title>
     'edit_item' => 'Редактировать Портфолио',
     'new_item' => 'Новое Портфолио',
     'all_items' => 'Все Портфолио',
     'view_item' => 'Просмотр Портфолио на сайте',
     'search_items' => 'Искать Портфолио',
     'not_found' =>  'Портфолио не найдено.',
     'not_found_in_trash' => 'В корзине нет Портфолио.',
     'menu_name' => 'Портфолио' // ссылка в меню в админке
   );
   $args = array(
     'labels' => $labels,
     'public' => true,
     'show_ui' => true, // показывать интерфейс в админке
     'has_archive' => true, 
     'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/portfolio.png', // иконка в меню
     'menu_position' => 20, // порядок в меню
     'supports' => array( 'title', 'editor', 'thumbnail')
   );
   register_post_type('portfolio', $args);
 }
 
//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 
function create_topics_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Design', 'taxonomy general name' ),
    'singular_name' => _x( 'Design', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Design' ),
    'popular_items' => __( 'Popular Design' ),
    'all_items' => __( 'All Design' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Design' ), 
    'update_item' => __( 'Update Design' ),
    'add_new_item' => __( 'Add New Design' ),
    'new_item_name' => __( 'New Design Name' ),
    'separate_items_with_commas' => __( 'Separate Design with commas' ),
    'add_or_remove_items' => __( 'Add or remove Design' ),
    'choose_from_most_used' => __( 'Choose from the most used Design' ),
    'menu_name' => __( 'Design' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('Design','portfolio',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  ));
}


 ?>
    