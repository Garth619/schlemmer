<?php get_header(); ?>


<div class="container">
	
	
	<div class="inner_blog">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="blog_content_wrapper content">
		
			<h1><?php the_title();?></h1>
		
			<?php get_template_part( 'loop', 'single' );?>

		</div><!-- blog_content_wrapper -->
	
	
	</div><!-- inner_blog -->
	
	
	
</div><!-- container -->




<?php get_footer(); ?>
