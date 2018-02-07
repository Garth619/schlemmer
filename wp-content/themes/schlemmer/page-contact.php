<?php 
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div class="container">
	
	<div class="int_contact_wrapper">
		
		<h1>Contact</h1>
		
		<div class="int_contact_bottom">
			
			
			
			<div class="int_addess">
				
				<div class="loc_wrapper">
			
				<span class="address_header"><?php the_field( 'phone_verbiage','option' ); ?></span><!-- address_header -->
			
				<a class="tel" href="tel:<?php the_field( 'footer_phone_one','option' ); ?>"><?php the_field( 'footer_phone_one','option' ); ?></a>
			
				<a class="tel" href="tel:<?php the_field( 'footer_phone_two','option' ); ?>"><?php the_field( 'footer_phone_two','option' ); ?></a>
				
			
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header"><?php the_field( 'visit_verbiage','option'); ?></span><!-- address_header -->
			
				<span class=""><?php the_field( 'schlemmer_firm_verbiage','option'); ?></span>
				
				<a class="address_link" href="<?php the_field( 'address_link','option'); ?>" target="_blank"><?php the_field( 'address', 'option'); ?></a>
				
			<a class="get_directions_button" href="<?php the_field( 'address_link','option'); ?>" target="_blank">Get Directions</a><!-- get_directions_button -->
			
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header"><?php the_field( 'office_hours_verbiage','option'); ?></span><!-- address_header -->
			
				<span><?php the_field( 'office_hours_days','option'); ?></span>
			
				<span><?php the_field( 'office_hours','option'); ?></span>
				
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header"><?php the_field( 'follow_us_verbiage','option'); ?></span><!-- address_header -->
			
				<?php if(get_field('google_business_url','option')) { ?>
				
				<a class="social" href="<?php the_field( 'google_business_url','option'); ?>" target="_blank">
					
					<svg id="google" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.2 30"><defs><style></style></defs><title>social-g+-hover</title><path class="google-cls-1" d="M15,12v6h8.1c-1.3,3.8-3.2,5.9-8.1,5.9A8.83,8.83,0,0,1,6.2,15,8.77,8.77,0,0,1,15,6.1a8.25,8.25,0,0,1,5.8,2.2,46.86,46.86,0,0,1,4.3-4.4A15,15,0,1,0,15,30c12.4,0,15.4-10.8,14.4-18Zm27,.3V7.1H38.3v5.2H33V16h5.3v5.3H42V16h5.2V12.3Z"/></svg>
					
				</a>
				
				<?php  } ?>
				
				<?php if(get_field('facebook_url','option')) { ?>
				
				<a class="social" href="<?php the_field( 'facebook_url','option'); ?>" target="_blank">
					
					<svg id="fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 34.2"><defs><style></style></defs><title>social-fb</title><path id="Facebook" class="fb-cls-1" d="M3.4,6.6v4.7H0v5.8H3.4V34.2h7.1V17.1h4.8s.4-2.8.7-5.8H10.6V7.4A1.7,1.7,0,0,1,12.1,6H16V0H10.8C3.3,0,3.4,5.8,3.4,6.6Z"/></svg>
					
				</a>
				
				<?php  } ?>
				
				<?php if(get_field('linkedin_url','option')) { ?>
				
				<a class="social" href="<?php the_field( 'linkedin_url','option'); ?>" target="_blank">
					
					<svg id="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.2 30.7"><defs><style></style></defs><title>social-in</title><path id="LinkedIn" class="linkedin-cls-1" d="M32.2,18.8V30.7H25.3V19.6c0-2.8-1-4.7-3.5-4.7a3.76,3.76,0,0,0-3.5,2.5,4.42,4.42,0,0,0-.2,1.7V30.7H11.2s.1-18.8,0-20.7H18v3h0v-.1a6.89,6.89,0,0,1,6.2-3.4C28.8,9.5,32.2,12.5,32.2,18.8ZM3.9,0C1.5,0,0,1.5,0,3.6A3.58,3.58,0,0,0,3.8,7.2h0A3.61,3.61,0,0,0,7.7,3.6,3.47,3.47,0,0,0,3.9,0ZM.4,30.7H7.3V10H.4Z"/></svg>
					
				</a>
				
				<?php  } ?>
				
				<?php if(get_field('twitter_url','option')) { ?>
				
				
				<a class="social" href="<?php the_field( 'twitter_url','option'); ?>" target="_blank">
					
					
					<svg id="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.3 27.1"><defs><style></style></defs><title>social-t</title><path class="twitter-cls-1" d="M32.3,3.2a16.57,16.57,0,0,1-3.8,1.1A6.57,6.57,0,0,0,31.4.5a12.81,12.81,0,0,1-4.2,1.7A6.23,6.23,0,0,0,22.4,0a6.7,6.7,0,0,0-6.6,6.8A8.75,8.75,0,0,0,16,8.4,18.92,18.92,0,0,1,2.3,1.3a6.65,6.65,0,0,0-.9,3.4,7,7,0,0,0,2.9,5.7,5.29,5.29,0,0,1-3-.9v.1a6.79,6.79,0,0,0,5.3,6.7,5,5,0,0,1-1.7.2,4.87,4.87,0,0,1-1.2-.1,6.54,6.54,0,0,0,6.2,4.7A13.21,13.21,0,0,1,1.7,24,9.58,9.58,0,0,1,0,24a18.6,18.6,0,0,0,10.2,3.1C22.4,27.1,29,16.6,29,7.6V6.7A12.28,12.28,0,0,0,32.3,3.2Z"/></svg>
					
					
				</a>
				
				<?php  } ?>
				
			
			</div><!-- loc_wrapper -->
				
			</div><!-- int_addess -->
			
			
			<div class="int_map">
				
				
				<?php the_field( 'map' ); ?>
				
				
			</div><!-- int_map -->
			
			
		</div><!-- contact_bottom -->
		
		
	</div><!-- int_contact_wrapper -->
	
	
</div><!-- container -->


<?php get_footer(); ?>
