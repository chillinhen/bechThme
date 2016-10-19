<?php $images = get_field('gallery'); ?>

<?php foreach ($images as $image): ?>
    <img class="test" src="<?php echo $image['sizes']['thumb-subpages-large']; ?>"  srcset="<?php echo $image['sizes']['thumb-subpages-small']; ?> 320w, <?php echo $image['sizes']['thumb-subpages-medium']; ?> 600w, <?php echo $image['sizes']['thumb-subpages-large']; ?> 900w" alt="<?php echo $image['alt']; ?>" />
    <hr/>
<?php endforeach; ?>



<!--<img src="small.jpg" srcset="small.jpg 320w, medium.jpg 600w, large.jpg 900w" alt="">-->
