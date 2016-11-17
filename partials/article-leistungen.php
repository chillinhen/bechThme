<?php 
global $more;
$more = 0;

$icon = get_field('icon');
$url = $icon['url'];
$title = $icon['title'];
$alt = $icon['alt'];
$caption = $icon['caption'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post_content">
        <?php #get_template_part('partials/headline');?>
        <?php if ($icon) : // Check if thumbnail exists ?>
            <div class="thumbnail">
                <img src="<?php echo $url;?>" alt="<?php echo $title;echo ($caption) ? ' - '.$caption : '';?>" title="<?php echo $title;?>" />
            </div>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>

        <?php the_content(__("... mehr Infos", "bechholdTheme")); ?>
        <?php edit_post_link(); ?>
        
    </div>
</article>