//кнопка наверх і плавна прокрутка
$(document).ready(function () {
			// body...
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
					} else 	{
			$('.scrollup').fadeOut();
	 					}
		});		
		$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
		return false;
		});


		$('a[href^="#"]').click(function () { 
		    elementClick = $(this).attr("href");
		    destination = $(elementClick).offset().top;
			    {
			    $('html,body').animate( { scrollTop: destination }, 1000);
			    } 
		    return false;
			});		
		});	

//burger-menu
// $(document).ready(function () {	
// 	$(".burger-menu").click(function(e) {
// 			e.preventDefault();
// 		$(".menu").toggleClass('active');
// 		$( ".burger-menu" ).hide();
// 		$( ".cross" ).show();
// 	});
// 		$( ".cross" ).click(function(e) {
// 			e.preventDefault();
// 		$( ".menu" ).toggleClass('active');
// 		$( ".cross" ).hide();
// 	 	$( ".burger-menu" ).show();
// 	});
	
// 	if ( $(window).width() < 950) {
// 		$(".menu ul li a").click(function(e) {
// 			e.preventDefault();
// 			$("nav.menu").toggleClass('active');
// 			$( ".cross" ).hide();
// 		 	$( ".burger-menu" ).show();
// 		});	
// 	}
// });
const menuToggle = document.querySelector('#menu-togle');
const mobileNavContainer = document.querySelector('#mobile-nav');

menuToggle.onclick = function(){
    menuToggle.classList.toggle('menu-icon-active');
    mobileNavContainer.classList.toggle('mobile-nav__active');
}




//метрики для данних 
	    $(function() {
	        $('.full').easyPieChart({
	            //your options goes here
	           	size: 85,
	            barColor: '#C9ED57',
	            lineWidth: '12',
	            scaleColor: false,
	            trackColor: '#9FA3AA'
	        });
	    });

	    $(function() {
	        $('.temp').easyPieChart({
	            //your options goes here
	           	size: 85,
	            barColor: '#ED5757',
	            lineWidth: '12',
	            scaleColor: false,
	            trackColor: '#9FA3AA'
	        });
	    });	 

	    $(function() {
	        $('.hum').easyPieChart({
	            //your options goes here
	           	size: 85,
	            barColor: '#1FB7CC',
	            lineWidth: '12',
	            scaleColor: false,
	            trackColor: '#9FA3AA'
	        });
	    });			