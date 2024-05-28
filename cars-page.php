<?php // Template name: Cars ?>
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
	<?php if( have_rows('box_3') ): ?>
		<?php while( have_rows('box_3') ) : the_row(); ?>
			<section class="" style="margin: 4rem 0 0 0;">
				<div class="container" style="">
					<div class="" style="height: fit-content; display: flex; flex-direction: column; justify-content: center;">
						<div class="" style="display: flex; flex-direction: column; align-items: center;">
							<?php the_sub_field('title'); ?>
							<div class="" style="width: 100px; height: 1px; background-color: #11a19b;"></div>
						</div>
						<div class="row" style="margin: 1rem 0 0 0;">
							<?php if( have_rows('box-1') ): ?>
								<?php while( have_rows('box-1') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<?php $link = get_sub_field('link'); ?>
									<div class="col-12 col-lg-4" style="padding: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="width: 200px; height: 200px; margin: 0 0 2rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<h4 class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1.25rem; font-weight: 600;">
											<?php the_sub_field('title'); ?>
										</h4>
										<p class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1rem;">
											<?php the_sub_field('description'); ?>
										</p>
										<a class="box-link" style="width: 250px; padding: 1rem 2rem; border-radius: 10px; color: #121212; line-height: 1rem; font-size: 1rem; font-weight: 600; text-decoration: none; transition: .75s;" href="<?php echo esc_url( $link['url'] ); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-2') ): ?>
								<?php while( have_rows('box-2') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<?php $link = get_sub_field('link'); ?>
									<div class="col-12 col-lg-4 border-x" style="padding: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="width: 200px; height: 200px; margin: 0 0 2rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<h4 class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1.25rem; font-weight: 600;">
											<?php the_sub_field('title'); ?>
										</h4>
										<p class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1rem;">
											<?php the_sub_field('description'); ?>
										</p>
										<a class="box-link" style="width: 250px; padding: 1rem 2rem; border-radius: 10px; color: #121212; line-height: 1rem; font-size: 1rem; font-weight: 600; text-decoration: none; transition: .75s;" href="<?php echo esc_url( $link['url'] ); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-3') ): ?>
								<?php while( have_rows('box-3') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<?php $link = get_sub_field('link'); ?>
									<div class="col-12 col-lg-4" style="padding: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="width: 200px; height: 200px; margin: 0 0 2rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<h4 class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1.25rem; font-weight: 600;">
											<?php the_sub_field('title'); ?>
										</h4>
										<p class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.25rem; font-size: 1rem;">
											<?php the_sub_field('description'); ?>
										</p>
										<a class="box-link" style="width: 250px; padding: 1rem 2rem; border-radius: 10px; color: #121212; line-height: 1rem; font-size: 1rem; font-weight: 600; text-decoration: none; transition: .75s;" href="<?php echo esc_url( $link['url'] ); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('image-content_1') ): ?>
		<?php while( have_rows('image-content_1') ) : the_row(); ?>
			<?php $image = get_sub_field('image'); ?>
			<section class="ImageContentOS" style="">
				<div class="container" style="">
					<div class="row" style="">
						<div id="ImageContent" class="col-12 col-md-6 col-xl-4 ImageContent" style="background-image: url('<?=$image['url']?>');"></div>
						<div id="ContentImage" class="ContentImage" style="">
							<div id="ContentImageChild" class="col-12 col-xl-10 ContentImageChild" style="">
								<h2 class="" style="margin: 0 0 1rem 0; color: #121212;">
										<?php the_sub_field('title'); ?>
								</h2>
								<p class="" style="margin: 0 0 1rem 0; color: #121212;">
									<?php the_sub_field('description'); ?>
								</p>
								<div class="col-12" style="display: flex; justify-content: center;">
									<div class="col-12 col-md-6 ImageContentImage" style="background-image: url('<?=$image['url']?>');"></div>
								</div>
								<div class="row" style="padding: 2rem 0 0 0; display: flex; justify-content: center;">
									<?php if( have_rows('box_1') ): ?>
										<?php while( have_rows('box_1') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-11" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_2') ): ?>
										<?php while( have_rows('box_2') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-21" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_3') ): ?>
										<?php while( have_rows('box_3') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-31" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
		<?php if( have_rows('content-image_1') ): ?>
		<?php while( have_rows('content-image_1') ) : the_row(); ?>
			<?php $image = get_sub_field('image'); ?>
			<section class="ImageContentOS" style="">
				<div class="container" style="">
					<div class="row" style="position: relative;">
						<div id="ContentImage" class="col-12 col-md-6 col-xl-4 ImageContent" style="right: 0; background-image: url('<?=$image['url']?>');"></div>
						<div id="ContentImage" class="ContentImage" style="justify-content: flex-start;">
							<div id="ImageContentChild" class="col-12 col-xl-10 ContentImageChild" style="">
								<h2 class="" style="margin: 0 0 1rem 0; color: #121212;">
										<?php the_sub_field('title'); ?>
								</h2>
								<p class="" style="margin: 0 0 1rem 0; color: #121212;">
									<?php the_sub_field('description'); ?>
								</p>
								<div class="col-12" style="display: flex; justify-content: center;">
									<div class="col-12 col-md-6 ImageContentImage" style="background-image: url('<?=$image['url']?>');"></div>
								</div>
								<div class="row" style="padding: 2rem 0 0 0; display: flex; justify-content: center;">
									<?php if( have_rows('box_1') ): ?>
										<?php while( have_rows('box_1') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-11" class="col-12 col-xl-4 order-3 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_2') ): ?>
										<?php while( have_rows('box_2') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-21" class="col-12 col-xl-4 order-2 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_3') ): ?>
										<?php while( have_rows('box_3') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-31" class="col-12 col-xl-4 order-1 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('image-content_2') ): ?>
		<?php while( have_rows('image-content_2') ) : the_row(); ?>
			<?php $image = get_sub_field('image'); ?>
			<section class="ImageContentOS" style="">
				<div class="container" style="">
					<div class="row" style="">
						<div id="ImageContent" class="col-12 col-md-6 col-xl-4 ImageContent" style="background-image: url('<?=$image['url']?>');"></div>
						<div id="ContentImage" class="ContentImage" style="">
							<div id="ContentImageChild" class="col-12 col-xl-10 ContentImageChild" style="">
								<h2 class="" style="margin: 0 0 1rem 0; color: #121212;">
										<?php the_sub_field('title'); ?>
								</h2>
								<p class="" style="margin: 0 0 1rem 0; color: #121212;">
									<?php the_sub_field('description'); ?>
								</p>
								<div class="col-12" style="display: flex; justify-content: center;">
									<div class="col-12 col-md-6 ImageContentImage" style="background-image: url('<?=$image['url']?>');"></div>
								</div>
								<div class="row" style="padding: 2rem 0 0 0; display: flex; justify-content: center;">
									<?php if( have_rows('box_1') ): ?>
										<?php while( have_rows('box_1') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-11" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_2') ): ?>
										<?php while( have_rows('box_2') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-21" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php if( have_rows('box_3') ): ?>
										<?php while( have_rows('box_3') ) : the_row(); ?>
											<?php $image = get_sub_field('image'); ?>
											<div id="rectangle-31" class="col-12 col-xl-4 box" style="margin: 0 0 4rem 0; padding: 0 1rem 2rem 1rem; display: flex; flex-direction: column; align-items: center; background-color: #ffffff;">
												<img class="icon" style="" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
												<h4 class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('title'); ?>
												</h4>
												<div class="" style="width: 150px; height: 1px; margin: 0 0 1rem 0; border-bottom: solid 1px #121212;"></div>
												<p class="" style="margin: 0 0 1rem 0; text-align: center;">
													<?php the_sub_field('description'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
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
    document.querySelectorAll("[id^='ContentImageChild']").forEach(function(element) {
        var contentId = element.id.split("ContentImageChild")[1];
        var imageContentId = "ImageContent" + contentId;
		
        element.style.padding = "2rem 2rem 2rem calc(" + document.getElementById(imageContentId).offsetWidth + "px / 2 + 2rem)";
    });
    document.querySelectorAll("[id^='ImageContentChild']").forEach(function(element) {
        var contentId = element.id.split("ImageContentChild")[1];
        var imageContentId = "ImageContent" + contentId;
		
        element.style.padding = "2rem calc(" + document.getElementById(imageContentId).offsetWidth + "px / 2 + 2rem) 2rem 2rem";
    });

    if (window.innerWidth < 1200) {
        document.querySelectorAll("[id^='rectangle-31']").forEach(function(element) {
            element.style.margin = "0";
        });
        
        let rectangles = document.querySelectorAll("div.box");
        let myIcons = document.querySelectorAll("img.icon");

        rectangles.forEach(function(rectangle) {
            rectangle.style.margin = "0";
            rectangle.style.padding = "2rem 1rem";
        });
        myIcons.forEach(function(icon) {
            icon.style.top = "0";
            icon.style.padding = "0 0 1rem 0";
        });
    }

    if (window.innerWidth > 1199) {
        let rectangles = document.querySelectorAll("div.box");
		
        rectangles.forEach(function(rectangle) {
            rectangle.style.margin = "0";
        });
    }
</script>
<?php get_footer(); ?>
