<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function fh_theme_support(){
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme','fh_theme_support');

function fh_register_styles(){
    wp_enqueue_style('fh_style',get_template_directory_uri() . "/css/styles.css");
    wp_enqueue_style('fh_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts','fh_register_styles');


function fh_register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'fh_register_my_menus' );

?>