<article id="post-<?php the_ID(); ?>" <?php post_class('item row'); ?>>
    <section class="post_content col-md-6">
        <hgroup class="">
        <h2><?php the_title(); ?></h2>
        <h2 class="subtitle">the Subtitle</h2>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        </hgroup>
    </section>
    <aside class="col-md-6">
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
            <?php the_post_thumbnail('thumb-detail'); // Declare pixel size you need inside the array ?>
        <?php endif; ?>
    </aside>
</article>