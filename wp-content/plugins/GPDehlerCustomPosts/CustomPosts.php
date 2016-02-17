<?php
/*
Plugin Name: GPR Dehler Custom Posts
Description: Declares a plugin that will create a custom post types.
Version: 1.0
Author: Chris Alwin
License: GPLv2
*/


add_action( 'init', 'create_Industries_post' );
function create_Industries_post() {
register_post_type( 'Industries',
    array(
        'labels' => array(
            'name' => 'Industries',
            'singular_name' => 'Industry Post',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Industry Post',
            'edit' => 'Edit',
            'edit_item' => 'Edit Industry Post',
            'new_item' => 'New Industry Post',
            'view' => 'View',
            'view_item' => 'View Industry Post',
            'search_items' => 'Search Industry Posts ',
            'not_found' => 'No Industry Posts found found',
            'not_found_in_trash' => 'No Industry Posts found in Trash',
            'parent' => 'Industries'
        ),

        'public' => true,
        'menu_position' => 7,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'industries_categories' ),
        'has_archive' => true
        )
    );
}

// Custom Taxonomy Code
add_action( 'init', 'industries_Categories', 0 );
function industries_Categories() {
    register_taxonomy( 'industries_categories', 'post', array( 'hierarchical' => true, 'label' => 'Industries Categories', 'query_var' => true, 'rewrite' => true ) );
}

add_action( 'init', 'create_Careers_post' );
function create_Careers_post() {
    register_post_type( 'Careers',
        array(
            'labels' => array(
                'name' => 'Careers',
                'singular_name' => 'Career Post',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Career Post',
                'edit' => 'Edit',
                'edit_item' => 'Edit Career Post',
                'new_item' => 'New Career Post',
                'view' => 'View',
                'view_item' => 'View Career Post',
                'search_items' => 'Search Career Posts ',
                'not_found' => 'No Career Posts found found',
                'not_found_in_trash' => 'No Career Posts found in Trash',
                'parent' => 'Careers'
            ),

            'public' => true,
            'menu_position' => 8,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'categories' ),
            'has_archive' => true
        )
    );
}


?>