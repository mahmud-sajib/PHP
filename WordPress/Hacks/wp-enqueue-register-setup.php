<?php

//Reference for understanding Hook, Action and Filters:
//http://blog.teamtreehouse.com/hooks-wordpress-actions-filters-examples

/*

Enqueue, style, setup rules:

1. add_action($actionName, $function) hooks a function on to a specific action. Example of actions hooks:

    a. 'wp_enqueue_scripts' is the proper hook to use when enqueuing items that are meant to appear on the front end. Despite the name, it is used for enqueuing both scripts and styles. 
    
    b. 'after_setup_theme' is called during each page load, after the theme is initialized. It is generally used to perform basic setup, registration, and init actions for a theme. 
    
    c. 'widgets_init' fires after all default WordPress widgets have been registered.
    
    d. 'admin_menu' is used to add extra submenus and menu options to the admin panel's menu structure. It runs after the basic admin panel menu structure is in place. 
    
    e. 'init' fires after WordPress has finished loading and initiate custom posts.
    
    f. 'customize_register' action hook is used to customize and manipulate the Theme Customization admin screen
    
2. add_shortcode( $name , $function ) hooks a function on to the shortcode
    
3. add_theme_support($feature) registers theme support for a given feature.
   
   N.B. If it is attached to a hook, it must be ‘after_setup_theme’

4. wp_register_style($name, $url) is a safe way to register CSS style files for later use

5. wp_enqueue_style($name) will instruct wordpress to load the stylesheet onto the page right away

*/

?>
