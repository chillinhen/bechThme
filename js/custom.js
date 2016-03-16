jQuery(document).ready(function ($) {
    //alert('hallo');
        //carousel tweaks
    //give active-class to first carousel item
    $('.carousel-inner').each(function () {
        $(this).children('.item:first-child').addClass('active');
    });
    
    //elastic iframes
    $('iframe').wrap('<div class="iframe-elastic"></div>');
    $('.page-template-page-contact iframe').attr('id', 'map');
    
       //enable pointer events by clicking on parent
       $('.iframe-elastic').click(function(){
           $('#map').css('pointer-events','all');
       });
        // you want to disable pointer events when the mouse leave the canvas area;
        $("#map").mouseleave(function () {
            $('#map').css('pointer-events','none'); // set the pointer events to none when mouse leaves the map area
        });

});