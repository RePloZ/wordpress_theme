<?php
function enqueue_tailwind_css() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    wp_enqueue_script('alpine-js', 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.min.js');
    wp_enqueue_script('tailwind-js', 'https://cdn.tailwindcss.com');
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
?>
