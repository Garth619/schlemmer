<footer id="footer_trigger">
	
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
			
					<?php gravity_form(2, false, false, false, '', true, 524); ?>
			
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
		
		<a class="ilawyer_marketing" href="//ilawyermarketing.com" target="_blank">
			
			<svg id="ilawyer" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.3 17"><defs><style></style></defs><title>ilawyer-logo</title><path class="ilawyer-cls-1" d="M49.1,4.6v7.7a1,1,0,0,0,1.1,1.1h.9V3.7h-.9A.87.87,0,0,0,49.1,4.6Z"/><path class="ilawyer-cls-1" d="M49.1,1.1v1H50A1,1,0,0,0,51.1,1V0h-.9C49.5.1,49.1.5,49.1,1.1Z"/><path class="ilawyer-cls-1" d="M55.5,10.2V.1h-.9a1,1,0,0,0-1.1,1.1v9.1a3.56,3.56,0,0,0,.5,1.9,2.37,2.37,0,0,0,1.3,1.1,1.18,1.18,0,0,0,1,.1.76.76,0,0,0,.6-.8v-.9a1.69,1.69,0,0,1-1-.3A2.14,2.14,0,0,1,55.5,10.2Z"/><path class="ilawyer-cls-1" d="M65.8,4.4a4.9,4.9,0,0,0-3.2-1.2,4.54,4.54,0,0,0-3.2,1.2A3.3,3.3,0,0,0,58,7.3V9.5a3.7,3.7,0,0,0,1.4,2.9,4.54,4.54,0,0,0,3.2,1.2,4.14,4.14,0,0,0,3-1.1c.3.5.6.8,1.1.8h.6v-6A3.65,3.65,0,0,0,65.8,4.4Zm-.3,5.2a1.6,1.6,0,0,1-.8,1.4,3.06,3.06,0,0,1-2,.7,2.88,2.88,0,0,1-2-.7,1.74,1.74,0,0,1-.9-1.4V7.3a1.6,1.6,0,0,1,.8-1.4,3.06,3.06,0,0,1,2-.7,2.88,2.88,0,0,1,2,.7,1.87,1.87,0,0,1,.8,1.4V9.6Z"/><path class="ilawyer-cls-1" d="M81.3,4.6h0V9.5c0,.8-.2,1.3-.5,1.5A2.21,2.21,0,0,1,78,11a2,2,0,0,1-.6-1.5v-6h-.9a1,1,0,0,0-1.1,1.1V9.5a1.75,1.75,0,0,1-.6,1.5,1.87,1.87,0,0,1-1.4.5A1.67,1.67,0,0,1,72,11a3,3,0,0,1-.5-1.5v-6h-.9a1,1,0,0,0-1.1,1.1V9.5a3.84,3.84,0,0,0,1.1,2.9,3.5,3.5,0,0,0,2.9,1.1,3.35,3.35,0,0,0,2.9-1.3,3.47,3.47,0,0,0,2.9,1.3,4,4,0,0,0,2.9-1.1A4,4,0,0,0,83,9.8v-6h-.9C81.6,3.6,81.3,4,81.3,4.6Z"/><path class="ilawyer-cls-1" d="M91.6,4.3,89,11.6h0l-2.9-8H84.8a.6.6,0,0,0-.6.3.64.64,0,0,0,0,.6l2.9,8a1.76,1.76,0,0,0,1.2,1l-.4,1a.82.82,0,0,1-.5.5,1.45,1.45,0,0,1-.7.2V16a.7.7,0,0,0,.6.8,1.73,1.73,0,0,0,1-.1,2.17,2.17,0,0,0,1.1-1,4.88,4.88,0,0,0,.3-.7c.1-.3.2-.5.3-.8L93.8,3.5H92.4A2.94,2.94,0,0,0,91.6,4.3Z"/><path class="ilawyer-cls-1" d="M101.6,10.9c-.1.1-.2.2-.3.2a3,3,0,0,1-1,.4,3.44,3.44,0,0,1-1.4.1,3.26,3.26,0,0,1-1.4-.4,1.27,1.27,0,0,1-.7-1.1V9.4c.1.1.2.1.3.2h2.7a5.07,5.07,0,0,0,1.3-.2,2.26,2.26,0,0,0,1.3-.6,4.3,4.3,0,0,0,.9-1,2.54,2.54,0,0,0,.3-1.4,2.27,2.27,0,0,0-.6-1.6,4.73,4.73,0,0,0-1.3-1.1A4.27,4.27,0,0,0,99.1,3a5.09,5.09,0,0,0-2.2.5,4.77,4.77,0,0,0-1.6,1.6A3.93,3.93,0,0,0,95,6.5V9.7a2.73,2.73,0,0,0,.4,1.6,2.85,2.85,0,0,0,1.1,1.3,3.51,3.51,0,0,0,1.4.6,6.75,6.75,0,0,0,1.4.2,5.41,5.41,0,0,0,1.9-.3,3.16,3.16,0,0,0,1.6-1,4.44,4.44,0,0,0,.8-1.1l-1-.5A1.62,1.62,0,0,0,101.6,10.9ZM97,6.7a1.39,1.39,0,0,1,.5-1,3.13,3.13,0,0,1,1-.5,6.6,6.6,0,0,1,1.4-.1,2.92,2.92,0,0,1,1.4.5,1.09,1.09,0,0,1,.4.9c-.3.4-.4.7-.8.8a1.64,1.64,0,0,1-1,.2H96.8l.2-.8Z"/><path class="ilawyer-cls-1" d="M106.6,4.3a3.09,3.09,0,0,0-1.2,2.6h0v5.3a1,1,0,0,0,1.1,1.1h.9V7a1.66,1.66,0,0,1,.5-1.2,1.69,1.69,0,0,1,1-.3h.3c.7,0,1-.4,1-1.1V3.6H109A3.81,3.81,0,0,0,106.6,4.3Z"/><path class="ilawyer-cls-1" d="M121.1,3.3a3.74,3.74,0,0,0-2.6.9l-.4.4-.4-.4a3.66,3.66,0,0,0-2.5-.9,3.56,3.56,0,0,0-2.9,1.2,4,4,0,0,0-1.1,2.9v4.9a1,1,0,0,0,1.1,1.1h.9v-6a2.35,2.35,0,0,1,.5-1.6,2,2,0,0,1,1.4-.5,1.68,1.68,0,0,1,1.4.6,2.2,2.2,0,0,1,.6,1.5v4.9a1,1,0,0,0,1.1,1.1h.9v-6a1.75,1.75,0,0,1,.6-1.5,2.06,2.06,0,0,1,2.8-.1,2.54,2.54,0,0,1,.5,1.6v4.9a1,1,0,0,0,1.1,1.1h.9v-6a3.84,3.84,0,0,0-1.1-2.9A3.23,3.23,0,0,0,121.1,3.3Z"/><path class="ilawyer-cls-1" d="M134.8,4.4a4.9,4.9,0,0,0-3.2-1.2,4.54,4.54,0,0,0-3.2,1.2A3.3,3.3,0,0,0,127,7.3V9.5a3.7,3.7,0,0,0,1.4,2.9,4.54,4.54,0,0,0,3.2,1.2,4.14,4.14,0,0,0,3-1.1c.3.5.6.8,1.1.8h.6v-6A4,4,0,0,0,134.8,4.4Zm-.5,5.2a1.6,1.6,0,0,1-.8,1.4,3.06,3.06,0,0,1-2,.7,2.88,2.88,0,0,1-2-.7,1.87,1.87,0,0,1-.8-1.4V7.3a1.6,1.6,0,0,1,.8-1.4,3.06,3.06,0,0,1,2-.7,2.88,2.88,0,0,1,2,.7,1.87,1.87,0,0,1,.8,1.4Z"/><path class="ilawyer-cls-1" d="M139.5,4.3a3.09,3.09,0,0,0-1.2,2.6v5.3a1,1,0,0,0,1.1,1.1h.9V7a1.66,1.66,0,0,1,.5-1.2,1.69,1.69,0,0,1,1-.3h.3c.7,0,1-.4,1-1.1V3.6h-1.3A4.18,4.18,0,0,0,139.5,4.3Z"/><path class="ilawyer-cls-1" d="M149.9,7.9a1.54,1.54,0,0,0,.4-.6l2.3-3.8H151a1.31,1.31,0,0,0-1.2.7l-1.6,3c-.2.4-.6.4-1,.4h-.7V.1h-.9a1,1,0,0,0-1.1,1.1h0V12.3a1,1,0,0,0,1.1,1.1h.9V9.7h2.1a1.17,1.17,0,0,1,1.1.8l1.1,2.4a1.21,1.21,0,0,0,1.2.6h1.3l-1.6-3.8C151.1,8.8,150.6,8.1,149.9,7.9Z"/><path class="ilawyer-cls-1" d="M160.8,10.9c-.1.1-.2.2-.3.2a3,3,0,0,1-1,.4,3.44,3.44,0,0,1-1.4.1,3.26,3.26,0,0,1-1.4-.4,1.27,1.27,0,0,1-.7-1.1V9.4c.1.1.2.1.3.2H159a5.07,5.07,0,0,0,1.3-.2,2.28,2.28,0,0,0,1.2-.6,4.3,4.3,0,0,0,.9-1,2.54,2.54,0,0,0,.3-1.4,2.27,2.27,0,0,0-.6-1.6,4.73,4.73,0,0,0-1.3-1.1,5.5,5.5,0,0,0-2.6-.5,4.77,4.77,0,0,0-2.2.5,5.36,5.36,0,0,0-1.5,1.6,3.93,3.93,0,0,0-.3,1.4V9.9a2.73,2.73,0,0,0,.4,1.6,2.85,2.85,0,0,0,1.1,1.3,3.51,3.51,0,0,0,1.4.6,6.8,6.8,0,0,0,1.5.2,5.41,5.41,0,0,0,1.9-.3,3.16,3.16,0,0,0,1.6-1,4.44,4.44,0,0,0,.8-1.1l-1-.5A.85.85,0,0,0,160.8,10.9Zm-4.6-4.2a1.39,1.39,0,0,1,.5-1,3.13,3.13,0,0,1,1-.5,6.6,6.6,0,0,1,1.4-.1,2.92,2.92,0,0,1,1.4.5,1.09,1.09,0,0,1,.4.9c-.1.4-.2.7-.6.8a1.64,1.64,0,0,1-1,.2h-3.2l.1-.8Z"/><path class="ilawyer-cls-1" d="M166.6.1h-.8a1,1,0,0,0-1.1,1.1v9.1a3.56,3.56,0,0,0,.5,1.9,2.37,2.37,0,0,0,1.3,1.1,1.21,1.21,0,0,0,1,.1.76.76,0,0,0,.6-.8v-.9a1.22,1.22,0,0,1-.9-.3,1.66,1.66,0,0,1-.5-1.2V5.6H168a1,1,0,0,0,1.1-1.1V3.7h-2.3V.1Z"/><path class="ilawyer-cls-1" d="M170.5,4.6v7.7a1,1,0,0,0,1.1,1.1h.9V3.7h-.9A.87.87,0,0,0,170.5,4.6Z"/><path class="ilawyer-cls-1" d="M170.5,1.1v1h.9A1,1,0,0,0,172.5,1V0h-.9C170.9.1,170.5.5,170.5,1.1Z"/><path class="ilawyer-cls-1" d="M179.3,3.3a4.89,4.89,0,0,0-3.1,1.1,3.24,3.24,0,0,0-1.4,2.8v5.1a1,1,0,0,0,1.1,1.1h.9V7.1a1.75,1.75,0,0,1,.7-1.4,3.12,3.12,0,0,1,1.8-.7,2.14,2.14,0,0,1,1.8.7,1.62,1.62,0,0,1,.7,1.4v5.1a1,1,0,0,0,1.1,1.1h.9V7.1a3.65,3.65,0,0,0-1.4-2.8A6,6,0,0,0,179.3,3.3Z"/><path class="ilawyer-cls-1" d="M193.5,4.4a4.9,4.9,0,0,0-3.2-1.2,4.54,4.54,0,0,0-3.2,1.2,3.3,3.3,0,0,0-1.4,2.9V9.5a3.7,3.7,0,0,0,1.4,2.9,4.54,4.54,0,0,0,3.2,1.2,4.78,4.78,0,0,0,2.7-.8v.4a1.54,1.54,0,0,1-1.4,1.6,8.75,8.75,0,0,1-1.6.2,3.23,3.23,0,0,1-1.6-.3l-.2.8a1.07,1.07,0,0,0,0,.8,1.93,1.93,0,0,0,.9.5,7.72,7.72,0,0,0,1.5.2,7,7,0,0,0,1.6-.2,4.15,4.15,0,0,0,2.4-1.9,3.17,3.17,0,0,0,.4-1.6v-6A5.42,5.42,0,0,0,193.5,4.4ZM193,9.6a1.6,1.6,0,0,1-.8,1.4,3.06,3.06,0,0,1-2,.7,2.88,2.88,0,0,1-2-.7,1.87,1.87,0,0,1-.8-1.4V7.3a1.6,1.6,0,0,1,.8-1.4,3.06,3.06,0,0,1,2-.7,2.88,2.88,0,0,1,2,.7,1.87,1.87,0,0,1,.8,1.4Z"/><path class="ilawyer-cls-1" d="M197.1,12.2v1.2h.9a1,1,0,0,0,1.1-1.1V11h-.9C197.5,11.1,197.1,11.4,197.1,12.2Z"/><path class="ilawyer-cls-1" d="M203.8,5.9a3.12,3.12,0,0,1,1.8-.7,2.14,2.14,0,0,1,1.8.7l.3.3a1,1,0,0,0,1.3.2l.9-.5a2.89,2.89,0,0,0-1.2-1.5,4.38,4.38,0,0,0-3.1-1.1,4.89,4.89,0,0,0-3.1,1.1,3.24,3.24,0,0,0-1.4,2.8V9.8a3.65,3.65,0,0,0,1.4,2.8,4.92,4.92,0,0,0,6.2,0,7.89,7.89,0,0,0,1.2-1.5l-.9-.5a.93.93,0,0,0-1.3.2l-.3.3a3,3,0,0,1-1.8.6,2.44,2.44,0,0,1-1.8-.6,1.62,1.62,0,0,1-.7-1.4V7A2.82,2.82,0,0,1,203.8,5.9Z"/><path class="ilawyer-cls-1" d="M219.3,4.4a4.9,4.9,0,0,0-3.2-1.2,4.54,4.54,0,0,0-3.2,1.2,3.3,3.3,0,0,0-1.4,2.9V9.5a3.7,3.7,0,0,0,1.4,2.9,4.87,4.87,0,0,0,6.4,0,3.3,3.3,0,0,0,1.4-2.9V7.3A4.69,4.69,0,0,0,219.3,4.4Zm-.5,5.2A1.6,1.6,0,0,1,218,11a3.06,3.06,0,0,1-2,.7,2.88,2.88,0,0,1-2-.7,1.87,1.87,0,0,1-.8-1.4V7.3a1.6,1.6,0,0,1,.8-1.4,3.06,3.06,0,0,1,2-.7,2.88,2.88,0,0,1,2,.7,1.87,1.87,0,0,1,.8,1.4Z"/><path class="ilawyer-cls-1" d="M235.3,4.3a3.56,3.56,0,0,0-2.9-1.2,3.74,3.74,0,0,0-2.6.9l-.4.4L229,4a3.66,3.66,0,0,0-2.5-.9,3.56,3.56,0,0,0-2.9,1.2,4,4,0,0,0-1.1,2.9v4.9a1,1,0,0,0,1.1,1.1h.9v-6a2.35,2.35,0,0,1,.5-1.6,2,2,0,0,1,1.4-.5,1.68,1.68,0,0,1,1.4.6,2.2,2.2,0,0,1,.6,1.5v4.9a1,1,0,0,0,1.1,1.1h.9v-6a1.75,1.75,0,0,1,.6-1.5,1.68,1.68,0,0,1,1.4-.6,1.81,1.81,0,0,1,1.4.5,2.54,2.54,0,0,1,.5,1.6v4.9a1,1,0,0,0,1.1,1.1h.9v-6A5.6,5.6,0,0,0,235.3,4.3Z"/><path class="ilawyer-cls-1" d="M2.8,7.8c-.6-.4-1-.6-1-1.4s.4-.9,1-.9c1,0,1.1.9,1.1,1.6H5.5c0-1,.1-3.1-2.7-3.1C1,4.2.1,4.9.1,6.7A2.39,2.39,0,0,0,.6,8.1c.7,1,1.8,1.4,2.8,2.1a1.31,1.31,0,0,1,.7,1.2A1,1,0,0,1,3,12.5c-.9,0-1.2-.7-1.1-1.5v-.6H0v.7a2.53,2.53,0,0,0,2.8,2.8,2.68,2.68,0,0,0,2.9-2.7,2.24,2.24,0,0,0-.8-1.9A10.09,10.09,0,0,0,2.8,7.8Z"/><rect class="ilawyer-cls-1" x="7.7" y="4.4" width="1.6" height="9.4"/><polygon class="ilawyer-cls-1" points="11 5.8 13 5.8 13 13.7 14.7 13.7 14.7 5.8 16.8 5.8 16.8 4.4 11 4.4 11 5.8"/><polygon class="ilawyer-cls-1" points="18.2 13.7 23.3 13.7 23.3 12.4 20.1 12.4 20.1 9.5 23 9.5 23 8 20.1 8 20.1 5.8 23.3 5.8 23.3 4.4 18.2 4.4 18.2 13.7"/><path class="ilawyer-cls-1" d="M32.8,8.8h0a1.9,1.9,0,0,0,1.2-2,1.94,1.94,0,0,0-.5-1.6,2.2,2.2,0,0,0-2-.7H28.7v9.4h3.1a2.11,2.11,0,0,0,2.3-1.6,4.87,4.87,0,0,0,.1-1.2C34.1,9.8,33.7,8.9,32.8,8.8Zm-2.4-3h.8c.8,0,1,.4,1,1.1,0,.5,0,.8-.2,1-.3.4-.9.3-1.3.3h-.3Zm1.5,6.5a3.75,3.75,0,0,1-1.1.1h-.4V9.6H31c1.1,0,1.3.4,1.3,1.4C32.4,11.4,32.3,12.1,31.9,12.3Z"/><path class="ilawyer-cls-1" d="M39.4,6.6a10.41,10.41,0,0,0-.6,1.6h0a5.73,5.73,0,0,0-.4-1.4l-1-2.4H35.5l2.4,5.4v4h1.6V9.9L42,4.5H40.1Z"/></svg>
			
			
		</a>
		
	</div><!-- copyright -->
	
	
</footer>



<?php wp_footer();?>


</body>
</html>
