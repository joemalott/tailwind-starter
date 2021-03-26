<?php

function tailwind_theme_name_scripts() {
    
    wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'tailwind_theme_name_scripts' );
