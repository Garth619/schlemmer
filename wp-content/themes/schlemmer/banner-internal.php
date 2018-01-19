<div id="randomizer" class="banner">
	
	<span class="banner_title">

		
		<?php 
			
			if(basename(get_page_template()) === 'page.php') { 

				echo "Fighting For What Matters";
				
			}

			if(is_page_template('page-results.php')) { 
		
				echo "Case Results";
				
			}
	
			if(is_page_template('page-testimonials.php')) { 
		
				echo "Testimonials";
	
		 }
		
		
		?>
	
	</span><!-- banner_title -->
	
</div><!-- banner -->