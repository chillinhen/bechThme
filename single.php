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
<?php 

$posts = get_field('related_posts');

if( $posts ): ?>
    <section class="bottom-fold related container">
	    <div id="portfolio">
	    
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        	<?php get_template_part('partials/loop', 'portfolio'); ?>
	    <?php endforeach; ?>
	    </div>
    </section>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
<?php get_footer(); ?>