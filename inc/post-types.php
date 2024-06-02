<?php

function caweb_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'All projects',  // Displayed in sub-menu
        'singular_name' => 'Project',
        'add_new_item' => 'Add a project',
        'edit_item' => 'Edit a projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );

// Taxonomy registration
    $labels_taxonomy_types = array(
        'name' => 'Project Types',
        'new_item_name' => 'New Project Name',
    	'parent_item' => 'Parent Project Type',
    );
    
    $args_taxonomy_types = array( 
        'labels' => $labels_taxonomy_types,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'project-type', 'portfolio', $args_taxonomy_types );
}
add_action( 'init', 'caweb_register_post_types' );