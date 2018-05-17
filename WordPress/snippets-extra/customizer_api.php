<?php

/*

Steps for creating options in wordpress customizer:

1. Write a callback function with an argument: customize_register_func($wp_customize)

2. Write 3 following objects :

	a) $wp_customize->add_section($section_id,array())
	b) $wp_customize->add_setting($settings_id,array())
	c) $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'developer_name', array())

3. Finally call add_action('customize_register','callback') hook to turn it into action

*/

/*

Show customizer settings in the front end:

<?php echo get_theme_mod( 'dev_photo' ); ?>

*/

function customizer_register($wp_customize){

    // section to hold all customizer options
	$wp_customize->add_section('developer_info',array(
		'title' => 'Developer Info',
		'priority' => 170
	));

	// name field

	$wp_customize->add_setting('developer_name',array(
		'default' => 'John Doe',
		'transport' => 'refresh'
	));	

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'developer_name', array(
		'section'  => 'developer_info',
		'settings' => 'developer_name',
		'label'    => 'Developer Name',
		'type'     => 'text'
	)));

	// photo upload field

	$wp_customize->add_setting('dev_photo',array(
		'default' => ' ',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dev_photo', array(
		'section'  => 'developer_info',
		'settings' => 'dev_photo',
		'label'    => 'Developer Photo'
	)));

	// color picker field

	$wp_customize->add_setting('fav_color',array(
		'default' => '#000000',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fav_color', array(
		'section'  => 'developer_info',
		'settings' => 'fav_color',
		'label'    => 'Favorite color'
	)));

    // checkbox field
	
	$wp_customize->add_setting('chk_box',array(
		'default' => true,
		'transport' => 'refresh'
	));	

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'chk_box', array(
		'section'  => 'developer_info',
		'settings' => 'chk_box',
		'label'    => 'Show image',
		'type'     => 'checkbox'
	)));

    // select field
	
	$wp_customize->add_setting('job_select',array(
		'default' => 'Teacher',
		'transport' => 'refresh'
	));	

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'job_select', array(
		'section'  => 'developer_info',
		'settings' => 'job_select',
		'label'    => 'Choose Profession',
		'type'     => 'select',
		'choices'  => array(
			'Teacher' => 'Teacher',
			'Doctor'  => 'Doctor',
			'Programmer' =>'Programmer' 
		)
	)));


}

add_action('customize_register','customizer_register');

?>