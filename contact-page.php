<?php // Template name: Contact ?>
<?php get_header(); ?>
<?php if( have_rows('header') ): ?>
	<?php while( have_rows('header') ) : the_row(); ?>
		<header id="header" class="" style="background-color: #c5c5c5;">
			<div class="container" style="padding: 2rem; background-color: #333333; color: #ffffff;">
				<div class="contact-page-breadcrumb" style="margin: 0 0 1rem 0;">
					<?php the_breadcrumb(); ?>
				</div>
				<h1 class="" style="margin: 0; line-height: 2rem;">
					<?php the_sub_field('title'); ?>
				</h1>
				<img class="" style="width: 120px;" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
			</div>
		</header>
    <?php endwhile; ?>
<?php endif; ?>
<main id="main" class="" style="">
	<?php if( have_rows('residences') ): ?>
		<?php while( have_rows('residences') ) : the_row(); ?>
			<section id="residences" class="" style="margin: 8rem 0;">
				<div class="container" style="">
					<div class="row" style="">
						<?php if( have_rows('residence_1') ): ?>
							<?php while( have_rows('residence_1') ) : the_row(); ?>
								<div class="col-12 col-md-6 residence-1 border-r" style="display: flex; flex-direction: column; align-items: center;">
									<p class="" style="margin: 0 0 1rem 0; line-height: 1.25rem; font-size: 1.25rem; font-weight: 600;">
										<?php the_sub_field('title'); ?>
									</p>
									<div class="" style="width: 120px; margin: 0 0 1rem 0; border-bottom: solid 1px #c5c5c5;"></div>
									<div class="" style="text-align: center;">
										<?php the_sub_field('address'); ?>
									</div>
								</div>
    						<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('residence_2') ): ?>
							<?php while( have_rows('residence_2') ) : the_row(); ?>
								<div class="col-12 col-md-6 residence-2 border-l" style="display: flex; flex-direction: column; align-items: center;">
									<p class="" style="margin: 0 0 1rem 0; line-height: 1.25rem; font-size: 1.25rem; font-weight: 600;">
										<?php the_sub_field('title'); ?>
									</p>
									<div class="" style="width: 120px; margin: 0 0 1rem 0; border-bottom: solid 1px #c5c5c5;"></div>
									<div class="" style="text-align: center;">
										<?php the_sub_field('address'); ?>
									</div>
								</div>
    						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
    	<?php endwhile; ?>
	<?php endif; ?>
	<section id="map" class="" style="margin: 0 0 8rem 0;"></section>
	<?php if( have_rows('form') ): ?>
		<?php while( have_rows('form') ) : the_row(); ?>
			<section id="form" class="contact-form" style="position: relative; top: -12rem;">
				<div class="container" style="">
					<div class="" style="padding: 2rem 2rem 1rem 2rem; background-color: #f5f5f5;">
						<h2 class="" style="margin: 0 0 2rem 0;">
							<?php the_sub_field('title'); ?>
						</h2>
						<?php echo do_shortcode(the_sub_field('choose_form')); ?>
					</div>
				</div>
			</section>
    	<?php endwhile; ?>
	<?php endif; ?>
</main>
<script>
	if (window.innerWidth >= 1201) {
		document.getElementById("header").style.marginTop = document.getElementById("desktop-navigation").offsetHeight + "px";
	}
	else {
		document.getElementById("header").style.marginTop = document.getElementById("mobile-navigation").offsetHeight + "px";
	}
</script>
<script>
	document.getElementById("map").style.height = "calc(" + document.getElementById("residences").offsetHeight + "px + 16rem)";
</script>
<script>
	function initMap() {
		let location = {lat: 50.0225833111041, lng: 22.00549400058527};
		let map = new google.maps.Map(document.getElementById("map"), {zoom: 14, center: location});
		let marker = new google.maps.Marker({position: location, map: map});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMcJmsnNmp-UDtDyL6P1T5QB1QzyRWgaI&callback=initMap"></script>
<?php get_footer(); ?>
