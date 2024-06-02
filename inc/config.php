<?php
add_theme_support('post-thumbnails' );

function caweb_register_assets() {
    
    wp_enqueue_script(
        'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
    
    // Call JS file
	wp_enqueue_script( 
        'caweb', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3',
    );
    
    // Call CSS somewhere else
    wp_enqueue_style( 
        'caweb', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'caweb_register_assets' );