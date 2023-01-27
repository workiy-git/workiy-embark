var $ = jQuery;
var workiyPage = workiyPage || {};
workiyPage = {
    workiyScript: function (context) {
      

      //header menu
      $('.humburger-menu', context).once('workiy_theme').on('click', function ()
      {
        $(this).parents('header').addClass('active').removeClass('close-nav');
        $('.menu-close').addClass('active');
        $('body').addClass('menu-open');
      });
      if ($(window).width() < 1024) {
        $('.menu-close', context).once('workiy_theme').on('click',function ()
        {
          $(this).removeClass('active');
          $('.humburger-menu').parents('header').addClass('close-nav').removeClass("active");
          $('body').removeClass('menu-open');
        });
      }
      if ($(window).width() > 1023) {
        $('.menu-close', context).once('workiy_theme').on('click',function ()
        {
          $(this).removeClass('active');
          $('.humburger-menu').parents('header').addClass('close-nav');
          setTimeout(function() {
              $('.humburger-menu').parents('header').removeClass("active");
              $('body').removeClass('menu-open');
          }, 800);
          
        });
      }





      $('.search-icon', context).once('workiy_theme').on('click', function ()
      {
        $(this).parents('header').addClass('active').removeClass('close-nav');

        $('.search-close').addClass('active');
        $('body').addClass('search-open');
      });
      if ($(window).width() < 1024) {
        $('.search-close', context).once('workiy_theme').on('click',function ()
        {
          $(this).removeClass('active');
          $('.search-icon').parents('header').addClass('close-nav').removeClass("active");
          $('body').removeClass('search-open');
        });
      }
      if ($(window).width() > 1023) {
        $('.search-close', context).once('workiy_theme').on('click',function ()
        {
          $(this).removeClass('active');
          $('.search-icon').parents('header').addClass('close-nav');
          setTimeout(function() {
              $('.search-icon').parents('header').removeClass("active");
              $('body').removeClass('search-open');
          }, 800);
          
        });
      }

      

      //insight listing
      $('.view-insights-listing').each(function(){
        var getTextViewAll = $(this).find('.insight-inner-wrapper:first-child').find('.viewallname').text();
      
          $(this).find('.view-header').find('.view-all-name').append(getTextViewAll);
        
        $(this).find('.view-header').find('.cta-link a').attr("href", "/insights/"+getTextViewAll+"");
      });


     

      //header fixed
      if($('.about-banner-overlay, .details-page-banner').length)
      {
        $('header, #main').addClass('fixed');
      }

      //video lisiting class add
      $('.block-embed-view-block').each(function(){
        var getHeadingText = $(this).children('h2').text();
        if(getHeadingText == 'Videos')
        {
          $(this).addClass('video-block');
        }
      });




      //single video banner
      $('.video-img .video-icon', context).once('workiy_theme').on('click',function () {
        $(this).hide();
        $(this).siblings('.video-item').addClass('show');
        $(this).parents('.insight-video').addClass('video-show');
      });

      

      //search side bar click event
      $('.layout--twocol-section--25-75 > .layout__region--first .block-facets-block .facet-block__title', context).once('workiy_theme').on('click',function () {
        $(this).toggleClass('close-ul');
        $(this).siblings('.facet-block__content').slideToggle();
      });

      //header menu arrow span add
      $('#block-workiy > ul.menu > .menu-item--expanded > a').after('<span class="arrow"></span>');
      $('#block-workiy > ul.menu ul.menu > .menu-item--expanded > a').after('<span class="submenu-arrow"></span>');
      $('#block-workiy .menu-item--expanded > .arrow, #block-workiy .menu-item--expanded > .submenu-arrow', context).once('workiy_theme').on('click', function () {
        $(this).toggleClass('open');
        $(this).siblings('ul.menu').slideToggle();
      });

      

      //desktop menu left side links
      if(!$('#block-workiy .left-menus').length)
      {
        $('#block-workiy').prepend('<div class="left-menus"></div>');
      }
      
      if(!$('#block-workiy .left-menus > a').length)
      {
        $('#block-workiy > ul.menu > li > a').each(function () {
          var getLink = $(this).clone();
          $('.left-menus').append(getLink);
        });
      }
      if(!$('#block-workiy .left-menus .site-logo').length)
      {
        var getLogo = $('.main-logo .site-logo').clone();
          $('.left-menus').prepend(getLogo);
      }

      //header social media
      if ($(window).width() > 991) {
        if(!$('header .footer-social-media').length)
        {
          $('.footer-social-media').clone().appendTo('header .header-right .left-menus');
        }
      }



      //Sticky white background add
      $(window).scroll(function() {    
          var scrollBody = $(window).scrollTop();    
          if (scrollBody > 50) {
            $("header").addClass("whitebg");
          }
          else
          {
            $("header").removeClass("whitebg");
          }
      });



      //service-tab-content

      $ = jQuery;
      if ($(window).width() < 992) {
        if(!$('form[action="/services"] .bef-links ul .service-tab-content').length)
        {
            $('.layout__region--second .our-services.service-tab-content').appendTo('form[action="/services"] .bef-links ul li');
        }
      }

      // $('form[action="/services"] .bef-links ul li a', context).once('workiy_theme').on('click', function () {
      //   $('this').parent('li').addClass('selected');
      // });
      if($('form[action="/services"] .bef-links ul li a').hasClass('bef-link--selected'))
      {
        $('form[action="/services"] .bef-links ul li a.bef-link--selected').parent('li').addClass('selected');
      }
      // $('form[action="/services"] .bef-links ul li a').each(function(){
      //   if($('form[action="/services"] .bef-links ul li a').hasClass('bef-link--selected'))
      //   {
      //     $('form[action="/services"] .bef-links ul li a.bef-link--selected').parent('li').addClass('selected');
          
      //   }
      // });


      //details page color
      var getColor = $('.details-page-banner').attr("data-color");
      $('.details-page-banner').css("background-color", getColor);

      //our work
      if ($(window).width() > 991) {
        if($('#our-work').length)
        {
          $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            $('.work-scrolling').toggleClass('first',
              scroll >= $('.work-right .one').offset().top - 600
            );
            $('.work-scrolling').toggleClass('second',
              scroll >= $('.work-right .two').offset().top - 600
            );
            $('.work-scrolling').toggleClass('third',
              scroll >= $('.work-right .three').offset().top - 600
            );
$('.work-scrolling').toggleClass('fourth',
              scroll >= $('.work-right .four').offset().top - 600
            );
			$('.work-scrolling').toggleClass('fifth',
              scroll >= $('.work-right .five').offset().top - 600
            );
          });
          $(window).scroll();
        }
      }
    }
};

(function ($) {
    Drupal.behaviors.workiy_theme = {
        attach: function (context) {
           workiyPage.workiyScript(context);
        }
    }
})(jQuery);

$(document).ready(function () {
  //banner
      $("#home-slider .slider-wrapper").slick(
      {
        dots: true,
        infinite: true,
        speed: 1500,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

      if ($(window).width() > 1023) {
      //platform
        // $('.platform-thumb-logo').slick({
        //     slidesToShow: 7,
        //     slidesToScroll: 1,
        //     arrows: false,
        //     lazyLoad: 'ondemand',
        //     asNavFor: '.slider-for',
        //     dots: false,
        //     centerMode: true,
        //     centerPadding: '0px',
        //     focusOnSelect: true
        // });
        // $('.platform-content-slider').slick({
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   arrows: false,
        // });
        // $('.platform-logo-slider').slick({
        //   fade: true,
        //   cssEase: 'linear',
        //   arrows: false
        // });
      }
      //blog

      $(".insight-wrapper").slick(
      {
        dots: false,
        infinite: true,
        speed: 1500,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false
          }
        }
      ]
      });

      //teams
      $(".team-profile-wrapper").slick(
      {
        dots: false,
        infinite: true,
        speed: 1500,
        autoplay: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        centerPadding: '150px',
        responsive: [
          {
            breakpoint: 1366,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              centerPadding: '50px',
              dots: false,
              arrows: false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerPadding: '50px',
              dots: false,
              arrows: false
            }
          }
        ]
      });


$(".team-profile-wrapper-about").slick(
      {
        dots: false,
        infinite: true,
        speed: 1500,
        autoplay: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        centerMode: false,
        centerPadding: '130px',
        responsive: [
          {
            breakpoint: 1366,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              centerPadding: '50px',
              dots: false,
              arrows: false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerPadding: '50px',
              dots: false,
              arrows: false
            }
          }
        ]
      });


      //testimonial
      $('.testimonial-dots.slider-nav').slick({
          slidesToShow: 3,
          slidesToShow: 1,
          asNavFor: '.slider-for',
          dots: false,
          arrows: false,
          focusOnSelect: true,
          variableWidth: false,
          infinite: true,
          speed: 1500,
          autoplay: true
      });
      $('.middle-content-wrapper.slider-for, .bottom-content-wrapper.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      });
      $('.testimonial-img-wrapper.slider-for').slick({
        fade: true,
        cssEase: 'linear',
        arrows: false,
        dots: true
      });


      //services
      if ($(window).width() < 1024) {
        /*hide by vidya$(".service-item-wrapper").slick(
        {
          dots: false,
          infinite: true,
          speed: 1500,
          autoplay: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          centerMode: true,
          centerPadding: '30px',
          responsive: [
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false,
              arrows: false
            }
          }
        ]
        });*/

        //home our work
        $('.work-item-wrapper').on('init', function(slick) {
            $('.work-item-wrapper').fadeIn(100);
        })
        .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            lazyLoad: 'ondemand',
            autoplaySpeed: 3000,
            asNavFor: '.platform-logo-wrapper'
        });

        $('.platform-logo-wrapper').on('init', function(slick) {
            $('.platform-logo-wrapper').fadeIn(100);
        })
        .slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            asNavFor: '.work-item-wrapper',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });

         //remove active class from all thumbnail slides
         $('.platform-logo-wrapper .slick-slide').removeClass('slick-active');

         //set active class to first thumbnail slides
         $('.platform-logo-wrapper .slick-slide').eq(0).addClass('slick-active');

         // On before slide change match active thumbnail to current slide
         $('.work-item-wrapper').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
          var workSlide = nextSlide;
          $('.platform-logo-wrapper .slick-slide').removeClass('slick-active');
          $('.platform-logo-wrapper .slick-slide').eq(workSlide).addClass('slick-active');
        });




        //platform
        $('.platform-content-wrapper').on('init', function(slick) {
            $('.platform-content-wrapper').fadeIn(1000);
        })
        .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            lazyLoad: 'ondemand',
            autoplaySpeed: 3000,
            //asNavFor: '.platform-thumb-logo'
        });

        $('.platform-thumb-logo').on('init', function(slick) {
            $('.platform-thumb-logo').fadeIn(1000);
        })
        .slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: false,
            lazyLoad: 'ondemand',
            asNavFor: '.platform-content-wrapper',
            dots: false,
            centerMode: true,
            centerPadding: '0px',
            focusOnSelect: true
        });

         //remove active class from all thumbnail slides
         $('.platform-thumb-logo .slick-slide').removeClass('slick-active');

         //set active class to first thumbnail slides
         $('.platform-thumb-logo .slick-slide').eq(0).addClass('slick-active');

         //On before slide change match active thumbnail to current slide
         $('.platform-content-wrapper').on('beforeChange', function (event, slick, currentSlide, pNextSlide) {
          var platformSlide = pNextSlide;
          $('.platform-thumb-logo .slick-slide').removeClass('slick-active');
          $('.platform-thumb-logo .slick-slide').eq(platformSlide).addClass('slick-active');
        });
      }

      if ($(window).width() > 1023) {
        $('.platform-content-slider').on('init', function(slick) {
            $('.platform-content-slider').fadeIn(1000);
        })
        .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
	arrows: false,
	dots: false,
	infinite: true,
	swipe: true,
  autoplay: true,
  autoplaySpeed: 3000,
asNavFor: '.platform-logo-slider',
  pauseOnHover: true
        });

        $('.platform-logo-slider').on('init', function(slick) {
            $('.platform-logo-slider').fadeIn(1000);
        })
        .slick({
slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
	arrows: false,
	dots: false,
	infinite: true,
	swipe: true,
  autoplay: true,
  autoplaySpeed: 3000,
asNavFor: '.platform-content-slider',
  pauseOnHover: true
        });


        $('.platform-thumb-logo').on('init', function(slick) {
            $('.platform-thumb-logo').fadeIn(1000);
        })
        .slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: false,
            lazyLoad: 'ondemand',
            // asNavFor: '.platform-content-slider',
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            centerPadding: '0px',
            pauseOnHover: false,
            focusOnSelect: true
        });
        // $('.platform-thumb-logo .slick-slide').removeClass('slick-active');

        //  //set active class to first thumbnail slides
        //  $('.platform-thumb-logo .slick-slide').eq(0).addClass('slick-active');

        //  //On before slide change match active thumbnail to current slide
        //  $('.platform-content-slider, .platform-logo-slider').on('beforeChange', function (event, slick, currentSlide, plNextSlide) {
        //   var platformSlider = plNextSlide;
        //   $('.platform-thumb-logo .slick-slide').removeClass('slick-active');
        //   $('.platform-thumb-logo .slick-slide').eq(platformSlider).addClass('slick-active');
        // });
      }

});

$(document).ready(function(){  
$("#our-work").scroll(function(){  
$("#work-foot").css("display", "block");  
});  
});  

$(document).ready(function() { 
// Watch More Link click handlers
    const $popup = $('.video-popup');
    const $modal = $('#modal');
    const $closeIcon = $('.close');
    const $watchMoreLink = $('.watch-more');

    $watchMoreLink.click(function(e) {
        $popup.fadeIn(200);
        $modal.fadeIn(200);
        e.preventDefault();
    });
    $closeIcon.click(function () {
        $popup.fadeOut(200);
        $modal.fadeOut(200);
    });
    // for escape key
    $(document).on('keyup',function(e) {
        if (e.key === "Escape") {
           $popup.fadeOut(200);
           $modal.fadeOut(200);
        }
    });
    // click outside of the popup, close it
    $modal.on('click', function(e){
        $popup.fadeOut(200);
        $modal.fadeOut(200);
    });
});