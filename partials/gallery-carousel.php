<?php
$images = get_field('gallery');?>
    <div class="<?php echo ($images) ? "flexslider" : "";?>">
       <?php if ($images):?>
        <ul class="slides">
            
            <li class="item-img"><?php endif; ?>
            <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                <div>
                <?php the_post_thumbnail('thumb-subpages-large'); // Declare pixel size you need inside the array  ?></div>
            <?php endif; ?>
             <?php if ($images):?></li>
            <?php foreach ($images as $image): ?>
                <li class="item-img">
                    <div>
                       <img class="test" src="<?php echo $image['sizes']['thumb-subpages-large']; ?>"  srcset="<?php echo $image['sizes']['thumb-subpages-small']; ?> 320w, <?php echo $image['sizes']['thumb-subpages-medium']; ?> 600w, <?php echo $image['sizes']['thumb-subpages-large']; ?> 900w" alt="<?php echo $image['alt']; ?>" />
                       </div>
<!--                    <p><?php #echo $image['caption']; ?></p>-->
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<!--<img src="small.jpg" srcset="small.jpg 320w, medium.jpg 600w, large.jpg 900w" alt="">-->