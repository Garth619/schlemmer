<?php get_header(); ?>



<?php get_template_part( 'banner', 'internal' ) ?>

<div class="container">
	
	
	<div class="inner_default">
		
		<?php get_sidebar(); ?>
		
		<div class="content_wrapper content">
		
		<h1><?php the_title();?></h1>
		
		
		<?php get_template_part( 'loop', 'page' )?>
		
		
				
	</div><!-- content_wrapper -->
	
	
	</div><!-- inner_default -->
	
	
	
</div><!-- container -->




	



<?php get_footer(); ?>
