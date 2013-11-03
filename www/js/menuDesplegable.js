// JavaScript Document
$(document).ready(function() {
    $('.menuDesplegable').hide();
		$('.logo').click(function(){
			$('.menuDesplegable').animate({
				width: "toggle"
				});
			});
			
	$(".menuDesplegable").swipe({
		swipeLeft:function(){
			$('.menuDesplegable').animate({
				width: "toggle"
				});
			}
		});

	$('.contenido, .contenidoDos, .menuDesplegable').click(function(){

        if($('.menuDesplegable').is(':visible'))
        {
            $('.menuDesplegable').animate({
              width: "toggle"
            });
            
        }
	});
		
});