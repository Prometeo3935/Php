
/*******FUNCION SLIDER*******/

$(document).ready(function(){
	
	var imgItems = $('.slider li').length;	
	var imgPos = 1;	

	for(i = 1; i <= imgItems; i++)/*{
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');		
	}*/
 
   
	$('.slider li').hide();
	$('.slider li:first').show();
	/*$('.pagination li:first').css({'color':'#051369'});*/

	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);

	setInterval(function(){nextSlider();}, 5000);

	function pagination(){
		var paginationPos = $(this).index() + 1;
		

		$('.slider li').hide();
		$('.slider li:nth-child('+ paginationPos +')').fadeIn();

		/*$('.pagination li').css({'color':'#051369'});
		$(this).css({'color':'#CD6E2E'});*/

		imgPos = paginationPos;
	}

	function nextSlider(){
		if(imgPos >= imgItems){imgPos = 1;}
		 else {imgPos++;}

		 /*$('.pagination li').css({'color':'#051369'});
		 $('.pagination li:nth-child('+ imgPos +')') .css({'color':'#CD6E2E'});*/

		
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();
		

	}

	function prevSlider(){
		if(imgPos <= 1){imgPos = imgItems;}
		 else {imgPos--;}

		/* $('.pagination li').css({'color':'#051369'});
		 $('.pagination li:nth-child('+ imgPos +')') .css({'color':'#CD6E2E'});*/

		
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();
		

	}
	/******FIN FUNCION SLIDER*******/


	/*****FUNCION PARA EFECTO EN LOGO****/

	setTimeout(function(){
		$('html').addClass("cargado");
	 },1000);

    //a

    
}

	
);

	/*****FIN FUNCION EFECTO LOGO*******/

	/*$(document).ready(main);

	

	*/





