$( document ).ready( function() {

    $( '.js-expand' ).on( "click", function() {
        $( '.banner' ).slideToggle('slow');
        $(this).toggleClass( "active");
    });

    $( '.js-expand' ).trigger("click");

var $container = $( '.page-inner' );

    $container.imagesLoaded( function(){


        $('.page-inner .post-photo').each(function(){
            var image = $(this).find( 'img' );
            var paletteArray = getDominantColor(image);
            var color = 'rgba('+paletteArray[0]+','+paletteArray[1]+','+paletteArray[2]+',0.85)';
           $(this).parent().find('.post-title').css("background", color);
        });

      $container.masonry({
        itemSelector : '.post'
      });

      $( '.js-expand' ).trigger("click");
      $('.page').animate({"opacity":"1"},500);
    });

});