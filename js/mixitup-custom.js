jQuery(document).ready(function ($) {

        $('.icon-plus').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: 400
            }, 
            1500, 
            'easeInOutExpo');
        });
        
      //Initial mixitup, used for animated filtering portgolio.
      $('#portfolio-grid').mixitup({
          'onMixStart': function (config) {
              $('div.toggleDiv').hide();
          }
      });

      //Function for show or hide portfolio desctiption.
      $.fn.showHide = function (options) {
          var defaults = {
              speed: 1000,
              easing: '',
              changeText: 0,
              showText: 'Show',
              hideText: 'Hide'
          };
          var options = $.extend(defaults, options);
          $(this).click(function () {
              $('.toggleDiv').slideUp(options.speed, options.easing);
              var toggleClick = $(this);
              var toggleDiv = $(this).attr('rel');
              $(toggleDiv).slideToggle(options.speed, options.easing, function () {
                  if (options.changeText == 1) {
                      $(toggleDiv).is(":visible") ? toggleClick.text(options.hideText) : toggleClick.text(options.showText);
                  }
              });
              return false;
          });
      };

      //Initial Show/Hide portfolio element.
      $('div.toggleDiv').hide();
      $('.show_hide').showHide({
          speed: 500,
          changeText: 0,
          showText: 'View',
          hideText: 'Close'
      });
    });