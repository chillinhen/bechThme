
<!-- footer --></main>
<footer class="footer" role="contentinfo">
    <div class="container">
        <?php 
        if (is_page_template('page-home.php')) :
            if (have_posts()): while (have_posts()) : the_post();?>
            <div class="container"><?php the_content(); ?></div>
            <?php endwhile;
        endif;?>
      
        <?php if (is_page_template('page-contact.php')) :
            get_template_part('partials/impressum');?>
                    <!-- copyright -->
        <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>
        <?php else :?>

        <!-- copyright -->
        <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>
        <?php endif;?>
        <!-- /copyright -->
    </div>
</footer>
<!-- /footer -->

<!-- /wrapper -->

<?php wp_footer(); ?>

</body>
</html>