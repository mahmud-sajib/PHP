<?php

//Adding a menu to contain the custom post types for Homepage

function sr_frontpage_admin_menu() {
    add_menu_page(
        'Home Sections',
        'Home Sections',
        'manage_options',
        'front-sections',
        '',
        'dashicons-admin-home',
        40
    );
}

add_action( 'admin_menu', 'sr_frontpage_admin_menu' );

?>
