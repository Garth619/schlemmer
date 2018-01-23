<section id="section_six">
	
	
	<div class="sec_six_att_wrapper">
		
		<?php $section_six_att_pic_mobile = get_field( 'section_six_att_pic_mobile' ); ?>
		
		<img class="mobile_sec_six" src="<?php echo $section_six_att_pic_mobile['url']; ?>" alt="<?php echo $section_six_att_pic_mobile['alt']; ?>" />
		
	</div><!-- section_six_att_wrapper -->
	
	<div class="sec_six_content_wrapper">
		
		<div class="sec_six_title_wrapper">
		
			<span class="small_header"><?php the_field( 'section_small_header' ); ?></span><!-- small_header -->
		
			<span class="large_header"><?php the_field( 'section_large_header' ); ?></span><!-- large_header -->
			
		</div><!-- sec_six_title_wrapper -->
		
		<div class="sec_six_content content">
				
				<?php the_field( 'section_six_content' ); ?>
				
				<a href="<?php the_field( 'meet_paul_link' ); ?>" class="att_name"><?php the_field( 'meet_paul_verbiage' ); ?></a><!-- att_name -->
				
			</div><!-- sec_six_content -->

		
	</div><!-- sec_six_content -->
	
	
</section><!-- section_six -->