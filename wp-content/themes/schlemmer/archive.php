<?php get_header(); ?>

		
<?php
	
	if ( have_posts() )
		the_post();
?>

			


<div class="container">
	
	
	<div class="inner_blog">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="blog_content_wrapper content">
		
			<h1 class="page-title">

				<?php if ( is_day() ) : ?>
					
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
					
					<?php elseif ( is_month() ) : ?>
				
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>

					<?php elseif ( is_year() ) : ?>
					
					<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
					
					<?php else : ?>
				
					<?php _e( 'Blog Archives', 'twentyten' ); ?>

					<?php endif; ?>
			</h1>

<?php
	
	rewind_posts();

	
	get_template_part( 'loop', 'index' );
?>

		</div><!-- blog_content_wrapper -->
	
	
	</div><!-- inner_blog -->
	
	
	
</div><!-- container -->





<?php get_footer(); ?>
