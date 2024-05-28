<?php // Template name: Career ?>
<?php get_header(); ?>
<header id="header" class="" style="background-color: #c5c5c5;">
	<div class="container" style="padding: 2rem; background-color: #333333; color: #ffffff;">
		<div class="contact-page-breadcrumb" style="margin: 0 0 1rem 0;">
			<?php the_breadcrumb(); ?>
		</div>
		<h1 class="" style="margin: 0; line-height: 2rem;">
			<?php the_title(); ?>
		</h1>
		<img class="" style="width: 120px;" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
	</div>
</header>
<main id="main" class="" style="">
	<?php if( have_rows('career') ): ?>
		<?php while( have_rows('career') ) : the_row(); ?>
			<?php $image = get_sub_field('image'); ?>
			<section id="career" class="" style="margin: 2rem 0 0 0;">
				<div class="container" style="">
					<div class="row" style="">
						<div class="col-12 col-xxl-6" style="padding: 0;">
							<img class="career" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
						</div>
						<div class="col-12 col-xxl-6" style="padding: 0; display: flex; flex-direction: column; justify-content: center;">
							<h2 class="" style="text-align: center;">
								<?php the_sub_field('title_1'); ?>
							</h2>
							<p class="" style="margin: 0 0 2rem 0; text-align: center;">
								<?php the_sub_field('description_1'); ?>
							</p>
							<h2 class="" style="text-align: center;">
								<?php the_sub_field('title_2'); ?>
							</h2>
							<p class="" style="text-align: center;">
								<?php the_sub_field('description_2'); ?>
							</p>
						</div>
					</div>
				</div>
			</section>
    	<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('jobs') ): ?>
		<?php while( have_rows('jobs') ) : the_row(); ?>
			<section id="" class="" style="margin: 4rem 0 2rem 0;">
				<div class="container" style="">
					<div class="row" style="">
						<?php if( have_rows('job_1') ): ?>
							<?php while( have_rows('job_1') ) : the_row(); ?>
								<div class="col-12 col-md-6" style="margin: 0 0 2rem 0; display: flex; flex-direction: column; align-items: center;">
									<div class="" style="margin: 0 0 .5rem 0; display: flex; flex-direction: column; align-items: center;">
										<h2 class="" style="margin: 0 0 1rem 0;">
									 		<?php the_sub_field('title'); ?>
										</h2>
										<img class="" style="width: 120px;" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
									</div>
									<?php the_sub_field('description'); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('job_2') ): ?>
							<?php while( have_rows('job_2') ) : the_row(); ?>
								<div class="col-12 col-md-6 border-l" style="display: flex; flex-direction: column; align-items: center;">
									<div class="" style="margin: 0 0 .5rem 0; display: flex; flex-direction: column; align-items: center;">
										<h2 class="" style="margin: 0 0 1rem 0;">
									 		<?php the_sub_field('title'); ?>
										</h2>
										<img class="" style="width: 120px;" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
									</div>
									<?php the_sub_field('description'); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
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
<?php get_footer(); ?>
