<?php get_header(); ?>
<!-- section -->
<section class="top-fold container">



    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="post_content">
                    <?php get_template_part('partials/headline'); ?>
                    <?php the_content(); ?>
                </section>
                <aside>
                    <?php get_template_part('partials/gallery', 'carousel'); ?>
                </aside>
            </article>
            <!-- /article -->
            <?php edit_post_link(); ?>

        <?php endwhile; ?>

    <?php else: ?>

        <article>
            <?php get_template_part('partials/article', '404'); ?>
        </article>

    <?php endif; ?>

</section>

<?php #get_sidebar(); ?>

<?php get_footer(); ?>
