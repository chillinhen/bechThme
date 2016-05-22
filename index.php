<?php get_header(); 
$headline = get_field('portfolio_headline','option');
$intro = get_field('portfolio_intro_text','option');
?>
<?php if($headline || $intro ) : ?>
	<section class="container intro">
		<div class="post_content">
			<?php if($headline): ?>
			 	<h1><?php echo $headline; ?></h1>
			 <?php endif; ?>
			<?php echo $intro; ?>
		</div>
	
	</section>
<?php endif; ?>
    <!-- section -->
    <section class="container">
        <div id="portfolio">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/loop', 'portfolio'); ?>
                
            <?php endwhile; ?>
            
        <?php else: ?>
            <!-- article -->
            <?php get_template_part('partials/article', '404'); ?>
            <!-- /article -->

        <?php endif; ?>
        
        </div>
        <!-- pagination -->
        <div id="pagination">
        	<svg><use xlink:href="#portfolio-line"></use></svg>
        	<?php html5wp_pagination(); ?>
        </div>
        <!-- /pagination -->
        
    </section>
    
    <!-- /section -->


<?php get_footer(); ?>
