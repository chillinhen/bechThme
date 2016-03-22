</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <?php if (is_page_template('page-home.php')) : the_content(); ?>
        <?php
        elseif (is_page_template('page-contact.php')) :
            get_template_part('partials/impressum');?>
         <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>
       <?php  else :?>
         <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>
        <?php endif;?>
    </div>
</footer>