<?php
function enqueue_tailwind_css() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css')
    wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.min.js')
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
?>
