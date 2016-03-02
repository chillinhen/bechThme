<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--    <h1><?php #the_title(); ?></h1>-->
    <?php get_template_part('partials/headline');?>
    <?php the_content(); ?>


    <br class="clear">

    <?php edit_post_link(); ?>

</article>