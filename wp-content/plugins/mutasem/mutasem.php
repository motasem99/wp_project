<?php

/*
Plugin Name: Hello mutasem
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: hello mutasem kwaik </cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Author URI: http://ma.tt/
*/

// add_action('wp_footer', 'print_in_footer');
// function print_in_footer() {
// 	$args = array(
// 		'post_type' => 'movies',
// 		// 'posts_per_page' => 3,
// 		// 'paged' => 2,
// 		'orderby' => 'ID',
// 		'order' => 'DESC',
// 	  );
// 	  $the_query = new WP_Query($args);
// 	  if ($the_query->have_posts()) {
// 		while ($the_query->have_posts()) {
// 			$the_query->the_post();


/*
// 		  ?>
//   <div class="item" style="width: 80%; height: 300px; display: flex">
// 	  <?php $pic = get_the_post_thumbnail_url(get_the_ID(), 'home_slider') ?>
// 	<img style="width: 70%; height: 260px" src="<?php echo $pic; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>">
// 	<div class="down-content" style="padding: 3rem 3rem">
// 	  <h4><?php the_title() ?></h4>
// 	  <div> <?php  the_content() ?> </div>
// 	</div>
//   </div>
// <?php
// 	}}
// }

*/

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ),
        'custom menu',
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    esc_html_e( 'Admin Page Test', 'textdomain' );  
}


function custom_post_type() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwenty' ),
			'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwenty' ),
			'menu_name'           => __( 'Movies', 'twentytwenty' ),
			'parent_item_colon'   => __( 'Parent Movie', 'twentytwenty' ),
			'all_items'           => __( 'All Movies', 'twentytwenty' ),
			'view_item'           => __( 'View Movie', 'twentytwenty' ),
			'add_new_item'        => __( 'Add New Movie', 'twentytwenty' ),
			'add_new'             => __( 'Add New', 'twentytwenty' ),
			'edit_item'           => __( 'Edit Movie', 'twentytwenty' ),
			'update_item'         => __( 'Update Movie', 'twentytwenty' ),
			'search_items'        => __( 'Search Movie', 'twentytwenty' ),
			'not_found'           => __( 'Not Found', 'twentytwenty' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'movies', 'twentytwenty' ),
			'description'         => __( 'Movie news and reviews', 'twentytwenty' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'movies', $args );

	}

	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/

	add_action( 'init', 'custom_post_type', 0 );


