<?php
function it_custom_init() {
	/**
	 * Register custom post types and taxonomies
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_post_type/
	 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
	 * @link https://developer.wordpress.org/resource/dashicons/
	 */

	// CPT: Project
	$labels = array(
		'name'          => __( 'Projects', 'parla' ),
		'singular_name' => __( 'Project', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Project', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'project', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'project', $args );
// CPT: Service
	$labels = array(
		'name'          => __( 'Services', 'parla' ),
		'singular_name' => __( 'Services', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Services', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-hammer',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'services', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'services', $args );
	// CPT: Reviews
	$labels = array(
		'name'          => __( 'Reviews', 'parla' ),
		'singular_name' => __( 'Reviews', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Reviews', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-admin-customizer',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'reviews', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'reviews', $args );
// CPT: Team
	$labels = array(
		'name'          => __( 'Team', 'parla' ),
		'singular_name' => __( 'Team', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Team', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'team', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'team', $args );
	// CPT: Trainings
	$labels = array(
		'name'          => __( 'Trainings', 'parla' ),
		'singular_name' => __( 'Trainings', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Trainings', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'trainings', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'trainings', $args );
	// CPT: Career
	$labels = array(
		'name'          => __( 'Career', 'parla' ),
		'singular_name' => __( 'Career', 'parla' ),
	);

	$args = array(
		'label'               => __( 'Career', 'parla' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'rest_base'           => '',
		'has_archive'         => false,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // enable Gutenberg for this CPT
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'career', 'with_front' => true ),
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	);

	register_post_type( 'career', $args );

	// taxonomy: Project Category
	register_taxonomy( 'project-category',
		array( 'project' ), /* name of CPT */
		array(
			'labels'            => array(
				'name'          => __( 'Project Categories', 'parla' ),
				'singular_name' => __( 'Project Category', 'parla' ),
				'add_new_item'  => __( 'Add New Category', 'parla' ),
			),
			'hierarchical'      => true,     /* if this is true, it acts like categories */
			'show_admin_column' => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'project-category' )
		)
	);
// taxonomy: Project Category
	register_taxonomy( 'position-category',
		array( 'team' ), /* name of CPT */
		array(
			'labels'            => array(
				'name'          => __( 'Position categories', 'parla' ),
				'singular_name' => __( 'Position categories', 'parla' ),
				'add_new_item'  => __( 'Add New Category', 'parla' ),
			),
			'hierarchical'      => true,     /* if this is true, it acts like categories */
			'show_admin_column' => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'position-category' )
		)
	);
}

add_action( 'init', 'it_custom_init' );
