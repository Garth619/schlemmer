<footer>
	
	<section id="form_section">
		
		<?php echo file_get_contents("wp-content/themes/schlemmer/images/new-bridge.svg"); ?>
		
		<span class="get_started">Let's Get Started</span><!-- get_started -->
		
		<span class="required">Form Field Required <span class="ast">*</span></span><!-- required -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(1, false, false, false, '', true, 124); ?>
			
		</div><!-- form_wrapper -->
		
	</section><!-- form_section -->
	
	
</footer>



<?php wp_footer();?>


</body>
</html>
