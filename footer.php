</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
        <?php if (is_page_template('page-home.php')) : ?>
    <div class="container keywords"><?php the_field('footer-keywords'); ?></div>
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
</footer>
<?php wp_footer(); ?>
</body>