jQuery(document).ready(function ($) {
    //alert('hallo');
        //carousel tweaks
    //give active-class to first carousel item
    $('.carousel-inner').each(function () {
        $(this).children('.item:first-child').addClass('active');
    });
});