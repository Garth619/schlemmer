<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>


<?php the_field( 'header_codes','option'); ?>


<style type="text/css">
	
	

<?php the_field( 'review_css','option'); ?>	
	

.section_left {
	background: url(<?php the_field( 'desktop_background_image' ); ?>) top center no-repeat;
  background-size: cover;
}


.sec_four_left {
	background: url(<?php the_field( 'section_four_desktop_background_image' ); ?>) top center no-repeat;
	background-size:cover;
}


.sec_six_att_wrapper {
	background: url(<?php the_field( 'section_six_att_pic' ); ?>) top left no-repeat;
	background-size:cover;

}

.address_image {
	background: url(<?php the_field( 'footer_background_image_desktop','option'); ?>) top left no-repeat;
	background-size:cover;
}



<?php if(get_field('banners','option')): ?>
 
	<?php while(has_sub_field('banners','option')): ?>
 
		
		.banner.<?php the_sub_field( 'banner_class' ); ?> {
			background: url(<?php the_sub_field( 'banner_image' ); ?>) top center no-repeat;
			background-size: cover;
		}

		
	<?php endwhile; ?>
 
<?php endif; ?>








@media screen and (max-width: 1695px) {
	
	
	
	
	
.sec_six_att_wrapper {
	background: url(<?php the_field( 'section_six_att_pic' ); ?>) top center no-repeat;
	background-size:cover;
}
	
	
} /* Media Query */


@media screen and (min-width: 1600px) {
	

		.sec_four_left:before {
			background: url(<?php the_field( 'section_four_desktop_background_image' ); ?>);
			background-size:cover;
		}
		

		.sec_six_att_wrapper:before {
				background: url(<?php the_field( 'section_six_att_pic' ); ?>) top left no-repeat;
				background-size: cover;
			}
		
		
		.address_image:before {
				background: url(<?php the_field( 'footer_background_image_desktop','option'); ?>) top center no-repeat;
				background-size: cover;
		}


	
} /* Media Query */

@media screen and (max-width: 1060px) {
	
	
	
	.section_left {
		background: url(<?php the_field( 'tablet_background_image' ); ?>) top center no-repeat;
		background-size: cover;
	}
	
	
	
	.sec_six_att_wrapper {
		background: url(<?php the_field( 'section_six_att_tablet_pic' ); ?>) top left no-repeat;
/* 		background-size:cover; */
	}
	
	
	
} /* Media Query */

@media screen and (max-width: 767px) {
	
	
	.section_left {
		background: url(<?php the_field( 'mobile_background_image' ); ?>) top center no-repeat;
		background-size: cover;
	}
	
} /* Media Query */


</style>

</head>

<body <?php body_class(); ?>>
				
<header id="header_trigger">
	
<div class="mobile_logo_internals">
	
	<a href="<?php bloginfo('url');?>">
		
		<img src="<?php bloginfo('template_directory');?>/images/logo-two.svg"/>
	
	</a>
	
</div><!-- mobile_logo_internals -->

<div id="sticky_menu">
	
	<div class="sticky_menu_left">
	
		<a class="sticky_menu_logo" href="<?php bloginfo('url');?>">
		
			<img class="logo_mobile" src="<?php bloginfo('template_directory');?>/images/schlemmer_logo.svg"/>
			
			<img class="logo_desktop" src="<?php bloginfo('template_directory');?>/images/logo-two.svg"/>
		
		</a><!-- sticky_menu_logo -->
		
		<a class="sticky_tel" href="tel:<?php the_field( 'header_phone','option' ); ?>"><?php the_field( 'header_phone','option' ); ?></a><!-- sticky_tel -->
		
		
	
	</div><!-- sticky_menu_left -->
	
	<div class="menu_get_started">
			
			<span>let's get started</span>
			
		</div><!-- menu_get_started -->
	
	<div class="menu_prompt sticky">
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_title">MENU</span><!-- menu_title -->
				
	</div><!-- menu_prompt -->
	
</div><!-- sticky_menu -->




<div class="second_sticky_menu">
	
	<div class="second_sticky_left">
		
		<span class="ready_cta">Ready to start your free consultation?</span><!-- ready_cta -->
		
		<span class="ready_cta_mobile">Free Case Evaluation</span><!-- ready_cta -->
		
		<span class="get_cta">Get Started Today</span><!-- get_cta -->
		
	</div><!-- second_sticky_left -->
	
	<div class="menu_prompt sticky">
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
	</div><!-- menu_prompt -->
	
</div><!-- second_sticky_menu -->


<div id="nav_overlay">
	
	<div class="overlay_close">
		
		<div></div>
		
		<div></div>
		
	</div><!-- overlay_close-->
	
	<div class="nav_col_wrapper">
		
		<div class="nav_col">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
		</div><!-- nav_col -->
	
		<div class="nav_col">
			
<!-- 			<span class="mobile_back">Back</span> -->
		
			<div class="sub_menu_container"></div><!-- sub_menu_container -->
		
		</div><!-- nav_col -->
		
	</div><!-- nav_col_wrapper -->
	
</div><!-- nav_overlay -->

</header>


<div class="sticky_get_started_tab_wrapper">

	<div class="sticky_get_started_tab">
	
		<span class="free_case">Free Case Evaluation</span><!-- free_case -->
	
	</div><!-- sticky_get_started_tab -->
	
	<div class="get_started_cta">
		
		<img src="<?php bloginfo('template_directory');?>/images/get-started-slide-out-two.svg"/>
		
		<span class="click_here">Click Here</span><!-- click_here -->
		
		
	</div><!-- get_started_cta -->


</div><!-- sticky_get_started_tab_wrapper -->



<div class="sticky_form_overlay">
	
	<div class="sticky_overlay_close">
		
		<div></div>
		
		<div></div>
		
	</div><!-- overlay_close-->

	<section id="form_section">
		
		<?php echo file_get_contents("wp-content/themes/schlemmer/images/new-bridge.svg"); ?>
		
		<span class="get_started">Let's Get Started</span><!-- get_started -->
		
		<span class="required">Form Field Required <span class="ast">*</span></span><!-- required -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(3, false, false, false, '', true, 633); ?>
			
		</div><!-- form_wrapper -->
		
	</section><!-- form_section -->
	
	
	
</div><!-- sticky_form_overlay -->
			