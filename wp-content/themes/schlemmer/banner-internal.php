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

<!--
<?php $banners = Array('one', 'two', 'three'); ?>

<div class="banner <?php echo $banners[array_rand($banners)]; ?>">

</div>

body:not(.home) .banner.one {
background: url("images/internal-img1.jpg") center center no-repeat;
background-size: cover;
}

body:not(.home) .banner.two {
background: url("images/internal-img2.jpg") center center no-repeat;
background-size: cover;
}

body:not(.home) .banner.three {
background: url("images/internal-img3.jpg") center center no-repeat;
background-size: cover;
}
        
-->