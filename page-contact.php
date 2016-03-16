<?php /* Template Name: Kontakt */ get_header(); ?>

<!-- section -->
<section class="contact">



    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="container">
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php get_template_part('partials/headline'); ?>

                    <?php the_content(); ?>


                    <br class="clear">

                    <?php edit_post_link(); ?>

                </article>
                <!-- /article -->
                <?php get_template_part('partials/contact', 'buttons'); ?>
                <?php get_template_part('partials/contact', 'map'); ?>

            <?php endwhile; ?>

        <?php else: ?>

            <article>
                <?php get_template_part('partials/article', '404'); ?>
            </article>
        </div>
    <?php endif; ?>

</section>
<!-- /section -->

<?php get_footer(); ?>
