<section id="section_two">
	
	<div class="inner_section_two">
	
	
		<div class="section_two_header">
			
			<h1 class="sec_two_header"><span class="large">Brooklyn</span> <span class="small">Personal Injury Attorneys</span></h1>
			
					
<!--
			<h2 class="small_header">Personal Injury Attorneys</h2>
		
			<h1 class="large_header">Brooklyn</h1>
-->
			
	</div><!-- section_two_header -->
			
			<div class="section_two_content content">
				
				<?php the_field( 'section_two_content' ); ?>
								
			</div><!-- section_two_content -->
			
			<div class="section_two_img_wrapper">
				
				
				<?php $section_two_desktop_image_two = get_field( 'section_two_desktop_image_two' ); ?>
				
				
				<img class="section_two_img" src="<?php echo $section_two_desktop_image_two['url']; ?>" alt="<?php echo $section_two_desktop_image_two['alt']; ?>"/>
				
				
				<?php $section_two_laptop_image_two = get_field( 'section_two_laptop_image_two' ); ?>
				
				<img class="section_two_img_laptop" src="<?php echo $section_two_laptop_image_two['url']; ?>" alt="<?php echo $section_two_laptop_image_two['alt']; ?>"/>
				
				
			</div><!-- section_two_img_wrapper -->
		
		</div><!-- inner_section_two -->
	
</section><!-- section_two -->