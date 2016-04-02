<article id="post-<?php the_ID(); ?>" <?php post_class('item row'); ?>>
        <aside class="">
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
            <?php the_post_thumbnail('thumb-detail'); // Declare pixel size you need inside the array ?>
        <?php endif; ?>
    </aside>
    <section class="post_content flexcaption">
        <hgroup class="">
        <?php get_template_part('partials/headline');?>
        <?php the_content(); ?>
            <span class="rightalign"><?php edit_post_link(); ?></span>
        </hgroup>
    </section>

</article>