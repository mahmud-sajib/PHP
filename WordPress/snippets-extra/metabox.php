<?php

/*

Steps for creating metabox:

1. Write add_meta_box( $id, $title, $callback, $post_type ) function within a callback function

2. Call add_action( 'add_meta_boxes', 'callback' ) hook to register the metabox

3. Display all input fields within the $callback($post) function

4. Write a new function that will save the values of the metabox fields - saveFunc( $post_id )

5. Sanitize and Update the meta field in the database

6. Finally call add_action( 'save_post', 'saveFunc' ) hook to save the updated neta field value

*/

/*

Show meta field value in the frontend:

$global_notice = esc_attr( get_post_meta( $post->ID, '_global_notice', true ));echo $global_notice;

*/

function global_notice_meta_box() {

    add_meta_box(
        'global-notice',
        __( 'Global Notice', 'sitepoint' ),
        'global_notice_meta_box_callback',
        'portfolios'
    );
}

add_action( 'add_meta_boxes', 'global_notice_meta_box' );

function global_notice_meta_box_callback( $post ) {

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'global_notice_nonce', 'global_notice_nonce' );

    $value = get_post_meta( $post->ID, '_global_notice', true );
    echo '<p><label for="global_notice">Warning Message:</label></p>';
    echo '<textarea style="width:100%" id="global_notice" name="global_notice">' . esc_attr( $value ) . '</textarea>';

     // Add a nonce field so we can check for it later.
    wp_nonce_field( 'notice_name_nonce', 'notice_name_nonce' );

    $text_input = get_post_meta( $post->ID, '_notice_name', true );
    echo '<p><label for="notice_name">Warning Level:</label></p>';
    echo '<input type ="text" name="notice_name" id="notice_name" value="'.esc_attr( $text_input).'" >';
}

function save_global_notice_meta_box_data( $post_id ) {

    // Check if our nonce is set.
    if ( ! isset( $_POST['global_notice_nonce'] ) ) {
        return;
    }

    if ( ! isset( $_POST['notice_name_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['global_notice_nonce'], 'global_notice_nonce' ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['notice_name_nonce'], 'notice_name_nonce' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['portfolios'] ) && 'page' == $_POST['portfolios'] ) {

        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }

    }
    else {

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    /* OK, it's safe for us to save the data now. */

    // Make sure that it is set.
    if ( ! isset( $_POST['global_notice'] ) ) {
        return;
    }

    if ( ! isset( $_POST['notice_name'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['global_notice'] );

    // Sanitize user input.
    $name_data = sanitize_text_field( $_POST['notice_name'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_global_notice', $my_data );
    update_post_meta( $post_id, '_notice_name', $name_data );
}

add_action( 'save_post', 'save_global_notice_meta_box_data' );

?>