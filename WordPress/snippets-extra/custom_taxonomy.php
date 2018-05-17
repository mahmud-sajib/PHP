<?php

/*

Steps for creating a custom taxonomy:

1. Write a callback function that will hold 2 functions:
	a) register_post_type( $post_type, array( '' ) );
	b) register_taxonomy( $taxonomy, $post_type, array( '' ) );

2. Finally call the add_action( 'init', 'callback' ) hook to turn it into action

*/

/*
To show taxonomy on the front end write following code within WP_Query():

<?php

	$topic = get_the_terms(get_the_ID(),$taxonomy);

	foreach ($topic as $topics) {

		$portfolio_topic = $topics->name;
		$link = get_term_link($topics, $taxonomy);

		echo "<a href='".$link."'>$portfolio_topic</a> ";
	}

?>

*/



function customPosts(){
	register_post_type( 'portfolios', array( 
		'labels' => array(
			'name' => 'Portfolios'
		), 
		'public' => true,
		'supports' => array('title','editor','thumbnail')
	) );

	register_taxonomy( 'portfolio-topic', 'portfolios', array( 
		'labels' => array(
			'name' => 'Topics',
			'add_new_item' => 'Add New Topic'
		),
		'public' => true ,
		'hierarchical' => true
	) );

	register_taxonomy( 'portfolio-keyword', 'portfolios', array( 
		'labels' => array(
			'name' => 'Keywords',
			'add_new_item' => 'Add New Keyword'
		),
		'public' => true ,
		'hierarchical' => false
	) );
}

add_action( 'init', 'customPosts' );