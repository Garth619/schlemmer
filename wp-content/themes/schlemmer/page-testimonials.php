<?php 
	
	/* Template Name: Testimonials */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' ) ?>



<div class="container">
	

<div class="int_testimonials_wrapper">
	
	
	<div class="testimonial_column">
		
		
		<?php if(get_field('testimonials')): ?>
		 
			<?php while(has_sub_field('testimonials')): ?>
		 
		 
						
						<div class="int_single_testimonial">
		
		
							<span class="title"><?php the_sub_field( 'header_title' ); ?></span><!-- title -->
		
							<span class="testi_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_content -->
 
 
 							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
		
		
						</div><!-- int_single_testimonial -->

				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
	</div><!-- testimonial_column -->
	
	<div class="testimonial_column">
		
		
		
		<?php if(get_field('testimonials_two')): ?>
		 
			<?php while(has_sub_field('testimonials_two')): ?>
		 
		 
						
						<div class="int_single_testimonial">
		
		
							<span class="title"><?php the_sub_field( 'header_title' ); ?></span><!-- title -->
		
							<span class="testi_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_content -->
 
 
 							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
		
		
						</div><!-- int_single_testimonial -->

				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		

	
	</div><!-- testimonial_column -->
		
	
</div><!-- int_testimonials_wrapper -->
		
	
</div><!-- container -->



<?php get_footer(); ?>
