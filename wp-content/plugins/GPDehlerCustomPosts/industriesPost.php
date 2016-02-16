<?php
/*
Plugin Name: Custom Posts
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
        'menu_position' => 15,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'category' ),
        //'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
        'has_archive' => true
        )
    );
}
?>