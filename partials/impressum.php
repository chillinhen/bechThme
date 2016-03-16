<section class="impressum">
    <div class="row">
<?php $contact = get_field('kontaktdaten');?>
<?php if ($contact) : ?>
    <div><?php echo $contact;?></div>
<?php endif; ?>

<?php $inhaber = get_field('inhaberdaten');?>
<?php if ($inhaber) :?>
    <div><?php echo $inhaber;?></div>
<?php endif; ?>

<?php $kammer = get_field('handwerkskammer');?>
<?php if ($kammer) : ?>
    <div><?php echo $kammer;?></div>
<?php endif; ?>

<?php $innung = get_field('innung');?>
<?php if ($innung) : ?>
    <div><?php echo $innung;?></div>
<?php endif; ?>
    </div>
    <div class="row">
        <?php $agb = get_field('agb');?>
<?php if ($agb) : ?>
    <div><?php echo $agb;?></div>
<?php endif; ?>
    </div>
</section>