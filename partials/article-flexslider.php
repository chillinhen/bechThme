<?php
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

<article id="post-<?php the_ID(); ?>" <?php post_class('item row'); ?>>
        <aside class="">
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
            <?php #the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
            <img src="<?php echo $thumb_url_large; ?>" alt="&copy; <?php echo date('Y');?> Tischlerei Bechhold" srcset="<?php echo $thumb_url_small; ?> 320w, <?php echo $thumb_url_medium; ?> 600w, <?php echo $thumb_url_large; ?> 900w"/>
        <?php endif; ?>
    </aside>
    <section class="post_content flexcaption">
        <hgroup class="">
            <?php get_template_part('partials/headline'); ?>            
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
        </hgroup>
    </section>
    
</article>