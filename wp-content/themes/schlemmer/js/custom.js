jQuery(document).ready(function(){
	
	
	// Menu

	
	
	$('.menu_prompt').on('click', function(e) {
	  
	
		$('	#nav_overlay').toggleClass('open');
	
	
	});
	
	
	$('.overlay_close').on('click', function(e) {
	  
	
		$('#nav_overlay').toggleClass('open');
	
	
	});
	
	
	$('ul#menu-menu-1 > li.menu-item-has-children > a').on('click', function(e) {
	  

		$(".sub_menu_container").empty();
	
	
		$(this).next('ul.sub-menu').clone().appendTo('.sub_menu_container').fadeIn(500);
	
		// current $('ul#menu-menu-1 > li.current-menu-parent > a').next('ul.sub-menu').clone().appendTo('.sub_menu_container').show();
	
	
	});
	
  
}); // document ready