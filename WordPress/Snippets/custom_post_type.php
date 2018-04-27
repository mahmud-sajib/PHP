<?php

// registering a custom post type

function custom_post_type(){
	register_post_type( 'custom_post_type', array(
		'labels' => array(
			'name' => 'Home Slider'
		),
		'public' => true,
		'show_in_menu' => 'front-sections',
		'supports' => array( 'title','thumbnail','editor','page-attributes')
	));
}

add_action('init', 'custom_post_type');

?>
