// Menu Class Add
$(function(){
	$(window).on('scroll', function(){
		
		if($(window).scrollTop() > $('.top').outerHeight() && $(window).outerWidth() > 640){
			var menu_row_height = '-' + $('.menu-row').outerHeight() + 'px';
			
			$('.menu-row').addClass('sticky-menu');
			$('.sixam').addClass('sixam-on');
			$('.sixam-container').addClass('sixam-on');
			//$('.menu-row').css({ top : menu_row_height});
		}
		if($(window).scrollTop() < $('.top').outerHeight() && $(window).outerWidth() > 640){
			$('.sixam').removeClass('sixam-on');
			$('.sixam-container').removeClass('sixam-on');
		}
		if($(window).scrollTop() < 60 && $(window).outerWidth() > 640){
			$('.menu-row').removeClass('sticky-menu');
		}
	});
});