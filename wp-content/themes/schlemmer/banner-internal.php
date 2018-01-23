<?php $banners = Array('one', 'two', 'three', 'four'); ?>

<div id="randomizer" class="banner <?php echo $banners[array_rand($banners)]; ?>">
	
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

