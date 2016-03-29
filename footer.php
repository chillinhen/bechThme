</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
        <?php if (is_page_template('page-home.php')) : ?>
    <div class="container"><?php the_content(); ?></div>
            <?php
        elseif (is_page_template('page-contact.php')) :
            get_template_part('partials/impressum');
            ?>
            <p class="copyright container">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </p>
<?php else : ?>
            <p class="copyright container">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </p>
<?php endif; ?>
    </div>
<?php wp_footer(); ?>
</body>