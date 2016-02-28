<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio'); ?>>
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a class="portfolio_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <aside>
                <?php the_post_thumbnail('thumb-loop'); // Declare pixel size you need inside the array ?>
    </aside>
    <section class="portfolio_content">
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
    </section>
    </a>
<?php endif; ?>
</article>