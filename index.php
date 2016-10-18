<?php get_header(); ?>

<!-- section -->
<section class="container">
    <?php get_template_part('partials/portfolio', 'intro'); ?>
    <div id="portfolio-liste">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/loop', 'portfolio'); ?>
        <?php endwhile; ?>

        <?php else: ?>
            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->

        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>