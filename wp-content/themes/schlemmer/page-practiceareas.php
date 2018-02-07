<?php 

/* Template Name: Practice Areas Directory */	
	
get_header(); ?>


<div class="container">
	
	<div class="pa_wrapper">
		
		
		<h1>Practice Areas</h1>
		
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'practice_area' ) ); ?>
		
		
	</div><!-- pa_wrapper -->
		
	
</div><!-- container -->


<?php //use get_template_part( 'loop', 'page' ) if needed ?>

	



<?php get_footer(); ?>
