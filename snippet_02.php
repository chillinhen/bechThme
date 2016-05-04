<?php
if (has_post_thumbnail()) : // Check if thumbnail exists 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumb-loop', true);
    $thumb_url = $thumb_url_array[0];
    $headline = get_field('headline');
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>> 
        <a class="portfolio_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" id="svgroot" viewBox="0 0 400 400" style="background-image:"background-image: url(<?php echo $thumb_url; ?>);">
                    <defs>
                        <filter id="filtersPicture">
                            <feComposite result="inputTo_38" in="SourceGraphic" in2="SourceGraphic" operator="arithmetic" k1="0" k2="1" k3="0" k4="0" />
                            <feColorMatrix id="filter_38" type="saturate" values="0" data-filterid="38" />
                        </filter>
                    </defs>
                    <image filter="url(&quot;#filtersPicture&quot;)" x="0" y="0" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $thumb_url; ?>" />
                </svg>

            <span><?php echo $headline; ?></span>
        </a>
        <section class="portfolio_content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <svg><use xlink:href="#portfolio-line"></use></svg>
    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php  ?>
        </section>

    </article>
<?php endif; ?>