<?php /* Template Name: Page mit Subpages */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                
                <!-- article -->
                <?php get_template_part('partials/article', get_post_format()); ?>

                <!-- /article -->
                <!-- submenu -->
                <?php
                $parent = $post->ID;
                $filter = array(
                    'post_type' => 'page',
                    'post_parent' => $parent,
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $subLoop = new WP_Query($filter);

                if ($subLoop->have_posts()) :
                    ?>
                    <?php if (is_page(701)) : ?>
                <div id="carousel" class="carousel slide" data-ride="" data-pause="hover">
                    <div class="carousel-inner" role="listbox">
                        <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                            <?php get_template_part('partials/article', 'unternehmen'); ?>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <?php get_template_part('partials/carousel','controls');?>
                    </div>
                    <?php elseif (is_page(5)) : ?>
                        <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                            <?php get_template_part('partials/article', 'leistungen'); ?>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                <?php endif; ?>
    <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->

<?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
