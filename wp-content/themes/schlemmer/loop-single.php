<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="meta">
				
				<span>Posted by  <span class="blue"><?php the_author(); ?></span>  on <span class="blue"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span> in <?php echo get_the_category_list();?></span>
				
			</div><!-- meta -->
	
	<?php the_content();?>
	
	<?php edit_post_link( __( 'Edit'), '', '' ); ?>

<?php endwhile; // end of loop ?>

<?php endif; ?>