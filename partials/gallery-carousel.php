<?php
$images = get_field('gallery');?>
    <div class="<?php echo ($images) ? "flexslider" : "";?>">
       <?php if ($images):?>
        <ul class="slides">
            
            <li><?php endif; ?>
            <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array  ?>
            <?php endif; ?>
             <?php if ($images):?></li>
            <?php foreach ($images as $image): ?>
                <li class="item-img">
                    <img src="<?php echo $image['sizes']['large']; ?>"  srcset="<?php echo $image['sizes']['small']; ?> 320w, <?php echo $image['sizes']['medium']; ?> 600w, <?php echo $image['sizes']['large']; ?> 900w" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<!--<img src="small.jpg" srcset="small.jpg 320w, medium.jpg 600w, large.jpg 900w" alt="">-->