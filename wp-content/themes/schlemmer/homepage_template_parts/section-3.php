<section id="section_three">
	
	<div class="section_three_inner">
		
		<?php echo file_get_contents("wp-content/themes/schlemmer/images/new_brooklyn.svg"); ?>
		
				
		<div class="sec_three_content content">
			
			
			<span class="large_header"><?php the_field( 'section_three_header' ); ?></span>
			
			
			<div class="sec_three_col">
				
				
				<?php the_field( 'section_three_content' ); ?>

				
			</div><!-- sec_three_col -->
			
			<div class="sec_three_col">
				
				<?php the_field( 'section_three_content_two' ); ?>

			</div><!-- sec_three_col -->
			
		</div><!-- sec_three_content -->
		
		
			<a class="view_pa" href="<?php the_field( 'pa_button_link' ); ?>"><?php the_field( 'pa_button_button_verbiage' ); ?></a><!-- view_pa_new -->
		
	</div><!-- section_three_inner -->
	
</section><!-- section_three -->