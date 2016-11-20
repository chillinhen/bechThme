<?php /* Template Name: Kontakt */ get_header(); ?>
<!-- section -->
<section class="contact">
    <?php if (have_posts()): ?>
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/headline'); ?>

                <?php the_content(); ?>


                <br class="clear">

                <?php edit_post_link(); ?>

            <?php   endwhile; ?>

        <?php else: ?>

            <?php get_template_part('partials/article', '404'); ?>
        </article>
        <!-- /article -->
    <?php endif; ?>
</section>
<!-- /section -->

<?php get_template_part('partials/contact', 'buttons'); ?>
<?php 
get_template_part('partials/contact', 'map'); 
get_template_part('partials/impressum');
?>
<?php get_footer(); ?>
