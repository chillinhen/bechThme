<?php /* Template Name: Page mit Flexslider */ get_header(); ?>


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
                                    <li>
                                        <img src="slide1.jpg" />
                                        <p class="flex-caption">Adventurer Cheesecake Brownie</p>
                                    </li>
                                    <li>
                                        <img src="slide2.jpg" />
                                        <p class="flex-caption">Adventurer Lemon</p>
                                    </li>
                                    <li>
                                        <img src="slide3.jpg" />
                                        <p class="flex-caption">Adventurer Donut</p>
                                    </li>
                                    <li>
                                        <img src="slide4.jpg" />
                                        <p class="flex-caption">Adventurer Caramel</p>
                                    </li>
                                </ul>
                            </div>
                <?php elseif (is_page(5)) : ?>
                    <div class="col-sm-12 text-center"><?php get_template_part('partials/headline'); ?></div>
                    <div class="col-sm-12 text-center"><?php the_content(); ?></div>

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
