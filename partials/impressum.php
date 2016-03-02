<?php

$contact = get_field('kontaktdaten','option');
if ($contact) :
    echo $contact;
endif;

$inhaber = get_field('inhaberdaten','option');
if ($inhaber) :
    echo $inhaber;
endif;

$kammer = get_field('handwerkskammer','option');
if ($kammer) :
    echo $kammer;
endif;

$innung = get_field('innung','option');
if ($innung) :
    echo $innung;
endif;

//$agb = get_field('agb','option');
//if ($agb) :
//    setup_postdata($post);
//    the_title();
//endif;
//wp_reset_postdata();
?>