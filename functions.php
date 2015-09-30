<?php

/* Enqueue scripts and styles */
function theme_name_scripts() {
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/style.min.css' );
    wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

/* Enable navigation */
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'footer', __( 'Footer Menu', 'theme-slug' ) );
}

/* Enable support for the post thumbnails */
add_theme_support( 'post-thumbnails' );

/* Theme settings page menu */
require_once('_functions/theme-settings.php');
require_once('_functions/custom-post-types.php');
require_once('_functions/custom-fields.php');

?>
