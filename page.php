<?php get_header(); ?>
<!-- section -->
<section class="container intro">



    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="post_content">
                    <?php get_template_part('partials/headline'); ?>
                    <?php the_content(); ?>
                </section>
                <aside>
                    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                        <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
                    <?php endif; ?>
                </aside>
            </article>
            <!-- /article -->
            <?php edit_post_link(); ?>
            <?php wp_link_pages(); ?>

        <?php endwhile; ?>

    <?php else: ?>

        <article>
            <?php get_template_part('partials/article', '404'); ?>
        </article>

    <?php endif; ?>

</section>

<?php #get_sidebar(); ?>

<?php get_footer(); ?>
