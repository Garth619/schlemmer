<?php 

/* Template Name: Bio */	
	
get_header(); ?>

<img class="bio_pic_mobile" src="<?php bloginfo('template_directory');?>/images/schlemmer.jpg"/>


<div class="container">
	
	
	
	<div class="bio_wrapper">
		
		<?php get_sidebar('bio'); ?>
		
		
	<div class="bio_content_wrapper content">
		
		
		
		<h1 class="bio_header"><?php the_title();?></h1>
		
		<span class="bio_position"><?php the_field( 'position' ); ?></span><!-- bio_position -->
		
		
		
		<?php get_template_part( 'loop', 'page' ) ?>
		
		
		
	</div><!-- bio_content_wrapper -->
	
	</div><!-- bio_wrapper -->

		
	
</div><!-- container -->




	



<?php get_footer(); ?>
