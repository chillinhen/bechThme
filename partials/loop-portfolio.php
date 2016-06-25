<?php
if (has_post_thumbnail()) : // Check if thumbnail exists 
    $thumbnail = get_post( get_post_thumbnail_id() );
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array_small = wp_get_attachment_image_src($thumb_id, 'small', true);
    $thumb_url_small = $thumb_url_array_small[0];
    $thumb_url_array_medium = wp_get_attachment_image_src($thumb_id, 'medium', true);
    $thumb_url_medium = $thumb_url_array_medium[0];
    $thumb_url_array_large = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url_large = $thumb_url_array_large[0];
    $headline = get_field('headline');
    $thumb_img = get_post_meta( get_post_thumbnail_id() ); 
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>> 
        <a class="portfolio-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php #the_post_thumbnail('medium',array('class' => 'grayscale')); ?>
            <img src="<?php echo $thumb_url_medium; ?>" alt="<?php echo $thumb_img['_wp_attachment_image_alt']['0'];?> - &copy; <?php echo date('Y');?> Tischlerei Bechhold" class="grayscale"/>
        </a>
        <section class="portfolio_content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <svg><use xlink:href="#portfolio-line"></use></svg>
            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
        </section>

    </article>
<?php endif; ?>
