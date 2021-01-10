<?php

function tailwind_theme_name_scripts() {
	wp_enqueue_style( 'bundle', get_template_directory_uri() . '/dist/bundle.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
}
add_action( 'wp_enqueue_scripts', 'tailwind_theme_name_scripts' );