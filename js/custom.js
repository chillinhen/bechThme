
jQuery(document).ready(function ($) {
    //scroll top top
    jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});

    function responsiveHeader() {
        var logoHeight = $('.logo').height();
        var headerHeight = $('#header').height();
        $('body:not(.home) > main').css('margin-top', headerHeight + logoHeight + 10);
    }
    function checkSize() {
        if ($(".nav li").css("float") == "none") {
            responsiveHeader();
            }
    }
    function portfolioSizes() {
        //portfolio tweaks
        var portfolioItem = $('.portfolio-item');
        var portfolioSize = portfolioItem.width();
        portfolioItem.css('height', portfolioSize);
    }
    if (window.innerHeight > window.innerWidth) {
        //alert("Please use Landscape!");
        //test();
        //responsiveHeader(); //ToDO
    }
    //test();


    //alert('hallo');
    //portfolio height
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);

    $(window).resize(portfolioSizes);
    //some tweaks for smaller windowa

    var navigation = $('body.home > #header');
    //var stickyNavTop = navigation.offset().top;

    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > 500) {
            navigation.addClass('sticky');
        } else {
            navigation.removeClass('sticky');
        }
    };

    stickyNav();
    $(window).scroll(stickyNav);


    //use svg as instead of border-bottom or background-images
    $(".nav li:not(.close-menu)").append('<svg><use xlink:href="#dotted-line"></use></svg>');
    $(".nav li.close-menu").append('<svg><use xlink:href="#pfeil-xs"></use></svg></div>');
    
    // hide portfolio-content which is larger than 500px
    $contentHeight = $('.post_content > div').height();
    //alert($contentHeight);
    if ($contentHeight >= 480){
        $('.post_content > div').addClass('hide');
        $('.post_content').append('<div class="btn"> </div>');
        $('.btn').click(function(){
            $(this).siblings('.post_content > div').toggleClass('hide');
        });
    };

    if ($('body.single').hasClass('portfolio')) {
        $('li.portfolio').addClass('current-menu-item');
    }

    $('body.single .flexslider').flexslider({
        animation: "slide",
        animationSpeed: 800,
        animationLoop:	true,
        slideshowSpeed:	7000
    });
    
    $('body.page .flexslider').flexslider({
        animation: "slide",
        animationSpeed: Modernizr.touch ? 800 : 2400,
        animationLoop:	true,
        pauseOnHover: true,
        slideshowSpeed:	7000
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
    $('.page-template-page-home-php iframe, .page-template-page-contact iframe').attr('id', 'map');

    //enable pointer events by clicking on parent
    $('.iframe-elastic').bind('touchstart click', function(){
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
