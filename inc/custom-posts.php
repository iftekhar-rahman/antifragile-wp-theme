<?php

/* Services Custom Post */
function antifragile_services() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'antifragile' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'antifragile' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'antifragile' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'antifragile' ),
		'add_new'               => __( 'Add Service', 'antifragile' ),
		'add_new_item'          => __( 'Add New Service', 'antifragile' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Services custom post type.',
		'rewrite'            => array( 'slug' => 'service' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'antifragile_services' );

/* Services Custom Post */
function antifragile_concept() {
	$labels = array(
		'name'                  => _x( 'Concept', 'Post type general name', 'antifragile' ),
		'singular_name'         => _x( 'Concept', 'Post type singular name', 'antifragile' ),
		'menu_name'             => _x( 'Concept', 'Admin Menu text', 'antifragile' ),
		'name_admin_bar'        => _x( 'Concept', 'Add New on Toolbar', 'antifragile' ),
		'add_new'               => __( 'Add Concept', 'antifragile' ),
		'add_new_item'          => __( 'Add New Concept', 'antifragile' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Concept custom post type.',
		'rewrite'            => array( 'slug' => 'concept' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'concept', $args );
}

add_action( 'init', 'antifragile_concept' );


