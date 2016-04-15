<?php
/* Template Name: Portfolio */
get_header();
//filter Portfolio Posts
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$portfolioQuery = new WP_Query($filter);
?>
    <!-- section -->
    <?php if (have_posts()): ?>
        <section class="container intro">
            <?php while (have_posts()) : the_post(); ?>

            <div class="post_content">
                <?php get_template_part('partials/headline'); ?>
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </section>

    <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

        </article>
        <!-- /article -->

    <?php endif; ?>


        <?php if ($portfolioQuery->have_posts()): ?>
            <section class="container">
                <div id="portfolio">
                    <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
                        <?php get_template_part('partials/loop', 'portfolio'); ?>
                    <?php endwhile; ?>
                    <?php get_template_part('pagination'); ?>

                <?php else: ?>
                    <!-- article -->
                    <?php get_template_part('partials/article', '404'); ?>
                    <!-- /article -->
                </div>
            </section>
        <?php endif; ?>
    
    <!-- /section -->

<?php get_footer(); ?>
