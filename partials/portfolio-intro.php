<?php $headline = get_field('portfolio_headline', 'option');
$intro = get_field('portfolio_intro_text', 'option');
?>
<?php if ($headline || $intro) : ?>
    <section class="container intro">
        <div class="post_content">
            <?php if ($headline): ?>
                <h1><?php echo $headline; ?></h1>
            <?php endif; ?>
            <?php echo $intro; ?>
        </div>

    </section>
<?php endif; ?>