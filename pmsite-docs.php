<?php
                

/**
* Plugin Name: Plugin Machine Docs
* Plugin URI: 
* Description: Documentation Post Type And Blocks 
* Version: 0.0.1
* Requires at least: 5.8
* Requires PHP:      7.1.0
* Author:            Josh Pollock
* Author URI:        https://joshpress.net
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       pmsite-docs
* Domain Path:       /languages
*/

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';
// Include help-short-version
include_once dirname( __FILE__ ) . '/blocks/help-short-version/init.php';

// Include help-link
include_once dirname( __FILE__ ) . '/blocks/help-link/init.php';

// Include helpful-links
include_once dirname( __FILE__ ) . '/blocks/helpful-links/init.php';


/**
* Register doc Custom Post Type
*/
add_action( 'init', function(){
    $args = [
        'labels'             => [
            'name'                  => _x( 'doc', 'Post type general name', 'pmsite-docs' ),
            'singular_name'         => _x( 'Doc', 'Post type singular name', 'pmsite-docs' ),
            'menu_name'             => _x( 'Doc', 'Admin Menu text', 'pmsite-docs' ),
            'name_admin_bar'        => _x( 'Doc', 'Add New on Toolbar', 'pmsite-docs' ),
            'add_new'               => __( 'Add New Doc', 'pmsite-docs' ),
            'add_new_item'          => __( 'Add New Doc', 'pmsite-docs' ),
            'new_item'              => __( 'New Doc', 'pmsite-docs' ),
            'edit_item'             => __( 'Edit New doc', 'pmsite-docs' ),
            'view_item'             => __( 'View doc', 'pmsite-docs' ),
            'all_items'             => __( 'All Docs', 'pmsite-docs' ),
            'search_items'          => __( 'Search Docs', 'pmsite-docs' ),
            'not_found'             => __( 'No Docs Found', 'pmsite-docs' ),
            'not_found_in_trash'    => __( 'No Docs Found', 'pmsite-docs' ),
            'featured_image'        => _x( 'FEATURE_ITEM', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pmsite-docs' ),
            'set_featured_image'    => _x( 'SET_FEATURE_IMAGE', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pmsite-docs' ),
            'remove_featured_image' => _x( 'REMOVE_FEATURE_IMAGE', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pmsite-docs' ),
            'use_featured_image'    => _x( 'Use doc Featured Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pmsite-docs' ),
            'archives'              => _x( 'doc Archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pmsite-docs' ),
            'insert_into_item'      => _x( 'Insert Into Docs ', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pmsite-docs' ),
            'uploaded_to_this_item' => _x( 'Upload Tp doc ', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pmsite-docs' ),
            'filter_items_list'     => _x( 'FILETER_ITEM_LIST', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pmsite-docs' ),
            'items_list_navigation' => _x( 'Docs List Navigation ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pmsite-docs' ),
            'items_list'            => _x( 'Docs List ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pmsite-docs' ),
        ],
        'publicly_queryable' => 1,
        'public'             => 1,
        'show_ui'            => 1,
        'show_in_menu'       => 1,
        'query_var'          => 1,
        'rewrite'            => 1,
        'capability_type'    => 'post',
        'has_archive'        => 1,
        'hierarchical'       => 1,
        'menu_position'      => 25,
        'supports'           => ['title', 'editor', 'thumbnail', 'author', 'excerpt'],
    ];

    register_post_type( 'doc', $args );
});

include_once dirname( __FILE__ ). '/blocks/help-key/init.php';