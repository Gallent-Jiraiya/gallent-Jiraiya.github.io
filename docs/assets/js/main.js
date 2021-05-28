/**
* Template Name: TheEvent - v2.0.0
* Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflow: {
  rotate: 20,
  stretch: 0,
  depth: 200,
  modifier: 1,
  slideShadows : true
  },
  loop: true,
  autoplay: {
    delay:3000,
    disableOnInteraction:false,
  },
});
var controller = new ScrollMagic.Controller();
var tl1 = new TimelineMax();
tl1.from("#team-1 .before ",.5,{y:-300,opacity:0,ease:Power1.easeOut},0).from("#team-1 .after ",.5,{y:300,opacity:0,ease:Power1.easeOut},0);
var scene1 = new ScrollMagic.Scene({
    triggerElement: "#team-1"
})
.setTween(tl1)
.addTo(controller);
var tl2 = new TimelineMax();
tl2.from("#team-2 .before ",.5,{y:-300,opacity:0,ease:Power1.easeOut},0).from("#team-2 .after ",.5,{y:300,opacity:0,ease:Power1.easeOut},0);
var scene2 = new ScrollMagic.Scene({
    triggerElement: "#team-2"
})
.setTween(tl2)
.addTo(controller);
var tl3 = new TimelineMax();
tl3.from("#team-3 .before ",.5,{y:-300,opacity:0,ease:Power1.easeOut},0).from("#team-3 .after ",.5,{y:300,opacity:0,ease:Power1.easeOut},0);
var scene3 = new ScrollMagic.Scene({
    triggerElement: "#team-3"
})
.setTween(tl3)
.addTo(controller);
var tl4 = new TimelineMax();
tl4.from("#team-4 .before ",.5,{y:-300,opacity:0,ease:Power1.easeOut},0).from("#team-4 .after ",.5,{y:300,opacity:0,ease:Power1.easeOut},0);
var scene4 = new ScrollMagic.Scene({
    triggerElement: "#team-4"
})
.setTween(tl4)
.addTo(controller);

let viewer=document.getElementById('ImageViewer');
let img=document.getElementById('gal-img');
function ShowImage(path){
  viewer.style.display= "flex";
  img.src=path;
  var tl5 = new TimelineMax();
  tl5.from(viewer,.5,{opacity:0,ease:Power1.easeOut},0);
  var scene5 = new ScrollMagic.Scene({})
  .setTween(tl5)
  .addTo(controller);
}

!(function($) {
  "use strict";
  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

 /* if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }*/

  // Real view height for mobile devices
  if (window.matchMedia("(max-width: 767px)").matches) {
    $('#intro').css({
      height: $(window).height()
    });
  }

  // Initiate the wowjs animation library
  new WOW().init();

  // Initialize Venobox
  $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (!$('#header').hasClass('header-fixed')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

  // Buy tickets select the ticket type on click
  $('#buy-ticket-modal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var ticketType = button.data('ticket-type');
    var modal = $(this);
    modal.find('#ticket-type').val(ticketType);
  })

})(jQuery);