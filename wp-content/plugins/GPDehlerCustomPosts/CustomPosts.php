<?php
/*
Plugin Name: GPR Dehler Custom Posts
Description: Declares a plugin that will create a custom post types.
Version: 1.0
Author: Chris Alwin
License: GPLv2
*/


//add_action( 'init', 'create_Industries_post' );
add_action( 'init', 'create_Careers_post' );
add_action( 'init', 'create_Case_Studies_post' );
add_action( 'init', 'create_Insight_post' );

//add_action( 'init', 'industries_Categories', 0 );
add_action( 'init', 'insight_Categories', 0 );
add_action( 'init', 'Site_Categories', 0 );

//flush_rewrite_rules();

//Removes default Posts
//add_action('admin_menu','remove_default_post_type');
//function remove_default_post_type() {
//    remove_menu_page('edit.php');
//}


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
    flush_rewrite_rules();
}

function create_Case_Studies_post() {
    register_post_type( 'CaseStudies',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Case Study',
                'edit' => 'Edit',
                'edit_item' => 'Edit Case Study',
                'new_item' => 'New Case Study',
                'view' => 'View',
                'view_item' => 'View Case Study',
                'search_items' => 'Search Case Studies',
                'not_found' => 'No Case Studies found found',
                'not_found_in_trash' => 'No Case Studies found in Trash',
                'parent' => 'Case Studies'
            ),

            'public' => true,
            'menu_position' => 8,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'site_categories' ),
            'has_archive' => true
        )
    );
    flush_rewrite_rules();
}
function create_Insight_post() {
    register_post_type( 'Insight',
        array(
            'labels' => array(
                'name' => 'Insight',
                'singular_name' => 'Insight Post',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Insight Post',
                'edit' => 'Edit',
                'edit_item' => 'Edit Insight Post',
                'new_item' => 'New Insight Post',
                'view' => 'View',
                'view_item' => 'View Insight Post',
                'search_items' => 'Search Insight Post',
                'not_found' => 'No Insight Post found found',
                'not_found_in_trash' => 'No Insight Post found in Trash',
                'parent' => 'Insight Post'
            ),

            'public' => true,
            'menu_position' => 3,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'insight_categories', 'site_categories' ),
            'has_archive' => true
        )
    );
    flush_rewrite_rules();
}
function insight_Categories() {
    register_taxonomy( 'insight_categories', 'post', array( 'hierarchical' => true, 'label' => 'Insight Categories', 'query_var' => true, 'rewrite' => true ) );
}
function Site_Categories() {
    register_taxonomy( 'site_categories', 'post', array( 'hierarchical' => true, 'label' => 'Site Categories', 'query_var' => true, 'rewrite' => true ) );
}



?>