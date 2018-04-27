<?php

// creating a footer section in WordPress customizer

function sr_customize_register($wp_customize){

	$wp_customize->add_section('footer_section', array(
		'title'     =>'Footer Section',
		'priority'  =>170
	));

	$wp_customize->add_setting('copyright_text',array(
		'default'   =>'Your copyright text',
		'transport' =>'refresh'

	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright_text', array(
		'section'   =>'footer_section',
        'settings'  => 'copyright_text',
		'label'     =>'Copyright Text',
		'type'      =>'text'
	)));

}

add_action( 'customize_register', 'sr_customize_register');

?>
