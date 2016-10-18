<?php
$query = new WP_Query('pagename=leistungen');
if ($query->have_posts()) :
    ?>
    <section id="leistungen">
        <div class="container intro">
            <?php
            while ($query->have_posts()) : $query->the_post();
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
                    <div class="text-center post_content headline"><?php get_template_part('partials/headline'); ?></div>
                    <div class="text-center post_content intro"><?php the_content(); ?></div>

                    <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                        <?php get_template_part('partials/article', 'leistungen'); ?>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>

                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>  
    </div>
</section>