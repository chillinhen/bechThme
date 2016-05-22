<?php
/* Template Name: Portfolio */ get_header();
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    #'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
);
$portfolioQuery = new WP_Query($filter);
?>
<!-- section -->
	<?php if ($portfolioQuery->have_posts()): ?>
    <section class="container">
    	<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
                <?php the_title(); ?>
            <?php endwhile; ?>
            <?php get_template_part('pagination'); ?>
        <?php else: ?>
            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->      
    </section>
    <?php endif; ?>
    
    <!-- /section -->
<?php get_footer(); ?>