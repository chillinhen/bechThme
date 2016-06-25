jQuery(document).ready(function ($) {
    function checkSize() {
        if ($(".nav li").css("float") == "none") {
            var logoHeight = $('.logo').height();
            var headerHeight = $('#header').height();
            $('body:not(.home) > main').css('margin-top', headerHeight + logoHeight);
            }
    }
    function portfolioSizes() {
        //portfolio tweaks
        var portfolioItem = $('.portfolio-item');
        var portfolioSize = portfolioItem.width();
        portfolioItem.css('height', portfolioSize);
    }

    //alert('hallo');
    //portfolio height
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    $(window).resize(portfolioSizes);
    //some tweaks for smaller windowa




    //use svg as instead of border-bottom or background-images
    $(".nav li:not(.close-menu)").append('<svg><use xlink:href="#dotted-line"></use></svg>');
    $(".nav li.close-menu").append('<svg><use xlink:href="#pfeil-xs"></use></svg></div>');


    if ($('body.single').hasClass('portfolio')) {
        $('li.portfolio').addClass('current-menu-item');
    }
    $('.flexslider').flexslider({
        animation: "slide"
    });

    //Navbar tweaks
    $('.navbar-toggle').click(function () {
        $('nav.nav').toggleClass('open').removeClass('closed');

    });
    $('li.close-menu').click(function () {
        $('nav.nav').toggleClass('closed').removeClass('open');
    });

    //elastic iframes
    $('iframe').wrap('<div class="iframe-elastic"></div>');
    $('.page-template-page-contact iframe').attr('id', 'map');

    //enable pointer events by clicking on parent
    $('.iframe-elastic').click(function () {
        $('#map').css('pointer-events', 'all');
    });
    // you want to disable pointer events when the mouse leave the canvas area;
    $("#map").mouseleave(function () {
        $('#map').css('pointer-events', 'none'); // set the pointer events to none when mouse leaves the map area
    });

    //edit post link
    $('.post-edit-link')
            .wrapInner('<span></span>');

    //responsive hover tweaks
    var tapped = false;
    var tapEvent = $('.portfolio_item');

    tapEvent.on("touchstart", function (e) {
        if (!tapped) { //if tap is not set, set up single tap
            tapped = setTimeout(function () {
                e.preventDefault();
                $(this).siblings('.portfolio_content').addClass('show');
                //insert things you want to do when single tapped
            }, 300);   //wait 300ms then run single click code
        } else {    //tapped within 300ms of last tap. double tap
            clearTimeout(tapped); //stop single tap callback
            window.location.href = $(this).attr('href');
            //insert things you want to do when double tapped
        }
        e.preventDefault()
    });
});

$(window).resize(function () {
    checkSize();
    portfolioSizes();
});
