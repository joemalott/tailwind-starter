<?php

function tailwind_theme_name_scripts() {
    // When you're ready to deploy, build, purge, and uncomment this line here to include the bundled CSS
    // wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
}
add_action( 'wp_enqueue_scripts', 'tailwind_theme_name_scripts' );