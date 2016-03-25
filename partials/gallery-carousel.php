<?php
$images = get_field('gallery');

if ($images):
    ?>
    <div id="carousel" class="carousel slide" data-interval="5000" data-ride="" data-pause="hover">
        <div class="carousel-inner" role="listbox">
            <?php foreach ($images as $image): ?>
                <div class="item">
                    <img src="<?php echo $image['sizes']['thumb-detail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <?php get_template_part('partials/carousel','controls');?>
    </div>
<?php endif; ?>