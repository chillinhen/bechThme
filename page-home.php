<?php /* Template Name: Home */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <section class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
                <h1><?php the_title(); ?></h1>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part('partials/article', '404'); ?>

    </section>
<?php endif; ?>
<?php get_footer(); ?>