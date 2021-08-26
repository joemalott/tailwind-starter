<?php

function tailwind_starter_theme_scripts() {
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'tailwind_starter_theme_scripts' );
