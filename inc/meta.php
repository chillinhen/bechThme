<?php 
//Variables
$description = get_field('meta_description', 'option');

$keywords = get_field('meta_keywords', 'option');
?>
<!-- Description -->
<?php
if ($description) : ?>
    <meta name="description" lang="de_DE" content="<?php echo strip_tags($description); ?>" />
<?php endif; ?>
<!-- Keywords -->
<?php if ($keywords) : ?>
    <meta name="keywords" lang="de_DE" content="<?php echo strip_tags($keywords); ?>" />
<?php endif; ?>