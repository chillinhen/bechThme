 <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>> 
        <a class="portfolio_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('thumb-loop'); // Declare pixel size you need inside the array ?>
    <section class="portfolio_content">
        <h2><?php the_title(); ?></h2>
        <svg><use xlink:href="#portfolio-line"></use></svg>
        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
    </section>
    </a>
</article>
<?php endif; ?>