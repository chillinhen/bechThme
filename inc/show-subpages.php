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
    <?php while ($subLoop->have_posts()) : $subLoop->the_post(); ?>
    <?php get_template_part('partials/article','leistungen');?>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>  
<?php endif; ?>