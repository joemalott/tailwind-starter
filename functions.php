<?php

function cherokee_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/dist/tailwind.css' );
}
add_action( 'wp_enqueue_scripts', 'cherokee_theme_name_scripts' );