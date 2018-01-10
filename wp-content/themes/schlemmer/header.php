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

</head>

<body <?php body_class(); ?>>
				


<div id="sticky_menu">
	
	<div class="sticky_menu_left">
	
		<a class="sticky_menu_logo" href="<?php bloginfo('url');?>">
		
			<img src="<?php bloginfo('template_directory');?>/images/schlemmer_logo.svg"/>
		
		</a><!-- sticky_menu_logo -->
		
		<a class="sticky_tel" href="tel:(888) 458-8500">(888) 458-8500</a><!-- sticky_tel -->
	
	</div><!-- sticky_menu_left -->
	
	<div class="menu_prompt sticky">
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_bars"></span><!-- menu_bars -->
				
		<span class="menu_title">MENU</span><!-- menu_title -->
				
	</div><!-- menu_prompt -->
	
</div><!-- sticky_menu -->


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



			