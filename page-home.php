<?php /* Template Name: Home */ get_header(); ?>
<?php if (get_theme_mod('bechhold_BG')) : ?>
    <section id="home" class="row" style="background-image: url(<?php echo esc_url(get_theme_mod('bechhold_BG')); ?>)">
    <?php else : ?>
        <section id="home" class="row">
        <?php endif; ?>
        <?php if (have_posts()): ?>
            <div class="container">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('text-center container'); ?>>
                        <?php the_content();?>
                    </article>
                <?php endwhile; ?>
            </div>
            <div class="footer-home container keywords">
                <?php the_field('footer-keywords'); ?>
            </div>
        </section>

    <?php else: ?>
        <section id="home" class="row"></section>
        <div class="container">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
    </section>
<?php endif; ?>

<!-- Portfolio -->
<?php get_template_part('partials/section-onepager', 'portfolio'); ?>
<!-- end Portfolio -->
<!-- Leistungen -->
<?php get_template_part('partials/section-onepager', 'leistungen'); ?>
<!-- end Leistungen -->
<!-- Team -->
<?php get_template_part('partials/section-onepager', 'team'); ?>
<!-- end Team -->
<!-- Kontakt -->
<?php get_template_part('partials/section-onepager', 'kontakt'); ?>
<!-- end Kontakt -->
<?php get_footer(); ?>
