jQuery(document).ready(function ($) {
    //alert('hallo');
    //portfolio height
    var portfolioItem = $('.portfolio-item');
    var portfolioSize = portfolioItem.width();
    portfolioItem.css('height',portfolioSize);

$('.flexslider').flexslider({
    animation: "slide"
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
    
    //edit post link
    $('.post-edit-link')
            .wrapInner('<span></span>');
});