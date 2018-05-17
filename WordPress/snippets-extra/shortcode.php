<?php

/*

Steps for creating a shortcode:

1. Write a function with 2 attributes: $atts, $content

2. shortcode_atts(array(),$atts) are used to set custom attributes

3. To show the shortcode contents we have to return the $content with custom attributes(if any)

4. $content will act as a placeholder of the original text put into the shortcode
(e.g. [shortcode]$content[/shortcode])  

5. Finally we call add_shortcode('shortcodeName','callback') hook to turn it into action

*/

// shortcode (creating a normal text)

function my_heading($atts,$content){

	$custom_attributes = shortcode_atts( 
	array(
		'color' => 'red',
		'font-size' => '20px'
	), 
	$atts );

	return "<h1 style ='color:".$custom_attributes['color'].";font-size:".$custom_attributes['font-size']."'>".$content."</h1>";
}

add_shortcode('text','my_heading');

// shortcode (creating a button)

function myButton($atts,$content){

	$button_attr = shortcode_atts( 
		array(
			'url'   => 'https://github.com',
			'class' => 'custom-class'
		), 
		$atts);

	return '<a href="'.$button_attr['url'].'" class="'.$button_attr['class'].'">'.$content.'</a>';
}

add_shortcode('more_btn','myButton');

// shortcode (showing current time)

function showTime(){
	date_default_timezone_set("Asia/Dhaka");
	return date("h:i:sa");
}

add_shortcode( 'myTime', 'showTime' );








































