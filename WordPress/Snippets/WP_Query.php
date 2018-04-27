<?php

    // fetching contents from a custom post type using WP_Query

        $custom_post = new WP_Query(array(
            'post_type' => 'custom_post',
            'posts_per_page' => 4,
            'orderby' => 'menu_order title',
            'order'   => 'ASC'
        ));
    ?>


    <?php
        if($custom_post->have_posts()) {
            while ($custom_post->have_posts()) {
                $custom_post->the_post();
                ?>
        <div class="col-md-3 text-center">
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail( array(80,80), array('class' => 'feature-icon'));
                }
            ?>
                <p>
                    <?php the_content();?>
                </p>
        </div>
        <?php
            }
            wp_reset_postdata();
        }
    ?>
