/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // Determine trigger for touch/click events
      var clickortap;
      if ($('html').hasClass('touch')) {
        clickortap = 'touchend';
      } else {
        clickortap = 'click';
      }

      // Util function to check get variables
      function getVariable(variable)
      {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
          var pair = vars[i].split("=");
          if(pair[0] === variable){return pair[1];}
        }
        return(false);
      }

      // Toggle menu button to x close state on click
      $('#trigger-offcanvas').on(clickortap, function() {
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).addClass('active');
        }
      });

      // Toggle menu button to normal state if clicking on page to close menu
      $('#oc-pusher').on(clickortap, function(e) {
        // Exclude clicks on menu
        if($(e.target).is('#oc-menu')){
          e.preventDefault();
          return;
        }

        if (!$(this).hasClass('oc-pushed')) {
          $('#trigger-offcanvas').removeClass('active');
        }
      });

      // Initiate the off-canvas push menu
      new MLPushMenu( document.getElementById( 'oc-menu' ), document.getElementById( 'trigger-offcanvas' ) );

      // Toggle visibility of search bar on mobile
      $('#trigger-mobile-search').on(clickortap, function() {
        $('#oc-pusher').toggleClass('search-pushed');
      });
    }
  },
  // Home page
  home: {
    init: function() {

      // Photo strip grid rotation on home page
      $('#photo-strip').gridrotator({
        rows: 1,
        columns: 5,
        w1024: {
          rows: 1,
          columns: 4
        },
        w768: {
          rows: 2,
          columns: 2
        },
        w480: {
          rows: 1,
          columns: 1
        },
        step: 1,
        maxStep: 1,
        animType: 'slideTop',
        animSpeed: 300,
        animEasingOut: 'ease',
        animEasingIn: 'ease',
        interval: 6000
      });

    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  // Archive pages
  archive: {
    init: function() {
      // console.log('archive');
      // $('.collapse').collapse();
    }
  },
  // Single posts
  single: {
    init: function() {
      // Wrap any object embed with responsive wrapper (except for map embeds)
      $.expr[':'].childof = function(obj, index, meta, stack){
        return $(obj).parent().is(meta[3]);
      };
      $('object:not(childof(.tableauPlaceholder)').wrap('<div class="object-wrapper"></div>');

      // Add special class to .entry-content-wrapper divs for Instagram embeds (not fixed ratio)
      $('.instagram-media').parent('.entry-content-asset').addClass('instagram');

      // Open Magnific for all image link types inside articles
      $('.entry-content a[href$=".gif"], .entry-content a[href$=".jpg"], .entry-content a[href$=".png"], .entry-content a[href$=".jpeg"]').not('.gallery a').magnificPopup({
        type: 'image',
        midClick: true,
        mainClass: 'mfp-with-zoom',
        zoom: {
          enabled: true,
          duration: 300,
          easing: 'ease-in-out',
          opener: function(openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        },
        image: {
          cursor: 'mfp-zoom-out-cur',
          verticalFit: true,
          titleSrc: function(item) {
            return $(item.el).children('img').attr('alt');
          }
        }
      });

      // Gallery lightboxes in articles
      $('.gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
          delegate: 'a', // the selector for gallery item
          type: 'image',
          gallery: {
            enabled:true
          },
          midClick: true,
          mainClass: 'mfp-with-zoom',
          zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          },
          image: {
            cursor: 'mfp-zoom-out-cur',
            verticalFit: true,
            titleSrc: function(item) {
              return $(item.el).children('img').attr('alt');
            }
          }
        });
      });

      // Smooth scroll to anchor on same page
      $('a[href*=#]:not([href=#]):not(.collapsed)').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    }
  },
  // Flash cards
  single_flash_cards: {
    init: function() {

      /**
       * OWL CAROUSEL 2
       */

      // Function to set nav states based on slide position
      function navState(type, prop) {

        var prev = $('.fc-nav .fc-prev');
        var next = $('.fc-nav .fc-next');
        var size = owl.find('.owl-item').length;

        // Determine current slide
        if (type === 'changed') {
          index = prop.item.index;
          hash = $(prop.target).find(".owl-item").eq(index).find(".fc").data('hash');
        } else {
          index = owl.find('.owl-item.active').index();
          hash = owl.find('.owl-item.active').find('.fc').data('hash');
        }

        // Set index number in top nav bar
        if (index > 0) {
          $('#fc-index').text(index + '/' + (size - 1));
        } else {
          $('#fc-index').text('');
        }

        // Prev state
        if (index === 0) {
          prev.addClass('disabled');
        } else {
          prev.removeClass('disabled');
        }

        // Next state
        if (index + 1 === size) {
          next.addClass('disabled');
        } else {
          next.removeClass('disabled');
        }

        // Active state for TOC
        $('#fc-left-nav .toc li').removeClass('active');
        $('#fc-left-nav .toc').find('a[href=#' + hash + ']').parent('li').addClass('active');
      }

      // Init Owl Carousel 2
      var owl = $("#fc-carousel");
      owl.owlCarousel({
        items: 1,
        // loop: true,
        autoHeight: true,
        URLhashListener: true,
        startPosition: 'URLHash',
        onInitialized: navState
      });

      // Manual carousel nav
      $('.fc-nav .fc-next').on('click', function() {
        owl.trigger('next.owl.carousel');
      });

      $('.fc-nav .fc-prev').on('click', function() {
        owl.trigger('prev.owl.carousel');
      });

      // Functions to run when slides changed
      owl.on('changed.owl.carousel', function(prop) {
        // Set nav states
        navState('changed', prop);

        // Hash change on carousel nav
        var current = prop.item.index;
        var hash = $(prop.target).find(".owl-item").eq(current).find(".fc").data('hash');
        window.location.hash = hash;
      });


      /**
       * Bootstrap Affix
       */
      $(window).on('load', function() {
        $('#fc-left-nav .toc').affix({
          offset: {
            top: function() {
              return (this.top = $('#fc-left-nav .toc').offset().top - 20);
            },
            bottom: function () {
              console.log($('footer.content-info').outerHeight(true));
              return (this.bottom = $('footer.content-info').outerHeight(true) + 50);
            }
          }
        });
      });
    }
  },
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
