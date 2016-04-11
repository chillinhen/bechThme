<?php /* Template Name: Page mit Subpages */ get_header(); ?>


<!-- section -->
<section class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
                        <div class="flexslider">
                            <ul class="slides">
                                <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                                    <li><?php get_template_part('partials/article', 'flexslider'); ?></li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                <?php elseif (is_page(5)) : ?>
                    <div class="text-center post_content"><?php get_template_part('partials/headline'); ?></div>
                    <div class="text-center post_content"><?php the_content(); ?></div>

                    <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                        <?php get_template_part('partials/article', 'leistungen'); ?>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            <?php else : ?>
                <!-- article -->
            <?php get_template_part('partials/article', get_post_format()); ?>

                <!-- /article -->
            <?php endif; ?>

        <?php endwhile; ?>

<?php else: ?>

        <!-- article -->
    <?php get_template_part('partials/article', '404'); ?>
        <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->


<?php get_footer(); ?>
