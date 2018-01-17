<div class="sidebar_bio">
	
	<img class="bio_pic_desktop" src="<?php bloginfo('template_directory');?>/images/schlemmer.jpg"/>
	
	
	<div class="bio_list">
		
		<span class="bio_list_title"><?php the_field( 'contact_title' ); ?></span><!-- bio_list_title -->
		
		<a class="mail" href="mail:<?php the_field( 'contact' ); ?>">p<?php the_field( 'contact' ); ?></a>
		
	</div><!-- bio_list -->
	
	<div class="bio_list">
		
		<span class="bio_list_title"><?php the_field( 'education_title' ); ?></span><!-- bio_list_title -->
		
		
		<?php if(get_field('education_lists')): ?>
		
			<ul>
		 
			<?php while(has_sub_field('education_lists')): ?>
		 
				<li><?php the_sub_field( 'bullet_list' ); ?></li>
		    
			<?php endwhile; ?>
			
			</ul>
		 
		<?php endif; ?>
		
		
	</div><!-- bio_list -->
	
	<div class="bio_list">
		
		<span class="bio_list_title"><?php the_field( 'awards_title' ); ?></span><!-- bio_list_title -->
		
		
		
		<?php if(get_field('awards_list')): ?>
			
			<ul>
		 
			<?php while(has_sub_field('awards_list')): ?>
		 
				
				<li class="awards">
			
					<span class="year"><?php the_sub_field( 'year' ); ?></span>
				
					<span class="award_title"><?php the_sub_field( 'award' ); ?></span><!-- award_title -->
			
				</li><!-- awards -->
				
				
				
		    
			<?php endwhile; ?>
			
			</ul>
		 
		<?php endif; ?>
		
		
				
	</div><!-- bio_list -->
	
	

	
</div><!-- sidebar -->


			