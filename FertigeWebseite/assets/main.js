$(document).ready(function(){
        $('.menubutton').click(function(){
             $('nav').slideToggle('slow');
         });
    });
$(document).ready(function(){
     $('.slidepara:first-child').bind('inview', function(e, isInViev,visiblePartX,visivlePartY) {
    if (isInView){    
         if (visiblePartY == 'both' || visiblePartY == 'bottom'){
            $('slidepara').css('visibility', 'visible');
            $('slidepara').addClass('animated zoomIn');
            $('slidepara').unbind('inview');
            }          
        }                                          
    });
});