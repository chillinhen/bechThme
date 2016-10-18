<?php
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$portfolioQuery = new WP_Query($filter);
?>
<?php if ($portfolioQuery->have_posts()): ?>
    <section id="portfolio" class="container">
        <?php
        get_template_part('partials/portfolio', 'intro');?>
        <div id = "portfolio-liste">
        <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post();
            ?>
            <?php get_template_part('partials/loop', 'portfolio'); ?>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
<?php endif; ?>
</section>


