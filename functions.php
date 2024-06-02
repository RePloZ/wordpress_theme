<?php
function creative_agency_theme_setup() {
    register_post_type('team_member', [
        'labels' => [
            'name' => __('Team Members', 'creative-agency-theme'),
            'singular_name' => __('Team Member', 'creative-agency-theme'),
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'team'],
    ]);

    register_post_type('project', [
        'labels' => [
            'name' => __('Projects', 'creative-agency-theme'),
            'singular_name' => __('Project', 'creative-agency-theme'),
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
    ]);
}
add_action('init', 'creative_agency_theme_setup');

function creative_agency_register_taxonomies() {
    register_taxonomy('project_type', 'project', [
        'labels' => [
            'name' => __('Project Types', 'creative-agency-theme'),
            'singular_name' => __('Project Type', 'creative-agency-theme'),
        ],
        'public' => true,
        'rewrite' => ['slug' => 'project-type'],
    ]);

    register_taxonomy('release_date', 'project', [
        'labels' => [
            'name' => __('Release Dates', 'creative-agency-theme'),
            'singular_name' => __('Release Date', 'creative-agency-theme'),
        ],
        'public' => true,
        'rewrite' => ['slug' => 'release-date'],
    ]);
}
add_action('init', 'creative_agency_register_taxonomies');

function creative_agency_enqueue_scripts() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('alpine-js', 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.min.js', [], null, true);
    wp_enqueue_script('creative-agency-scripts', get_template_directory_uri() . '/js/scripts.js', ['swiper-js', 'alpine-js'], null, true);
    wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'creative_agency_enqueue_scripts');

function creative_agency_polylang_setup() {
    if (function_exists('pll_register_string')) {
        pll_register_string('Theme Strings', 'Team Members', 'creative-agency-theme');
        pll_register_string('Theme Strings', 'Projects', 'creative-agency-theme');
    }
}
add_action('init', 'creative_agency_polylang_setup');
?>
