(function( $ ){
    $.fn.myFunc = function() {
        $(this).animate({
            opacity: 0,
          }, 100, function() {
                return $(this).nextAll(".colored").first().myFunc();
        });       
    }; 
 })( jQuery );

$(window).ready(function() {
   $('.colored:first').myFunc();
  });
 