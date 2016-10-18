<?php
$query = new WP_Query('pagename=kontakt');
if ($query->have_posts()) :
    ?>
    <section id="kontakt" class="contact">
        <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part('partials/headline'); ?>

                <?php the_content(); ?>

                <?php get_template_part('partials/contact', 'buttons'); ?>


                <?php edit_post_link(); ?>
            <?php endwhile; ?>
        </article>
    </section>
    <?php get_template_part('partials/contact', 'map');
    get_template_part('partials/impressum');
    ?>
    <?php
endif;
wp_reset_postdata();
?>
