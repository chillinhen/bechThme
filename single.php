<?php get_header(); ?>
<!-- section -->
<section class="container intro">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('item'); ?>>
    <section class="post_content">
        <?php get_template_part('partials/headline'); ?>
        <?php the_content(); ?>
     </section>
     <aside>
         <?php #get_template_part('snippet_02');?>
        <?php get_template_part('partials/gallery', 'carousel'); ?>
     </aside>
</article>
    <?php endwhile; ?>
     <?php else : ?>
        <article>
            <?php get_template_part('partials/article', '404'); ?>
        </article>
    <?php endif; ?>
</section>

<?php get_footer(); ?>