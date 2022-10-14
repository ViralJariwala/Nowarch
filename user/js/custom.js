/* ----------------------------------------------------------------

[ Custom settings ]

01. Preloader
02. ScrollIt
03. Navbar scrolling background
04. Sections background image from data background
05. Animations
06. YouTubePopUp
07. Project owlCarousel
08. Project Page owlCarousel
09. Testimonials owlCarousel
10. Services owlCarousel
11. Team owlCarousel
12. Blog owlCarousel
13. Scroll back to top
14. Slider
15. Contact Form

------------------------------------------------------------------- */

$(function () {
	"use strict";
	
	// Preloader
	$("#preloader").fadeOut(900);
	$(".preloader-bg").delay(800).fadeOut(900);
	var wind = $(window);
	
	// ScrollIt
	$.scrollIt({
		upKey: 38, // key code to navigate to the next section
		downKey: 40, // key code to navigate to the previous section
		easing: 'swing', // the easing function for animation
		scrollTime: 600, // how long (in ms) the animation takes
		activeClass: 'active', // class given to the active nav element
		onPageChange: null, // function(pageIndex) that is called when page is changed
		topOffset: -70 // offste (in px) for fixed top navigation
	});
	
	// Navbar scrolling background
	wind.on("scroll", function () {
		var bodyScroll = wind.scrollTop()
			, navbar = $(".navbar")
			, logo = $(".navbar .logo> img");
		if (bodyScroll > 100) {
			navbar.addClass("nav-scroll");
			logo.attr('src', 'img/logo.png');
		}
		else {
			navbar.removeClass("nav-scroll");
			logo.attr('src', 'img/logo.png');
		}
	});
    
	// Close navbar-collapse when a  clicked
	$(".navbar-nav .dropdown-item a").on('click', function () {
		$(".navbar-collapse").removeClass("show");
	});
	
	// Sections background image from data background
	var pageSection = $(".bg-img, section");
	pageSection.each(function (indx) {
		if ($(this).attr("data-background")) {
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});
	
	// Animations
	var contentWayPoint = function () {
		var i = 0;
		$('.animate-box').waypoint(function (direction) {
			if (direction === 'down' && !$(this.element).hasClass('animated')) {
				i++;
				$(this.element).addClass('item-animate');
				setTimeout(function () {
					$('body .animate-box.item-animate').each(function (k) {
						var el = $(this);
						setTimeout(function () {
							var effect = el.data('animate-effect');
							if (effect === 'fadeIn') {
								el.addClass('fadeIn animated');
							}
							else if (effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated');
							}
							else if (effect === 'fadeInRight') {
								el.addClass('fadeInRight animated');
							}
							else {
								el.addClass('fadeInUp animated');
							}
							el.removeClass('item-animate');
						}, k * 200, 'easeInOutExpo');
					});
				}, 100);
			}
		}, {
			offset: '85%'
		});
	};
	$(function () {
		contentWayPoint();
	});
	
	//  YouTubePopUp
	$("a.vid").YouTubePopUp();
    
     // Project owlCarousel
    if ($(".projects-carousel").length) {
        $(".projects-carousel").owlCarousel({
          loop: true,
          margin: 30,
          nav: false,
          smartSpeed: 500,
          autoHeight: false,
          autoplay: false,
          dots: true,
          autoplayTimeout: 10000,
          navText: [
            '<span class="ti-arrow-left"></span>',
            '<span class="ti-arrow-right"></span>',
          ],
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            800: {
              items: 2,
            },
            1024: {
              items: 2,
            },
            1200: {
              items: 2,
            },
          },
        });
    }
    
    // Project Page owlCarousel
    $('.project-page .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: false
        , nav: true
        , navText: ['<i class="ti-arrow-left" aria-hidden="true"></i>', '<i class="ti-arrow-right" aria-hidden="true"></i>']
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 1
            }
            , 1000: {
                items: 1
            }
        }
    });
    
    // Testimonials owlCarousel
    $('.testimonials .owl-carousel').owlCarousel({
        loop:true,
        margin: 30,
        mouseDrag:true,
        autoplay:false,
        dots: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    // Services owlCarousel
    $('.services .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: false
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
                , dots: true
            , }
            , 600: {
                items: 2,
                dots: true
            }
            , 1000: {
                items: 3
            }
        }
    });

    // Team owlCarousel
    $('.team .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: false
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
                , dots: true
            , }
            , 600: {
                items: 2,
                dots: true
            }
            , 1000: {
                items: 3
            }
        }
    });
    
    // Blog owlCarousel
    $('.blog .owl-carousel').owlCarousel({
        loop: true
        , margin: 30
        , mouseDrag: true
        , autoplay: false
        , dots: true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 2
            }
        }
    });

	//  Scroll back to top
	var progressPath = document.querySelector('.progress-wrap path');
	var pathLength = progressPath.getTotalLength();
	progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
	progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
	progressPath.style.strokeDashoffset = pathLength;
	progressPath.getBoundingClientRect();
	progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
	var updateProgress = function () {
		var scroll = $(window).scrollTop();
		var height = $(document).height() - $(window).height();
		var progress = pathLength - (scroll * pathLength / height);
		progressPath.style.strokeDashoffset = progress;
	}
	updateProgress();
	$(window).scroll(updateProgress);
	var offset = 150;
	var duration = 550;
	jQuery(window).on('scroll', function () {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.progress-wrap').addClass('active-progress');
		}
		else {
			jQuery('.progress-wrap').removeClass('active-progress');
		}
	});
	jQuery('.progress-wrap').on('click', function (event) {
			event.preventDefault();
			jQuery('html, body').animate({
				scrollTop: 0
			}, duration);
			return false;
		})
	
	// Slider 
	$(document).ready(function () {
		var owl = $('.header .owl-carousel');
		// Slider owlCarousel
		$('.slider .owl-carousel').owlCarousel({
			items: 1
			, loop: true
			, dots: false
			, margin: 0
			, autoplay: true
			, autoplayTimeout: 6000
			, smartSpeed: 500
			, nav: true
			, navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
		});
		// Slider Fade owlCarousel
		$('.slider-fade .owl-carousel').owlCarousel({
			items: 1
			, loop: true
			, dots: false
			, margin: 0
			, autoplay: true
			, autoplayTimeout: 6000
			, smartSpeed: 500
			, animateOut: 'fadeOut'
			, nav: true
			, navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
		});
		owl.on('changed.owl.carousel', function (event) {
			var item = event.item.index - 2; // Position of the current item
			$('h6').removeClass('animated fadeInUp');
			$('h1').removeClass('animated fadeInUp');
			$('p').removeClass('animated fadeInUp');
			$('.butn-dark').removeClass('animated fadeInUp');
			$('.owl-item').not('.cloned').eq(item).find('h6').addClass('animated fadeInUp');
			$('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
			$('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
			$('.owl-item').not('.cloned').eq(item).find('.butn-dark').addClass('animated fadeInUp');
		});
	});
    
});


// Contact Form
    var form = $('.contact__form'),
        message = $('.contact__msg'),
        form_data;
    // success function
    function done_func(response) {
        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
        message.text(response);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }
    // fail function
    function fail_func(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
    });
    
