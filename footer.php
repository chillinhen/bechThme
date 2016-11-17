</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <?php #if(!(is_front_page())) :?>
    <p class="copyright container">
        <?php get_template_part('partials/copyright', 'text'); ?>
    </p>
    <?php #endif;?>
</footer>
<div class="scroll-to-top"> </div>
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