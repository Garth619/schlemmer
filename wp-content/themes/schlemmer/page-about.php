<?php 
	
	/* Template Name: About */
	
	
	get_header(); ?>


<div class="container" style="min-height:800px">
	
		<div class="int_about">
			
			
			<h1>About</h1>
			
			<span class="small_header"><?php the_field( 'sub_header' ); ?></span><!-- small_header -->
			
			
			<div class="int_about_bottom">
				
				
				<div class="int_about_content">
					
					
					<div class="int_about_content_inner content">
					
						<?php the_field( 'about_content_one' ); ?>
					
					</div><!-- int_about_content_inner -->
					
					
				</div><!-- int_about_content -->
				
				
				
				<div class="int_about_pic">
					
					<?php $about_image = get_field( 'about_image' ); ?>
					
					<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
					
				</div><!-- int_about_pic -->
				
				
				
				<?php if(get_field('awards')): ?>
				
					<div class="about_logos">
				 
					<?php while(has_sub_field('awards')): ?>
				 
						
						<div class="logo_slide">
						
							<?php $image = get_sub_field( 'image' ); ?>
							
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						</div><!-- logo_slide -->
						
				    
					<?php endwhile; ?>
					
					</div><!-- about_logos -->
				 
				<?php endif; ?>
				
				
				
				
				
				
			</div><!-- int_about_bottom -->
			
			
			<div id="second_about_trigger" class="second_int_about_wrapper">
				
				
				<div class="second_int_about_inner">
				
				
				<?php echo file_get_contents("wp-content/themes/schlemmer/images/new_brooklyn.svg"); ?>
				
				
				<div class="second_int_about_content content">
					
					
					<p class="about_intro"><?php the_field( 'about_content_two_intro' ); ?></p><!-- about_intro -->
					
					
					<?php the_field( 'about_content_two' ); ?>
					
				</div><!-- second_int_about_content -->
				
				
				
				</div><!-- second_int_about_inner -->
				
				
				
			</div><!-- second_int_about_wrapper -->
			
			
			
		</div><!-- int_about -->
	
</div><!-- container -->


<?php get_footer(); ?>
