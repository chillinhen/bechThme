<article id="post-<?php the_ID(); ?>" <?php post_class('item row'); ?>>
        <aside class="">
        
    </aside>
    <section class="post_content flexcaption">
        <hgroup class="">
            <?php get_template_part('partials/headline'); ?>            
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
        </hgroup>
    </section>
    
</article>