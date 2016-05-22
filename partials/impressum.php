<section class="impressum">
    <div class="container columns">
        <h4><?php _e('Impressum', 'bechTheme'); ?></h4>
        <?php $contact = get_field('kontaktdaten'); ?>
        <?php if ($contact) : ?>
            <div><?php echo $contact; ?></div>
        <?php endif; ?>

        <?php $inhaber = get_field('inhaberdaten'); ?>
        <?php if ($inhaber) : ?>
            <div><?php echo $inhaber; ?></div>
        <?php endif; ?>

        <?php $kammer = get_field('handwerkskammer'); ?>
        <?php if ($kammer) : ?>
            <div><?php echo $kammer; ?></div>
        <?php endif; ?>

        <?php $innung = get_field('innung'); ?>
        <?php if ($innung) : ?>
            <div><?php echo $innung; ?></div>
        <?php endif; ?>
    </div>
    <div class="container columns">
    <?php
    
    // check if the repeater field has rows of data
    if( have_rows('editors') ):
    
     	// loop through the rows of data
        while ( have_rows('editors') ) : the_row();?>
    
            <div><?php // display a sub field value
            the_sub_field('content');?></div>
    
        <?php endwhile;
    
  endif;
    
    ?>
    </div>
    <div class="container">
        <?php $agb = get_field('agb'); ?>
        <?php if ($agb) : ?>
            <div>
                <h4><?php _e('AGB', 'bechTheme'); ?></h4>
                <?php echo $agb; ?>
            </div>
        <?php endif; ?>
    </div>
</section>