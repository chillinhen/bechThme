<?php if (!(is_page_template('page-home.php'))) : ?>
<span class="copyright-text">
    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
</span>
<?php endif; ?>
<a class="link-impressum" href="<?php echo home_url(); ?>/kontakt#impressum"><?php _e("Impressum", "bechholdTheme"); ?></a>