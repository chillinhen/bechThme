<?php
/* Template Name: Portfolio */
get_header();
//filter Portfolio Posts
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'rand'
);
$portfolioQuery = new WP_Query($filter);
?>
    <!-- section -->
    <?php if (have_posts()): ?>
        <section class="clearfix">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/headline'); ?>
                <?php the_content(); ?>

            <?php endwhile; ?>
        </section>

    <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

        </article>
        <!-- /article -->

    <?php endif; ?>


    <?php if ($portfolioQuery->have_posts()): while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
            <section id="portfolio" class="clearfix">
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
