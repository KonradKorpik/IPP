<footer id="footer" class="" style="padding: 4rem 0; background-color: #333333;">
	<div class="container" style="">
		<div class="row" style="">
			<div class="col-12" style="padding: 0 0 2rem 0;">
				<a class="" style="" href="<?php echo get_site_url(); ?>/wip">
					<img class="" style="height: 46px;" src="http://localhost/wordpress/wp-content/uploads/2024/03/logo.png" alt="logo">
				</a>
			</div>
			<div class="col-12 col-md-6" style="">
				<div class="row" style="">
					<div class="col-12 col-sm-6 col-md-12 col-lg-5" style="">
						<p class="" style="margin: 0; color: #8f8e8e;">
							Numer telefonu:
						</p>
						<a class="" style="text-decoration: none;" href="tel:+48660677804">
							<p class="" style="margin: 0; color: #ffffff;">
								+48 668 677 804
							</p>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-12 col-lg-7" style="">
						<p class="" style="margin: 0; color: #8f8e8e;">
							E-mail:
						</p>
						<a class="" style="text-decoration: none;" href="mailto:kkorpik2002@gmail.com">
							<p class="" style="margin: 0; color: #ffffff;">
								kkorpik2002@gmail.com
							</p>
						</a>
					</div>
				</div>
				<div class="row" style="padding: 2rem 0 0 0;">
					<div class="col-12 col-sm-6 col-md-12 col-lg-5 md-padding" style="">
						<a class="" style="display: flex; text-decoration: none;" href="http://maps.google.com/?q=Podwisłocze 12, 35-309 Rzeszów">
							<img class="" style="width: 3rem; height: 3rem; padding: 0 1rem 0 0;" src="http://localhost/wordpress/wp-content/uploads/2024/03/location.png" alt="location">
							<p class="" style="margin: 0; color: #ffffff;">
								<span class="" style="display: inherit; color: #8f8e8e;">
									Rzeszów
								</span>
								Podwisłocze 12
								<br>
								35-309, Rzeszów
							</p>
						</a>
					</div>
					<div class="col-12 col-sm-6 col-md-12 col-lg-7 sm-padding" style="">
						<a class="" style="display: flex; text-decoration: none;" href="http://maps.google.com/?q=Legnicka 60C, 54-204 Wrocław">
							<img class="" style="width: 3rem; height: 3rem; padding: 0 1rem 0 0;" src="http://localhost/wordpress/wp-content/uploads/2024/03/location.png" alt="location">
							<p class="" style="margin: 0; color: #ffffff;">
								<span class="" style="display: inherit; color: #8f8e8e;">
									Wrocław
								</span>
								Legnicka 60C
								<br>
								54-204, Wrocław
							</p>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6" style="">
				<div class="row" style="justify-content: flex-end;">
					<div class="col-12 col-sm-4 col-lg-3 col-xl-3" style="">
						<p class="" style="margin: 0; color: #8f8e8e;">
							Samochody:
						</p>
						<ul class="" style="margin: 0; padding: 0; list-style-type: none;">
							<a class="" style="text-decoration: none;" href="<?php echo get_site_url(); ?>/mclaren/">
								<li class="" style="color: #ffffff;">
									McLaren
								</li>
							</a>
							<a class="" style="text-decoration: none;" href="<?php echo get_site_url(); ?>/porshe/">
								<li class="" style="color: #ffffff;">
									Porshe
								</li>
							</a>
							<a class="" style="text-decoration: none;" href="<?php echo get_site_url(); ?>/bmw/">
								<li class="" style="color: #ffffff;">
									BMW
								</li>
							</a>
						</ul>
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-xl-3" style="">
						<p class="" style="margin: 0; color: #8f8e8e;">
							Inne:
						</p>
						<ul class="" style="margin: 0; padding: 0; list-style-type: none;">
							<a class="" style="text-decoration: none;" href="#">
								<li class="" style="color: #ffffff;">
									Kariera
								</li>
							</a>
							<a class="" style="text-decoration: none;" href="#">
								<li class="" style="color: #ffffff;">
									Kontakt
								</li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer id="footer2" class="" style="padding: 1rem 0; background-color: #000000;">
	<div class="container" style="">
		<div class="row" style="">
			<div class="col-10 col-md-6" style="display: flex; align-items: center;">
				<p class="" style="margin: 0;">
					<span class="" style="margin: 0 2rem 0 0; color: #8f8e8e;">						
						© 2024 WIP
					</span>
					<a class="" style="color: #ffffff; text-decoration: none; white-space: nowrap;" href="#">
						Polityka prywatności
					</a>
				</p>
			</div>
			<div class="col-2 col-md-6" style="display: flex; flex-direction: column; justify-content: center;">
				<ul class="" style="margin: 0; display: flex; justify-content: flex-end; list-style-type: none;">
					<li class="" style="">
						<a class="" style="" href="#">
							<img class="" style="" src="http://localhost/wordpress/wp-content/uploads/2024/03/facebook.png" alt="facebook">
						</a>
					</li>
					<li class="" style="margin: 0 0 0 1rem;">
						<a class="" style="" href="#">
							<img class="" style="" src="http://localhost/wordpress/wp-content/uploads/2024/03/linkedin.png" alt="linkedin">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("DOMContentLoaded", function() {
    	var okButton = document.getElementById("cn-accept-cookie");
		
    	if (okButton) {
        	okButton.addEventListener("click", function(event) {
            	event.preventDefault();
            	
            	var cookieNotice = document.getElementById("cookie-notice");
				
            	if (cookieNotice) {
                	cookieNotice.style.display = "none";
            	}
        	});
    	}
	});
</script>
