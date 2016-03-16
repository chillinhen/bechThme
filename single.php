<?php get_header(); ?>

    <!-- section -->
    <section class="top-fold row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('item row'); ?>>
                    <section class="post_content col-md-6">
                        <hgroup class="">
                            <?php get_template_part('partials/headline'); ?>
                            <?php the_content(); ?>
                            <span class="rightalign"><?php edit_post_link(); ?></span>
                        </hgroup>
                    </section>
                    <aside class="col-md-6">
                        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <?php the_post_thumbnail('thumb-detail'); // Declare pixel size you need inside the array ?>
                        <?php endif; ?>
                    </aside>
                </article>
            <?php endwhile; ?>
            <?php else :?>
            <article>
                <?php get_template_part('partials/article', '404'); ?>
            </article>
        <?php endif; ?>
    </section>
    
                <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'portfolio',
            'posts_per_page' => -1, // you may edit this number
            'orderby' => 'rand',
            'post__not_in' => array($post->ID),
        );
        $related_items = new WP_Query($args);
// loop over query
        if ($related_items->have_posts()) : ?>
    <section class="bottom-fold related row">
            <?php while ($related_items->have_posts()) : $related_items->the_post();
                ?>
                <?php get_template_part('partials/loop', 'portfolio'); ?>
                <?php
            endwhile;?>
          
                </section>
       <?php  endif;
// Reset Post Data
        wp_reset_postdata();
        ?>
   
    <!-- /section -->

<?php get_footer(); ?>
