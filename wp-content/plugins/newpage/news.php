<?php

/**
 * Register a custom post type called "news".
 *
 * @see get_post_type_labels() for label keys.
 */


add_action('wp_footer', 'print_in_footer');
function print_in_footer() {
	$args = array(
		'post_type' => 'news',
		// 'posts_per_page' => 3,
		// 'paged' => 2,
		'orderby' => 'ID',
		'order' => 'DESC',
	  );
	  $the_query = new WP_Query($args);
	  if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
		  ?>
  <div class="item" style="width: 100%; height: 300px; display: flex; background-color: <?php echo get_option('my_plugin_backgroundColor'); ?> ">
	  <?php $pic = get_the_post_thumbnail_url(get_the_ID(), 'home_slider') ?>
	<img style="width: 70%; height: 260px" src="<?php echo $pic; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>">
	<div class="down-content" style="padding: 3rem 3rem; color: <?php echo get_option('my_plugin_color'); ?>">
	  <h4 style="font-size: <?php echo get_option('my_plugin_fontsize'); ?>px"><?php the_title() ?></h4>
	  <div> <?php  the_content() ?> </div>
	</div>
  </div>
<?php
	}}
}


function wpdocs_codex_news_init() {
    $labels = array(
        'name'                  => _x( 'news', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'news', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'news', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'news', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New news', 'textdomain' ),
        'new_item'              => __( 'New news', 'textdomain' ),
        'edit_item'             => __( 'Edit news', 'textdomain' ),
        'view_item'             => __( 'View news', 'textdomain' ),
        'all_items'             => __( 'All news', 'textdomain' ),
        'search_items'          => __( 'Search news', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent news:', 'textdomain' ),
        'not_found'             => __( 'No news found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No news found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'news Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'news archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into news', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this news', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter news list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'news list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'news list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'news', $args );
}
 
add_action( 'init', 'wpdocs_codex_news_init' );


/**
 * Create two taxonomies, genres and writers for the post type "news".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_news_taxonomies() {
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
        'rewrite'           => array( 'slug' => 'news' ),
    );
        register_taxonomy('news', array( 'news', 'post' ), $args);
    }

    add_action( 'init', 'wpdocs_create_news_taxonomies', 0 );