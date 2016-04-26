<?php
if (has_post_thumbnail()) : // Check if thumbnail exists 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumb-loop', true);
    $thumb_url = $thumb_url_array[0];
    $headline = get_field('headline');
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>> 
        <a style="background-image: url(<?php echo $thumb_url; ?>);" class="portfolio_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <!--[if IE]>
    <?php the_post_thumbnail('thumb-loop'); // Declare pixel size you need inside the array  ?>
    <![endif]-->

            <span><?php echo $headline; ?></span>
        </a>
        <section class="portfolio_content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <svg><use xlink:href="#portfolio-line"></use></svg>
    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php  ?>
        </section>

    </article>
<?php endif; ?>