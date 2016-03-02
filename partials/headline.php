<?php
$headline = get_field('headline');
if ($headline) :
    ?>
    <h1><?php echo $headline; ?></h1>
<?php endif; ?>