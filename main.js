$( document ).ready( function(){


    function activate(){
        $( '.main-title-inner' ).toggleClass("red");
    }

    $('.activator').hover( function(){
        activate();
        $( this ).toggleClass("icon-spin");
    });

});