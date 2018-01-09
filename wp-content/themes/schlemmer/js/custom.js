jQuery(document).ready(function(){
	
	
	// Menu

	
	
	$('.menu_prompt').on('click', function(e) {
	  
	
		$('	#nav_overlay').toggleClass('open');
		
		
		$('.overlay_close').fadeIn(100);
	
	
	});
	
	
	$('.overlay_close').on('click', function(e) {
	  
	
		$('#nav_overlay').toggleClass('open');
		
		
		$(this).fadeOut(100);
	
	
	});
	
	
	
		
		var windowWidth = $(window).width();
	
	
	
		function checkWidthmenu() {
	    
	    if (windowWidth < 1060) {
	        
	      
	     		$('ul#menu-menu-1 > li.menu-item-has-children > a').on('click', function(e) {
	        
			 			$('.nav_col:first-of-type').fadeOut(200);
			 			
			 			$('.nav_col:last-of-type').delay(500).fadeIn(200);
	      
	      	});
	    	
	    	   		
	    		
	    } 
	    
	    
	    else {
		    
		    
		    
		    
		    
	    }
	    
   
	    
			
	};
		
	
	checkWidthmenu();
	
	
	
	
	$('ul#menu-menu-1 > li.menu-item-has-children > a').on('click', function(e) {
	  

		 $(".sub_menu_container").empty();
		
		 $(this).next('ul.sub-menu').clone().appendTo('.sub_menu_container').addClass('open');
	
		// current $('ul#menu-menu-1 > li.current-menu-parent > a').next('ul.sub-menu').clone().appendTo('.sub_menu_container').show();
	
	
	});
	
	

	
	
	$('span.mobile_back').on('click', function(e) {
	  
			
			$('.nav_col:last-of-type').fadeOut(200);
			 			
			$('.nav_col:first-of-type').delay(500).fadeIn(200);		
	
	
	
	});
	
  




}); // document ready