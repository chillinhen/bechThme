
        <?php if (is_page_template('page-home.php')) : ?>
    <div class="container keywords"><?php the_field('footer-keywords'); ?>
            <?php elseif (is_page_template('page-contact.php')) :
            get_template_part('partials/impressum');
            ?>
            <p class="copyright container">
                <?php get_template_part('partials/copyright','text');?>
            </p>
<?php else : ?>
            <p class="copyright container">
                 <?php get_template_part('partials/copyright','text');?>
            </p>
<?php endif; ?>
    </div>
