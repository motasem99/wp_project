<?php

/*
Plugin Name: clothes
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: hello mutasem kwaik </cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Author URI: http://ma.tt/
*/



function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'clothes', 'Post type general name', 'clothes' ),
        'singular_name'         => _x( 'clothes', 'Post type singular name', 'clothes' ),
        'menu_name'             => _x( 'clothes', 'Admin Menu text', 'clothes' ),
        'name_admin_bar'        => _x( 'clothes', 'Add New on Toolbar', 'clothes' ),
        'add_new'               => __( 'Add New', 'clothes' ),
        'add_new_item'          => __( 'Add New clothes', 'clothes' ),
        'new_item'              => __( 'New clothes', 'clothes' ),
        'edit_item'             => __( 'Edit clothes', 'clothes' ),
        'view_item'             => __( 'View clothes', 'clothes' ),
        'all_items'             => __( 'All clothes', 'clothes' ),
        'search_items'          => __( 'Search clothes', 'clothes' ),
        'parent_item_colon'     => __( 'Parent clothes:', 'clothes' ),
        'not_found'             => __( 'No clothes found.', 'clothes' ),
        'not_found_in_trash'    => __( 'No clothes found in Trash.', 'clothes' ),
        'featured_image'        => _x( 'clothes Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'clothes' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'clothes' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'clothes' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'clothes' ),
        'archives'              => _x( 'clothes archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'clothes' ),
        'insert_into_item'      => _x( 'Insert into clothes', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'clothes' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this clothes', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'clothes' ),
        'filter_items_list'     => _x( 'Filter clothes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'clothes' ),
        'items_list_navigation' => _x( 'clothes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'clothes' ),
        'items_list'            => _x( 'clothes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'clothes' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'clothes custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'clothes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),

    );
      
    register_post_type( 'clothes', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );


/**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_book_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x('category', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Genre', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search category', 'textdomain'),
        'all_items'         => __('All category', 'textdomain'),
        'parent_item'       => __('Parent category', 'textdomain'),
        'parent_item_colon' => __('Parent category:', 'textdomain'),
        'edit_item'         => __('Edit category', 'textdomain'),
        'update_item'       => __('Update category', 'textdomain'),
        'add_new_item'      => __('Add New category', 'textdomain'),
        'new_item_name'     => __('New category Name', 'textdomain'),
        'menu_name'         => __('category', 'textdomain'),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );
        register_taxonomy('Genre', array( 'clothes', 'post' ), $args);
    }

    add_action( 'init', 'wpdocs_create_book_taxonomies', 0 );

    function wpdocs_register_meta_boxes() {
        add_meta_box( 'meta-box-id', __( 'phone number', 'textdomain' ), 'wpdocs_my_display_callback', 'clothes' );
    }
    add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );

    function wpdocs_my_display_callback( $post ) {
        $jawwal = get_post_meta($post->ID, 'jawwal', true) ? get_post_meta($post->ID, 'jawwal', true) : '';
        $email = get_post_meta($post->ID, 'email', true) ? get_post_meta($post->ID, 'email', true) : '';

    ?>
        <label><?php _e('jawwal', 'domain'); ?></label>
        <input type="text" name="jawwal" value="<?php esc_attr_e($jawwal) ?>" />
        <label><?php _e('email', 'domain'); ?></label>
        <input type="email" name="email" value="<?php esc_attr_e($email) ?>" />
        <?php
    }

    function save_post_cloth($post_id) {
        if(isset($_POST['jawwal']) && $_POST['jawwal'] != '') {
            update_post_meta($post_id, 'jawwal', sanitize_title($_POST['jawwal']));
        };
        if(isset($_POST['email']) && $_POST['email'] != '') {
            update_post_meta($post_id, 'email', sanitize_email($_POST['email']));
        };
        
    }
    add_action( 'save_post', 'save_post_cloth' );