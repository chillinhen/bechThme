<?php
// get only first 3 results
$ids = get_field('one-pager-items', false, false);

$onePageQuery = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post__in' => $ids,
    'post_status' => 'any',
    'orderby' => 'post__in',
        ));
if ($onePageQuery->have_posts()):while ($onePageQuery->have_posts()) : $onePageQuery->the_post();
        ?>

    <?php get_template_part('partials/section','onepager');?>

        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>