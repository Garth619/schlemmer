
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="single_post">
			
			
			<a href="<?php the_permalink();?>">
					<h2>Donec ut porttitor leo, pellentesque commodo ac quam sit amet ullamcorper praesent vitae ligula eros phasellus lorem</h2>
			</a>
			
			<div class="meta">
				
				<span>Posted by  <span class="blue"><?php the_author(); ?></span>  on <span class="blue"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span> in <?php echo get_the_category_list();?></span>
				
			</div><!-- meta -->
			
			<div class="blog_content"><?php echo wp_trim_words( get_the_content(), 106, '...' );?></div><!-- blog_content -->
			
			<a class="read_more_button" href="<?php the_permalink();?>">Read Full Post</a><!-- read_more_button -->
			
			<?php edit_post_link( __( 'Edit'), '', '' ); ?>
			
			
		</div><!-- single_post -->
			
			
			
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>



<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav_below">
		
		<div class="nav_previous"><?php next_posts_link( __( 'Prev' ) ); ?></div>
		
		<?php if(get_previous_posts_link()) { ?>
			
				<div class="nav_next"><?php previous_posts_link( __( 'Next') ); ?></div>
				
		<? } ?>
	
	</div><!-- #nav-below -->

<?php endif; ?>

