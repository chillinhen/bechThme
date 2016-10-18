<?php
global $post;
$post_slug = $post->post_name;
?>


<?php if ($post_slug == 'portfolio') : ?>




<?php else :
    ?>
    <section id="<?php echo $post_slug; ?>" class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('partials/headline'); ?>
            <?php the_content(); ?>
            <br class="clear">

            <?php edit_post_link(); ?>
        </article>
    </section>
<?php endif; ?>



