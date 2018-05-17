<?php

/*

To add a field in a settings page(e.g. reading) follow the steps:

1. Create 2 functions within a callback function:

	a) add_settings_field( $id, $title, $callback, $page);
	b) register_setting( $page, $id );

2. Write the input fields within the $callback of add_settings_field() function

3. Finally call the add_action('admin_init','callback') hook to turn it into action

*/

/*

To add a new menu in the settings page and add a field within it follow the steps:

1. Create 3 functions within a callback function:

    a) add_settings_section( $section_id, $title, $callback, $slug );
	a) add_settings_field( $field_id, $title, $callback, $slug, $section_id);
	b) register_setting( $section_id, $field_id );
	
	
2. Write normal info within the $callback of add_settings_section() function

3. Write the input fields within the $callback of add_settings_field() function

4. Call the add_action('admin_init','callback') hook to turn it into action

5. Write add_options_page( $page_title, $menu_title, $capability, $slug, $callback ) function within a callback

6. Write following functions within the 'form' tag of the $callback:

    a) do_settings_sections( $slug );
    b) settings_fields( $section_id );
    c) submit_button();

7. Finally call the add_action( 'admin_menu', 'add_settings_menu' ) hook to turn it into action

*/

/*

To show the field values on the front end: 
<?php echo get_option($field_id); ?>

*/

/*
add new field in wordpress settings page 
*/

function settingsMod(){

	// author field
	add_settings_field( 'author_name', 'Author Name', 'authFunc', 'reading' );
	register_setting( 'reading', 'author_name' );

    // secret no field
	add_settings_field( 'secret_num', 'Secret Number', 'numFunc', 'reading' );
	register_setting( 'reading', 'secret_num' );

}

// callback function for author field
function authFunc(){
	echo "<input name='author_name' value ='".get_option('author_name')."' type='text' >";
}

// callback function for secret no field
function numFunc(){
	echo "<input name='secret_num' value ='".get_option('secret_num')."' type='text' >";
}

// action hook
add_action('admin_init','settingsMod');



/*
create new menu in wordpress settings page & add new fields within the new menu
*/

// creating new fields
function productFunc(){

    // container section for all fields
	add_settings_section( 'general_section', 'General Section', 'sectionFunc', 
		'info_options.php' );
    
    // product name field
	add_settings_field( 'pro_name', 'Product Name', 'nameFunc', 'info_options.php', 
		'general_section');
	register_setting( 'general_section', 'pro_name' );
	

    // product id field
	add_settings_field( 'pro_id', 'Product Id', 'idFunc', 'info_options.php', 
		'general_section');
	register_setting( 'general_section', 'pro_id' );
	

}

// callback for settings sections
function sectionFunc(){
	echo "You can get necessary product info from here";
}

// callback for settings field(name)
function nameFunc(){
	echo "<input name='pro_name' value='".get_option('pro_name')."' type='text'>";
}

// action hook for the fields
add_action( 'admin_init', 'productFunc' );

// add menu in the settings page
function add_settings_menu(){
	add_options_page( 'Info Area', 'My Info', 'manage_options', 'info_options.php', 'menuFunc' );

}

// callback for settings sections
function menuFunc(){
	echo "<h1>Product Options</h1>";
	?>

    <form action="options.php" method="post">
    	<?php
	    	do_settings_sections( 'info_options.php' );
		    settings_fields( 'general_section' );
		    submit_button();
    	?>
    </form>
	
	<?php
}

// action hook
add_action( 'admin_menu', 'add_settings_menu' );

?>