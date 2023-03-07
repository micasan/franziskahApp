<?php

function fh_theme_support(){
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme','fh_theme_support');

function fh_register_styles(){

    $version = wp_get_theme()->get( 'Version');
    wp_enqueue_style('fh_style',get_template_directory_uri(). "/style.css", array(), $version, 'all');
    wp_enqueue_style('fh_bootstrap',get_template_directory_uri(). "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", array(), '1.0', 'all');

}


add_action( 'wp_enqueue_scripts','fh_register_styles');


function fh_menus() {
     $locations = array(
        'primary' => "Desktop Primary Right Top Menu",
        'footer' => " Footer Menu Items"
     );

     register_nav_menus($locations);
}

add_action('init', 'fh_menus');

?>