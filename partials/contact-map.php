<section class="contact-map">
    <?php
    // ToDO Repeater ???
    $contactHeadline = get_field('anfahrt_headline');
    $contactAddress = get_field('adresse');
    $contactMap = get_field('map');
    ?>  
    <div class="container">
        <?php if ($contactHeadline): ?>
            <h2><?php echo $contactHeadline; ?></h2>
        <?php endif; ?>
        <?php if ($contactAddress): ?>
            <?php echo $contactAddress; ?>
        <?php endif; ?>
    </div>
    <?php if ($contactMap): ?>
        <?php echo strip_tags($contactMap, '<iframe>'); ?>
    <?php endif; ?>
</section>