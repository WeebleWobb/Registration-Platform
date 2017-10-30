<?php


/* --------------------------------------------
01. Style and Scripts Enqueues
--------------------------------------------- */
function synchrony_registration_style() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', false);
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );
}
add_action( 'wp_enqueue_scripts', 'synchrony_registration_style' );

function synchrony_registration_script() {
	wp_enqueue_script( 'core-js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'synchrony_registration_script' );


/* --------------------------------------------
02. Theme support functions
--------------------------------------------- */

add_theme_support( 'post-thumbnails' ); 



?>