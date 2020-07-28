(function($) {
    "use strict";
    $(document).on('ready', function() {	
	
		/* Bizwheel Settings */
		$('.elena-options .icon').on('click', function(event){
			event.preventDefault();
			if( $ (this).hasClass('inOut')  ){
				$('.elena-options').stop().animate({right:'0px'},500 );
			} else{
				$('.elena-options').stop().animate({right:'-245px'},500 );
			} 
			$(this).toggleClass('inOut');
			return false;

		});


		$('.select-layout .boxed').on( "click", function(){
			$('#page').addClass('boxed-layout');
		});	

		$('.select-layout .full-width').on( "click", function(){
			$('#page').removeClass('boxed-layout');
		});	

		$('.select-layout .boxed').on( "click", function(){
			$('body').addClass('boxed-bg');
		});	
		
		
		$(".bg-one" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('img/bg-1.png')" );
		return false;
		});
			
		$(".bg-two" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-2.png')" );
			return false;
		});
			
		$(".bg-three" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-3.png')" );
			return false;
		});
			
		$(".bg-four" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-4.png')" );
			return false;
		});
		
		$(".bg-five" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-5.png')" );
			return false;
		});
		$(".bg-six" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-6.png')" );
			return false;
		});
		$(".bg-seven" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-7.png')" );
			return false;
		});
		$(".bg-eight" ).click(function(){
			$("#bg" ).attr("style", "background-image:url('img/bg-8.png')" );
			return false;
		});
		

		/* Bizwheel Colors */
		$(".skin1" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-1.css" );
			return false;
		});
		$(".skin2" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-2.css" );
			return false;
		});
		$(".skin3" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-3.css" );
			return false;
		});
		$(".skin4" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-4.css" );
			return false;
		});
	});	
		
})(jQuery);