<section id="section_one">
	
	<div class="section_left">
		
	<a class="logo" href="<?php bloginfo('url');?>">
		
		<img src="<?php bloginfo('template_directory');?>/images/schlemmer_logo.svg"/>
		
	</a><!-- logo -->
	
	<div class="section_one_content">
		
		
		<span class="tagline">
			
<!-- 			<span class="line_one">Fighting for</span> <span class="line_two">what matters</span> <span class="third_line_height">to you</span> -->

		<?php the_field( 'call_to_action' ); ?>
		
		</span><!-- tagline -->
		
		<span class="get_started_button"><?php the_field( 'lets_get_started_button_verbiage' ); ?></span><!-- get_started_button -->
		
		
	</div><!-- section_one_content -->
		
	</div><!-- section_left -->
	
	<div class="section_right">
		
		<div class="menu_wrapper">
			
			<div class="phone_wrapper">
				
				<a href="tel:<?php the_field( 'header_phone','option' ); ?>"><?php the_field( 'header_phone','option' ); ?></a>
				
			</div><!-- phone_wrapper -->
			
			<div class="menu_prompt">
				
				<span class="menu_bars"></span><!-- menu_bars -->
				
				<span class="menu_bars"></span><!-- menu_bars -->
				
				<span class="menu_bars"></span><!-- menu_bars -->
				
				<span class="menu_title">MENU</span><!-- menu_title -->
				
			</div><!-- menu_prompt -->
			
		</div><!-- menu_wrapper -->
		
		
		<?php if(get_field('selling_points')): ?>
			
			<div class="selling_points">
		 
			<?php while(has_sub_field('selling_points')): ?>
		 
				
				<div class="single_sp_wrapper">
				
					<span class="small_header"><?php the_sub_field( 'small_header' ); ?></span><!-- small_header -->
				
					<span class="large_header"><?php the_sub_field( 'large_header' ); ?></span><!-- large_header -->
				
			</div><!-- single_sp_wrapper -->
				
		    
			<?php endwhile; ?>
			
			</div><!-- selling_points -->
		 
		<?php endif; ?>
		
		
		
	</div><!-- section_right -->
	
</section><!-- section_one -->