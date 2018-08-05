(function( $ ){
    $.fn.myFunc = function() {
        $(this).animate({
            opacity: 0,
          }, 100, function() {
                return $(this).next().myFunc();
        });       
    }; 
 })( jQuery );

$(window).ready(function() {
   $('.column:first').myFunc();
  });
 