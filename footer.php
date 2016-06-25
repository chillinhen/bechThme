</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <?php if (is_page_template('page-home.php')) : ?>
        <div class="container keywords">
            <?php the_field('footer-keywords'); ?>
        </div>
        <?php get_template_part('partials/copyright', 'text'); ?>
        <?php
    elseif (is_page_template('page-contact.php')) :
        get_template_part('partials/impressum');
        ?>
        <p class="copyright container">
            <?php get_template_part('partials/copyright', 'text'); ?>
        </p>
    <?php else : ?>
        <p class="copyright container">
            <?php get_template_part('partials/copyright', 'text'); ?>
        </p>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
<!-- analytics -->
<?php
$analytics = get_field('analytics', 'option');
if ($analytics):
    ?>
    <script>
    <?php echo strip_tags($analytics); ?>
    </script>
<?php endif; ?>
<!-- analytics --> 
</body>