<?php
//namespace parking\Theme;

//define( 'PARKING_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once 'includes/config.php';
include_once 'includes/meta.php';

// Add other includes to this file as needed.

function register_custom_scripts() {
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'register_custom_scripts' );
