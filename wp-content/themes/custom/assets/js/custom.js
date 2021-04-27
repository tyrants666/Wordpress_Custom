// GLOBAL VARIABLES ---------------------------
// WINDOW ON LOAD ---------------------------
// DOCUMENT READY ---------------------------
// DOCUMENT SCROLL ---------------------------
// RESPONSIVE SCRIPT ---------------------------
// JS INITIALIZE ---------------------------

(function($) {
  
    // GLOBAL VARIABLES
    // ------------------------------------------------------------------------------------------------

      var scrolltop;
      var win_height = window.innerHeight;
      var win_width = window.innerWidth;
      // var win_width = $(document).width();


      function vwraw(px) {
          var unit_vw = 100 / win_width; // gives vw value for 1px // For width 1920px
          var final_vw = px * unit_vw;
          return final_vw;
      }
      function vwm(px) {
          var unit_vw2 = 100 / 667; // gives vw value for 1px // For width 667px
          var final_vw2 = px * unit_vw2 + 'vw';
          return final_vw2;
      }
      function vw(px) {
          var unit_vw = 100 / 1920; // gives vw value for 1px // For width 1920px
          var final_vw = px * unit_vw + 'vw';
          return final_vw;
      }

      function vh(px) {
          var unit_vh = 100 / 1077; // gives vw value for 1px // For width 1920px
          var final_vh = px * unit_vh + 'vh';
          return final_vh;
      }
      function vhtopixel(vh) {
          var unit_px = win_height / 100; // gives vw value for 1px // For width 1920px
          var final_px = vh * unit_px;
          return final_px;
      }

      //Scroll to id smoothly -----------------------------------------------

      $(document).on('click', 'a[href^="#"]', function (event) {
          event.preventDefault();
          $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          },  500);
      });

    
    // WINDOW ON LOAD
    // ------------------------------------------------------------------------------------------------
        window.onload = function () {
          
          //Loader
          // setTimeout(() => {
            $('#loader').fadeOut(500, function(){
              $('#loader').remove();
            });
            $('.main-wrapper').css('display','unset');
          // }, 1000);

        }

    // DOCUMENT READY
    // ------------------------------------------------------------------------------------------------
    
    $(document).ready(function () {



      // Gotop hide-----------------------------------
        $(document).scroll(function () {
          var foot_off = $("footer").offset().top;
          if(scrolltop >= foot_off-800) {
            $('#gotop').fadeIn();
          }else{
              $('#gotop').fadeOut();
          }
        });
      
      });

    // DOCUMENT SCROLL
    // ------------------------------------------------------------------------------------------------

      $(document).scroll(function () {       // Get the current scroll of the page
        scrolltop = $(this).scrollTop();
      });

      $(document).scroll(function () {
        if(scrolltop >= 300){
          $('#navbar1').addClass('solid');
        }else if(scrolltop < 300){
          $('#navbar1').removeClass('solid');
        }
      });      
    // RESPONSIVE SCRIPT
    // ------------------------------------------------------------------------------------------------
    
        //Desktop ----------------------------------------------------
        if (document.documentElement.clientWidth >= 768) {
        }
        
        //Mobile ----------------------------------------------------
        if (document.documentElement.clientWidth < 768) {
        }

    // JS INITIALIZE
    // ------------------------------------------------------------------------------------------------

        // AOS ----------------------------------------------------
        $(window).scroll(function(){
          AOS.init({
          });
        });

}(jQuery));