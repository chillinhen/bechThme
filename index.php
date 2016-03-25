<?php get_header(); ?>


    <!-- section -->
    <section class="container">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php get_template_part('loop'); ?>
            <?php endwhile; ?>
            <?php get_template_part('pagination'); ?>
        <?php else: ?>
            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->

        <?php endif; ?>
            
    </section>
    
    <!-- /section -->


<?php get_footer(); ?>
