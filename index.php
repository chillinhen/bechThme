<?php get_header(); ?>


    <!-- section -->
    <section id="portfolio" class="clearfix">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/loop', 'portfolio'); ?>
                <?php get_template_part('partials/loop', 'portfolio'); ?>
                <?php get_template_part('partials/loop', 'portfolio'); ?>
            <?php endwhile; ?>

        <?php else: ?>
            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->

        <?php endif; ?>
            
    </section>
    <?php get_template_part('pagination'); ?>
    <!-- /section -->


<?php get_footer(); ?>
