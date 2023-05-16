<?php

/* Services Custom Post */
function antifragile_experiences() {
	$labels = array(
		'name'                  => _x( 'Experiences', 'Post type general name', 'antifragile' ),
		'singular_name'         => _x( 'Experience', 'Post type singular name', 'antifragile' ),
		'menu_name'             => _x( 'Experiences', 'Admin Menu text', 'antifragile' ),
		'name_admin_bar'        => _x( 'Experience', 'Add New on Toolbar', 'antifragile' ),
		'add_new'               => __( 'Add Experience', 'antifragile' ),
		'add_new_item'          => __( 'Add New Experience', 'antifragile' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Services custom post type.',
		'rewrite'            => array( 'slug' => 'experience' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'experience', $args );
}

add_action( 'init', 'antifragile_experiences' );

/* Concepts Custom Post */
function antifragile_concept() {
	$labels = array(
		'name'                  => _x( 'Risk Concepts', 'Post type general name', 'antifragile' ),
		'singular_name'         => _x( 'Risk Concept', 'Post type singular name', 'antifragile' ),
		'menu_name'             => _x( 'Risk Concept', 'Admin Menu text', 'antifragile' ),
		'name_admin_bar'        => _x( 'Risk Concept', 'Add New on Toolbar', 'antifragile' ),
		'add_new'               => __( 'Add Risk Concept', 'antifragile' ),
		'add_new_item'          => __( 'Add New Risk Concept', 'antifragile' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Risk Concept custom post type.',
		'rewrite'            => array( 'slug' => 'risk-concept' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'risk-concept', $args );
}

add_action( 'init', 'antifragile_concept' );


