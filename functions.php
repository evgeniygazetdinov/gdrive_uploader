<?php


// =============style-connect================================================
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_enqueue_script( 'fflanding-js', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
};   
// =============================================================

function register_my_menus() {
    register_nav_menus(
      array(
        'new-menu' => __( 'FFlanding_menu' ),
   
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
 ?>
    