<footer>
	
	<?php if(is_front_page() || (is_page_template('page-contact.php'))) { ?>
	
	<section id="form_section">
		
		<?php echo file_get_contents("wp-content/themes/schlemmer/images/new-bridge.svg"); ?>
		
		<span class="get_started">Let's Get Started</span><!-- get_started -->
		
		<span class="required">Form Field Required <span class="ast">*</span></span><!-- required -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(1, false, false, false, '', true, 133); ?>
			
		</div><!-- form_wrapper -->
		
	</section><!-- form_section -->
	
	<?php } ?>
	
	
	<section id="location_section">
		
		<div class="address_wrapper">
			
			<div class="loc_wrapper">
			
				<span class="address_header">Phone</span><!-- address_header -->
			
				<a class="tel" href="tel:888.458.8500">888.458.8500</a>
			
				<a class="tel" href="tel:212.390.8030">212.390.8030</a>
			
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header">Visit Us</span><!-- address_header -->
			
				<span class="">the schlemmer law firm</span>
				
				<a class="address_link" href="https://www.google.com/maps/place/830+3rd+Ave,+New+York,+NY+10022/data=!4m2!3m1!1s0x89c258e32e3be2e7:0xb68989f52aaceec5?sa=X&ved=0ahUKEwj8-9_T3NrYAhVY6WMKHb3WCXkQ8gEIKDAA" target="_blank">830 3rd avenue, 5th floor New York, NY 10022</a>
			
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header">Office Hours</span><!-- address_header -->
			
				<span>Monday - Friday</span>
			
				<span>8AM - 5PM</span>
				
			</div><!-- loc_wrapper -->
			
			<div class="loc_wrapper">
			
				<span class="address_header">Follow Us</span><!-- address_header -->
			
				<a class="social" href="" target="_blank">
					
					<svg id="google" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.2 30"><defs><style></style></defs><title>social-g+-hover</title><path class="google-cls-1" d="M15,12v6h8.1c-1.3,3.8-3.2,5.9-8.1,5.9A8.83,8.83,0,0,1,6.2,15,8.77,8.77,0,0,1,15,6.1a8.25,8.25,0,0,1,5.8,2.2,46.86,46.86,0,0,1,4.3-4.4A15,15,0,1,0,15,30c12.4,0,15.4-10.8,14.4-18Zm27,.3V7.1H38.3v5.2H33V16h5.3v5.3H42V16h5.2V12.3Z"/></svg>
					
				</a>
				
				
				<a class="social" href="" target="_blank">
					
					<svg id="fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 34.2"><defs><style></style></defs><title>social-fb</title><path id="Facebook" class="fb-cls-1" d="M3.4,6.6v4.7H0v5.8H3.4V34.2h7.1V17.1h4.8s.4-2.8.7-5.8H10.6V7.4A1.7,1.7,0,0,1,12.1,6H16V0H10.8C3.3,0,3.4,5.8,3.4,6.6Z"/></svg>
					
				</a>
				
				
				<a class="social" href="https://www.linkedin.com/pub/paul-schlemmer/7/901/589" target="_blank">
					
					<svg id="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.2 30.7"><defs><style></style></defs><title>social-in</title><path id="LinkedIn" class="linkedin-cls-1" d="M32.2,18.8V30.7H25.3V19.6c0-2.8-1-4.7-3.5-4.7a3.76,3.76,0,0,0-3.5,2.5,4.42,4.42,0,0,0-.2,1.7V30.7H11.2s.1-18.8,0-20.7H18v3h0v-.1a6.89,6.89,0,0,1,6.2-3.4C28.8,9.5,32.2,12.5,32.2,18.8ZM3.9,0C1.5,0,0,1.5,0,3.6A3.58,3.58,0,0,0,3.8,7.2h0A3.61,3.61,0,0,0,7.7,3.6,3.47,3.47,0,0,0,3.9,0ZM.4,30.7H7.3V10H.4Z"/></svg>
					
				</a>
				
				
				<a class="social" href="https://twitter.com/pschlemmer" target="_blank">
					
					
					<svg id="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.3 27.1"><defs><style></style></defs><title>social-t</title><path class="twitter-cls-1" d="M32.3,3.2a16.57,16.57,0,0,1-3.8,1.1A6.57,6.57,0,0,0,31.4.5a12.81,12.81,0,0,1-4.2,1.7A6.23,6.23,0,0,0,22.4,0a6.7,6.7,0,0,0-6.6,6.8A8.75,8.75,0,0,0,16,8.4,18.92,18.92,0,0,1,2.3,1.3a6.65,6.65,0,0,0-.9,3.4,7,7,0,0,0,2.9,5.7,5.29,5.29,0,0,1-3-.9v.1a6.79,6.79,0,0,0,5.3,6.7,5,5,0,0,1-1.7.2,4.87,4.87,0,0,1-1.2-.1,6.54,6.54,0,0,0,6.2,4.7A13.21,13.21,0,0,1,1.7,24,9.58,9.58,0,0,1,0,24a18.6,18.6,0,0,0,10.2,3.1C22.4,27.1,29,16.6,29,7.6V6.7A12.28,12.28,0,0,0,32.3,3.2Z"/></svg>
					
					
				</a>
				
			
			</div><!-- loc_wrapper -->
			
			
		</div><!-- address_wrapper -->
		
		<div class="address_image">
			
			<?php if(!is_front_page()) { ?>
				
				<?php echo file_get_contents("wp-content/themes/schlemmer/images/new_brooklyn.svg"); ?>
			
				<div class="form_wrapper">
					
					<span class="footer_form_title">Let's Get Started</span>
					
					<span class="footer_required">Form Field Required <span class="ast">*</span></span>
			
					<?php gravity_form(1, false, false, false, '', true, 124); ?>
			
				</div><!-- form_wrapper -->
				
			<?php } ?>
			
		</div><!-- address_image -->
		
	</section><!-- location_section -->
	
	
	<div class="copyright">
		
		<ul>
			
			<li>Copyright &copy; 2017 - The schlemmer firm llc</li>
			<li><a href="">disclaimer</a></li>
			<li><a href="">sitemap</a></li> 
			<li><a href="">google+</a></li>
			
		</ul>
		
		<a class="ilawyer_marketing" href="//ilawyermarketing.com" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/></a>
		
	</div><!-- copyright -->
	
	
</footer>



<?php wp_footer();?>


</body>
</html>
