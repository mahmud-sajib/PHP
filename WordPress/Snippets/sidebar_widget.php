<?php

// creating a sidebar widget

function sr_sidebar_widgets(){
    register_sidebar( array(
        'name'          => __( 'Sidebar Right', 'textDomain' ),
        'id'            => 'sr_right_sidebar',
        'description'   => __( 'Sidebar widgets to be placed', 'textDomain' ),
        'before_widget' => '<div class="col-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title">',
		'after_title'   => '</div>'
    ) );
}

add_action('widgets_init', 'sr_sidebar_widgets');

?>
