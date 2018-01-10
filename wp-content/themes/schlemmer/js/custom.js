jQuery(document).ready(function(){
	
	
	// Menu
	
	
	

	
	
	$('.menu_prompt').on('click', function(e) {
	  
	
		$('	#nav_overlay').toggleClass('open');
		
		
		$('.overlay_close').fadeIn(100);
		
		
		
	
	
	});
	
	
	$('.overlay_close').on('click', function(e) {
	  
	
		$('#nav_overlay').toggleClass('open');
		
		
		$(this).fadeOut(100);
		
		$(".sub_menu_container").empty();
	
	
	});
	
	
	
		
		
		
		
		
		var windowWidth = $(window).width();
	
	
	
		function checkWidthmenu() {
	    
	    if (windowWidth < 1060) {
		    
		    	
		    	$('<li class="mobile_back"><a>Back</a></li>').prependTo( "ul.sub-menu" );
		    
		    
		    	$('.nav_col:last-of-type').hide();
	        
	      
	     		$('ul#menu-menu-1 > li.menu-item-has-children > a').on('click', function(e) {
	        
			 			$('.nav_col:first-of-type').fadeOut(200);
			 			
			 			$('.nav_col:last-of-type').delay(500).fadeIn(200);
			 			
			 			
			 			// $('.mobile_back').fadeIn(200);		
			 			
	      
	      	});
	      	
	      
	      
					$('.overlay_close').on('click', function(e) {
	  
	
					
							$('.nav_col:last-of-type').delay(500).fadeOut(200);
			 			
							$('.nav_col:first-of-type').delay(500).fadeIn(200);
							
							
							$('.mobile_back').fadeOut(200);
							
						
		
					});	
					
					
					
					
					
					
					
					
					$(document).on('click','.mobile_back', function(e) {
	  
			
								$('.nav_col:last-of-type').fadeOut(200);
			 			
								$('.nav_col:first-of-type').delay(500).fadeIn(200);
	      		
	
	
					});
					
					
					
				
	    	
	    	   		
	    		
	    } 
	    
	    
	    else {
		    
		    
		    
		    
		    
	    }
	    
   
	    
			
	};
		
	
	checkWidthmenu();
	
	
	
	
	$('ul#menu-menu-1 > li.menu-item-has-children > a').on('click', function(e) {
	  

		 $(".sub_menu_container").empty();
		
		 $(this).next('ul.sub-menu').clone().appendTo('.sub_menu_container').addClass('open');
		 
		 $(this).addClass('active');
	
		// current $('ul#menu-menu-1 > li.current-menu-parent > a').next('ul.sub-menu').clone().appendTo('.sub_menu_container').show();
	
	
	});
	
	

	
	
	
	
  




}); // document ready