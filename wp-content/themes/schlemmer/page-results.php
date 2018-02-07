<?php 
	
	/* Template Name: Results */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' ) ?>



<div class="container">
	
		
	<div class="results_wrapper">
		
		
		<?php if(get_field('results')): ?>
		
		
		 
			<?php while(has_sub_field('results')): ?>
			
				
					<div class="single_case_result">
		 
				
		    		<span class="case_number"><?php the_sub_field( 'amount' ); ?></span><!-- case_number -->
			
						<span class="case_type"><?php the_sub_field( 'case_type' ); ?></span><!-- case_type -->
			
						<span class="case_name"><?php the_sub_field( 'case_name' ); ?></span><!-- case_name -->
						
						
					</div><!-- single_case_result -->
		    
		    
			<?php endwhile; ?>
			
		
		 
		<?php endif; ?>
		
		
		
				
		
		
	</div><!-- results_wrapper -->
		
	
</div><!-- container -->


<?php get_footer(); ?>
