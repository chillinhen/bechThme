<?php
$query = new WP_Query('pagename=ueber-uns');
if ($query->have_posts()) :
    ?>
    <section id="ueber-uns" class="subpages">
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
                        <div class="flexslider">
                            <ul class="slides">
                                <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
                                    <li><?php 
                                    get_template_part('partials/article', 'flexslider'); ?></li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                <?php endif; ?>

                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>  
    </div>
</section>