<?php

// creating a typical shortcode

function action_button_shortcode( $atts ) {
       $atts = shortcode_atts(
               array(
                       'color' => 'blue',
                       'title' => 'Title',
                       'subtitle' => 'Subtitle',
                       'url' => '',
                       'class' => ''
               ),
               $atts, 'action-button'
           );

       return '<a class="' .$atts['class']. '" href="' .$atts['url'] . '">' .$atts['title']. '</a>';
}

add_shortcode( 'action-button', 'action_button_shortcode' );
        
?>
