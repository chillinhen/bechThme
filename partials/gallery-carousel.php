<?php
$images = get_field('gallery');?>
    <div class="<?php echo ($images) ? "flexslider" : "";?>">
       <?php if ($images):?>
        <ul class="slides">
            
            <li><?php endif; ?>
            <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                <?php the_post_thumbnail('thumb-detail'); // Declare pixel size you need inside the array  ?>
            <?php endif; ?>
             <?php if ($images):?></li>
            <?php foreach ($images as $image): ?>
                <li class="item-img">
                    <img src="<?php echo $image['sizes']['thumb-detail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>