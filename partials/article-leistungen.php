
<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6'); ?>>
    <?php get_template_part('partials/headline');?>
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <h3><?php the_title(); ?></h3>

    <?php html5wp_excerpt('html5wp_index'); ?>

    <br class="clear">

     <span class="rightalign"><?php edit_post_link(); ?></span>

</article>