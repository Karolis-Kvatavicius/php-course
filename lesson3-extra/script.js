(function( $ ){
    $.fn.myFunc = function() {
        {$(this).fadeOut(function() {
            $(this).remove();
            return $('span:first-of-type').myFunc();
            
        });
    }; 
 }})( jQuery );

$(window).ready(function() {
   $('span:first-child').myFunc();
  });
 