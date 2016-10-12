<?php /* Template Name: Home */ get_header(); ?>
<section class="container">
    <?php if (have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
                <h1 class="container"><?php the_title(); ?></h1>
            </article>
        <?php endwhile; ?>

    <?php else: ?>
        <?php get_template_part('partials/article', '404'); ?>
    <?php endif; ?>
</section>
<?php #get_template_part('partials/one-pager');?>
<?php get_footer(); ?>