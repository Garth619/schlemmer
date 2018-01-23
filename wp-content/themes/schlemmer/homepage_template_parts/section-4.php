<section id="section_four">
	
	<div class="sec_four_left">
		
		<div class="sec_four_content">
			
			<span class="large_header">
				
<!--
				<span class="sec_four_line_one">what</span>
				
				<span class="sec_four_line_two">our</span>
				
				<span class="sec_four_line_three">clients</span>
			
				<span class="sec_four_line_four">say</span>
-->
			
			
			<?php the_field( 'section_four_header' ); ?>
			
			</span><!-- large_header -->
			
			<a class="testimonial_button" href="<?php the_field( 'view_testimonials_link' ); ?>"><?php the_field( 'view_testimonials_verbiage' ); ?></a>
			
		</div><!-- sec_four_content -->
	
	</div><!-- sec_four_left -->
	
	<div class="sec_four_right">
		
		<div class="testimonial_title_wrapper">
			
			<?php echo file_get_contents("wp-content/themes/schlemmer/images/ny.svg"); ?>
			
			<span class="testimonial_title"><?php the_field( 'testimonials_title' ); ?></span><!-- testi_title -->
			
		</div><!-- testi_title_wrapper -->
		
		
		
		
		<div class="testimonial_slideshow">
			
			<?php if(get_field('testimonials_mainpage')): ?>
		 
			<?php while(has_sub_field('testimonials_mainpage')): ?>
		 
			
				<div class="single_testimonial_slide">
				
					<span class="large_header"><?php the_sub_field( 'testimonials_header' ); ?></span><!-- large_header -->
				
					<span class="slide_content"><?php the_sub_field( 'testimonials_content' ); ?></span><!-- slide_content -->
				
					<span class="blackline"></span><!-- blackline -->
				
					<span class="testimonial_name"><?php the_sub_field( 'name' ); ?></span><!-- testimonial_name -->
				
			</div><!-- single_testimonial_slide -->
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
			
	
			
			
			
		</div><!-- testimonial_slideshow -->
		
		<div class="next_back_wrapper">
				
				<div class="prev slide_button">Prev</div><!-- next -->
				
				<div class="next slide_button">Next</div><!-- next -->
				
			</div><!-- next_back_wrapper -->
		
	
	</div><!-- sec_four_right -->
	
	
	
</section><!-- section_four -->