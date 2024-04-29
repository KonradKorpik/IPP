<?php // Template name: WIP ?>
<?php get_header(); ?>
<main id="main" class="" style="padding: 2rem 0;">
	<?php if( have_rows('banner') ): ?>
		<?php while( have_rows('banner') ) : the_row(); ?>
			<?php $image = get_sub_field('image'); ?>
			<div class="container" style="">
				<div class="" style="height: 400px; display: flex; flex-direction: column; justify-content: center; background-image: url(<?php echo $image['url']; ?>); background-size: cover; background-position: center;">
					<div class="" style="width: fit-content; padding: 1rem 2rem 1rem 1rem; display: grid; background-color: #333333; color: #ffffff;">
						<?php the_breadcrumb(); ?>
						<h1 class="" style="margin: 0 0 .5rem 0; line-height: 2rem; font-size: 2rem;">
							<?php the_title(); ?>
						</h1>
						<img class="" style="" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('image-content') ): ?>
		<?php while( have_rows('image-content') ) : the_row(); ?>
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
									<?php if( have_rows('box-1') ): ?>
										<?php while( have_rows('box-1') ) : the_row(); ?>
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
									<?php if( have_rows('box-2') ): ?>
										<?php while( have_rows('box-2') ) : the_row(); ?>
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
									<?php if( have_rows('box-3') ): ?>
										<?php while( have_rows('box-3') ) : the_row(); ?>
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
	<?php if( have_rows('box_5') ): ?>
		<?php while( have_rows('box_5') ) : the_row(); ?>
			<?php $link = get_sub_field('link'); ?>
			<section class="" style="margin: 2rem 0 0 0; background-color: #f5f5f5;">
				<div class="container" style="">
					<div class="" style="padding: 2rem;">
						<div class="" style="margin: 0 0 2rem 0; display: flex; flex-direction: column; align-items: center; text-align: center;">
							<h2 class="" style="margin: 0 0 1rem 0; color: #121212; line-height: 1.5rem; font-size: 1.5rem; font-weight: bold;">
								<?php the_sub_field('title'); ?>
							</h2>
							<div class="" style="width: 150px; height: 1px; background-color: #121212;"></div>
						</div>
						<div class="row" style="margin: 0 0 1rem 0; justify-content: center;">
							<?php if( have_rows('box-1') ): ?>
								<?php while( have_rows('box-1') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<div class="col-12 col-sm-6 col-md-4 col-xl-2" style="margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="margin: 0 0 1rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 700;">
											<?php the_sub_field('title'); ?>
										</p>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-2') ): ?>
								<?php while( have_rows('box-2') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<div class="col-12 col-sm-6 col-md-4 col-xl-2" style="margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="margin: 0 0 1rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 700;">
											<?php the_sub_field('title'); ?>
										</p>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-3') ): ?>
								<?php while( have_rows('box-3') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<div class="col-12 col-sm-6 col-md-4 col-xl-2" style="margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="margin: 0 0 1rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 700;">
											<?php the_sub_field('title'); ?>
										</p>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-4') ): ?>
								<?php while( have_rows('box-4') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<div class="col-12 col-sm-6 col-md-4 col-xl-2" style="margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="margin: 0 0 1rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 700;">
											<?php the_sub_field('title'); ?>
										</p>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
							<?php if( have_rows('box-5') ): ?>
								<?php while( have_rows('box-5') ) : the_row(); ?>
									<?php $image = get_sub_field('image'); ?>
									<div class="col-12 col-sm-6 col-md-4 col-xl-2" style="margin-bottom: 1rem; display: flex; flex-direction: column; align-items: center; text-align: center;">
										<img class="" style="margin: 0 0 1rem 0;" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
										<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 700;">
											<?php the_sub_field('title'); ?>
										</p>
									</div>
								<?php endwhile; ?>
       						<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
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
	<?php if( have_rows('slider-content') ): ?>
		<?php while( have_rows('slider-content') ) : the_row(); ?>
			<?php $link = get_sub_field('link'); ?>
			<section id="slider_content" class="slider-content-desktop" style="margin: 2rem 0 0 0;">
    			<div class="container" style="">
        			<div class="" style="position: relative;">
            			<div id="slider" class="col-6" style="margin: 2rem 0; position: absolute; overflow: hidden;">
                			<div id="slides" style="width: 100%; height: 100%; display: flex; transition: .75s ease-in-out;">
								<?php if( have_rows('slide') ): ?>
									<?php while( have_rows('slide') ) : the_row(); ?>
										<?php $image1 = get_sub_field('image-1'); ?>
										<?php $image2 = get_sub_field('image-2'); ?>
										<?php $image3 = get_sub_field('image-3'); ?>
                    					<div class="slide" style="flex: 0 0 100%; background-image: url('<?=$image1['url']?>'); background-size: cover; background-position: center;"></div>
										<div class="slide" style="flex: 0 0 100%; background-image: url('<?=$image2['url']?>'); background-size: cover; background-position: center;"></div>
										<div class="slide" style="flex: 0 0 100%; background-image: url('<?=$image3['url']?>'); background-size: cover; background-position: center;"></div>
									<?php endwhile; ?>
       							<?php endif; ?>
                			</div>
                			<button onclick="prevSlide()" style="border: none; position: absolute; top: 50%; left: 1rem; background-color: transparent; color: #ffffff; line-height: 2.5rem; font-size: 2.5rem; font-weight: 600; transform: translateY(-50%);"><</button>
                			<button onclick="nextSlide()" style="border: none; position: absolute; top: 50%; right: 1rem; background-color: transparent; color: #ffffff; line-height: 2.5rem; font-size: 2.5rem; font-weight: 600; transform: translateY(-50%);">></button>
            			</div>
            			<div id="sliderContent" class="" style="display: flex; justify-content: flex-end;">
                			<div id="sliderContentChild" class="col-7" style="display: flex; flex-direction: column; justify-content: center; background-color: #f5f5f5;">
                    			<div class="" style="width: calc(100% + 9rem); margin: 0 0 1rem 0; padding: 1rem; position: relative; left: -9rem; display: flex; flex-direction: column; background-color: #333333;">
                        			<h2 class="" style="margin: 0 0 .5rem 0; color: #ffffff;">
                            			<?php the_sub_field('title'); ?>
                        			</h2>
                        			<img class="" style="width: 150px;" src="https://edgecam.pl/wp-content/uploads/2023/08/underline.svg" alt="underline">
                    			</div>
                    			<div class="" style="">
									<?php the_sub_field('description'); ?>
                    			</div>
                    			<a class="box-link" style="width: fit-content; padding: 1rem 3rem; border-radius: 10px; color: #121212; line-height: 1rem; font-size: 1rem; font-weight: 600; text-decoration: none; transition: .75s;" href="<?php echo esc_url( $link['url'] ); ?>">
                        			<?php echo esc_html($link['title']); ?>
                    			</a>
                			</div>
            			</div>
        			</div>
    			</div>
			</section>
			<section id="slider_content_2" class="slider-content-mobile" style="padding: 2rem 0; background-color: #f5f5f5;">
    			<div class="container" style="">
        			<div class="" style="position: relative;">
            			<div id="sliderContentChild2" class="p-mb-0 d-flex flex-column justify-content-center align-items-center text-center">
                			<h3 style="margin: 0;">
                    			<?php the_sub_field('title'); ?>
                			</h3>
                			<div class="d-flex">
                    			<div class="underline" style="margin: 1rem 0"></div>
                			</div>
                			<div class="" style="text-align: left;">
                    			<?php the_sub_field('description'); ?>
                			</div>
                			<a class="box-link" style="width: 250px; padding: 1rem 2rem; border-radius: 10px; color: #121212; line-height: 1.25rem; font-size: 1rem; font-weight: 600; text-decoration: none; transition: .75s;" href="<?php echo esc_url( $link['url'] ); ?>">
                    			<?php echo esc_html($link['title']); ?>
                			</a>
            			</div>
            			<div id="slider2" class="col-12" style="margin: 2rem 0; padding: 2rem 0 0 0; position: absolute; overflow: hidden;">
                			<div id="slides2" style="width: 100%; height: 100%; display: flex; transition: .75s ease-in-out;">
                    			<?php if( have_rows('slide') ): ?>
                        			<?php while( have_rows('slide') ) : the_row(); ?>
                            			<?php $image1 = get_sub_field('image-1'); ?>
										<?php $image2 = get_sub_field('image-2'); ?>
										<?php $image3 = get_sub_field('image-3'); ?>
                            			<div class="slide" style="flex: 0 0 100%; background-image: url('<?php echo $image1['url']; ?>'); background-size: cover; background-position: center;"></div>
										<div class="slide" style="flex: 0 0 100%; background-image: url('<?php echo $image2['url']; ?>'); background-size: cover; background-position: center;"></div>
										<div class="slide" style="flex: 0 0 100%; background-image: url('<?php echo $image3['url']; ?>'); background-size: cover; background-position: center;"></div>
                        			<?php endwhile; ?>
                    			<?php endif; ?>
                			</div>
                			<button onclick="prevSlide2()" style="border: none; position: absolute; top: 50%; left: 1rem; background-color: transparent; color: #ffffff; line-height: 2.5rem; font-size: 2.5rem; font-weight: 600; transform: translateY(-50%);"><</button>
                			<button onclick="nextSlide2()" style="border: none; position: absolute; top: 50%; right: 1rem; background-color: transparent; color: #ffffff; line-height: 2.5rem; font-size: 2.5rem; font-weight: 600; transform: translateY(-50%);">></button>
            			</div>
        			</div>
    			</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('text-faq') ): ?>
		<?php while( have_rows('text-faq') ) : the_row(); ?>
			<section id="text-faq" class="" style="margin: 4rem 0 4rem 0; padding: 0 0 4rem 0;">
    			<div class="container" style="">
					<h2 class="" style="margin: 0 0 2rem 0; line-height: 2rem; font-size: 2rem; font-weight: 700; text-align: center;">
						<?php the_sub_field('title'); ?>
					</h2>
        			<div class="" style="position: relative;">
            			<div id="textContainer" class="" style="display: flex;">
                			<div id="text" class="col-7" style="display: flex; flex-direction: column; justify-content: center; background-color: #f5f5f5;">
                        		<h2 class="" style="margin: 0 0 .5rem 0;">
                            		<?php the_sub_field('subtitle'); ?>
                        		</h2>
                    			<p class="" style="">
									<?php the_sub_field('description'); ?>
                    			</p>
                			</div>
            			</div>
            			<div id="faq" class="col-6" style="margin: 2rem 0; position: absolute; top: 0; right: 0;">
                			<div style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center;">
								<?php if( have_rows('drop_down') ): ?>
            						<?php while( have_rows('drop_down') ) : the_row(); ?>
										<div id="slide-1" class="col-12 hover" style="padding: .5rem 0; border-bottom: solid 1px #d0d0d0;" onclick="toggleDropDown('slide-1')">
											<div id="slide-1-body" class="zakladka-body" style="overflow: hidden; transition: max-height .75s ease;">
												<div id="slide-1-bodyVisible" class="zakladka-visible" style="display: flex; justify-content: space-between; align-items: center;">
													<p class="" style="margin: 0; color: #121212; font-weight: 600;">
														<?php the_sub_field('title-1'); ?>
													</p>
													<p id="slide-1-more" class="zakladka-more" style="width: 36px; height: 36px; margin: 0 1rem; padding: 0 1rem; display: flex; justify-content: center; align-items: center; color: #11a19b; font-weight: 800; cursor: pointer;">
														>
													</p>
												</div>
												<div id="slide-1-bodyHidden" class="zakladka-hidden" style="padding: 1rem 0;">
													<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem;">
														<?php the_sub_field('description-1'); ?>
													</p>
												</div>
											</div>
										</div>
										<div id="slide-2" class="col-12 hover" style="padding: .5rem 0; border-bottom: solid 1px #d0d0d0;" onclick="toggleDropDown('slide-2')">
											<div id="slide-2-body" class="zakladka-body" style="overflow: hidden; transition: max-height .75s ease;">
												<div id="slide-2-bodyVisible" class="zakladka-visible" style="display: flex; justify-content: space-between; align-items: center;">
													<p class="" style="margin: 0; color: #121212; font-weight: 600;">
														<?php the_sub_field('title-2'); ?>
													</p>
													<p id="slide-2-more" class="zakladka-more" style="width: 36px; height: 36px; margin: 0 1rem; padding: 0 1rem; display: flex; justify-content: center; align-items: center; color: #11a19b; font-weight: 800; cursor: pointer;">
														>
													</p>
												</div>
												<div id="slide-2-bodyHidden" class="zakladka-hidden" style="padding: 1rem 0;">
													<p class="" style="margin: 0; color: #121212; line-height: 1.25rem; font-size: 1rem;">
														<?php the_sub_field('description-2'); ?>
													</p>
												</div>
											</div>
										</div>
            						<?php endwhile; ?>
        						<?php endif; ?>
                			</div>
            			</div>
        			</div>
    			</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if( have_rows('form') ): ?>
		<?php while( have_rows('form') ) : the_row(); ?>
			<section id="form" class="form" style="position: relative; top: 4rem;">
				<div class="container" style="">
					<div class="" style="padding: 2rem 2rem 1rem 2rem; background-color: #f5f5f5;">
						<h2 class="" style="margin: 0 0 2rem 0; line-height: 1.5rem; font-size: 1.5rem; font-weight: 600;">
							<?php the_sub_field('title'); ?>
						</h2>
						<?php echo do_shortcode(the_sub_field('choose_form')); ?>
					</div>
				</div>	
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<script>
		document.getElementById("ContentImageChild").style.padding = "2rem 2rem 2rem calc(" + document.getElementById("ImageContent").offsetWidth + "px / 2 + 2rem)";
		
		if (window.innerWidth < 1200) {
			document.getElementById("rectangle-31").style.margin = "0";
			
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
	<script>
		document.getElementById("sliderContentChild").style.padding = "2rem 2rem 2rem calc(" + document.getElementById("slider").offsetWidth + "px / 5)";
		if (window.screen.width >= 992 && window.screen.width <= 1199) {
  			document.getElementById("sliderContentChild").style.height = "calc(100% + 4rem)";
			document.getElementById("slider").style.height = document.getElementById("sliderContent").offsetHeight + "px";
		}
		else {
			document.getElementById("slider").style.height = document.getElementById("sliderContent").offsetHeight + "px";
			document.getElementById("sliderContentChild").style.height = "calc(" + document.getElementById("sliderContent").offsetHeight + "px + 4rem)";
		}
		
		const slides = document.getElementById('slides');
		const slideWidth = slides.children[0].offsetWidth;
		let slideIndex;
		let interval;

		function showSlide(index) {
			if (index < 0) {
				index = slides.children.length - 1;
			}
			else if (index >= slides.children.length) {
            	index = 0;
			}

			slideIndex = index;
			slides.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
		}
		function nextSlide() {
			slideIndex++;
			
			showSlide(slideIndex);
		}
		function prevSlide() {
			slideIndex--;
			
			showSlide(slideIndex);
		}

		showSlide(0);

		interval = setInterval(() => {
			slideIndex++;

			if (slideIndex >= slides.children.length) {
				slideIndex = 0;
			}

			showSlide(slideIndex);
		}, 5000);

		slides.addEventListener('mouseover', () => {
			clearInterval(interval);
		});	
		slides.addEventListener('mouseout', () => {
			interval = setInterval(() => {
				slideIndex++;

				if (slideIndex >= slides.children.length) {
					slideIndex = 0;
				}

				showSlide(slideIndex);
			}, 5000);
		});
	</script>
	<script>
		if (window.screen.width >= 768 && window.screen.width <= 991) {
			document.getElementById("slider2").style.height = "calc(250px + 4rem)";
		}
		else if (window.screen.width >= 501 && window.screen.width <= 767) {
			document.getElementById("slider2").style.height = "calc(250px + 2.5rem)";
		}
		else if (window.screen.width >= 401 && window.screen.width <= 500) {
			document.getElementById("slider2").style.height = "calc(200px + 2.5rem)";
		}
		else if (window.screen.width >= 301 && window.screen.width <= 400) {
			document.getElementById("slider2").style.height = "calc(150px + 2.5rem)";
		}
		else {
			document.getElementById("slider2").style.height = "calc(125px + 2.5rem)";
		}
		
		document.getElementById("slider_content_2").style.margin = "0 0 calc(" + document.getElementById("slider2").offsetHeight + "px + 4rem) 0";

    	const slides2 = document.getElementById('slides2');
    	const slideWidth2 = slides2.children[0].offsetWidth;
    	let slideIndex2;
    	let interval2;

    	function showSlide2(index2) {
        	if (index2 < 0) {
        	    index2 = slides2.children.length - 1;
        	}
			else if (index2 >= slides2.children.length) {
            	index2 = 0;
        	}

        	slideIndex2 = index2;
        	slides2.style.transform = `translateX(-${slideIndex2 * slideWidth2}px)`;
    	}
    	function nextSlide2() {
        	slideIndex2++;

        	showSlide2(slideIndex2);
    	}
    	function prevSlide2() {
        	slideIndex2--;

        	showSlide2(slideIndex2);
    	}

    	showSlide2(0);

    	interval2 = setInterval(() => {
        	slideIndex2++;

        	if (slideIndex2 >= slides2.children.length) {
            	slideIndex2 = 0;
        	}

        	showSlide2(slideIndex2);
    	}, 5000);

    	slides2.addEventListener('mouseover', () => {
        	clearInterval(interval2);
    	});
    	slides2.addEventListener('mouseout', () => {
        	interval2 = setInterval(() => {
            	slideIndex2++;

            	if (slideIndex2 >= slides2.children.length) {
                	slideIndex2 = 0;
            	}

            	showSlide2(slideIndex2);
        	}, 5000);
    	});
	</script>
	<script>
		document.getElementById("text").style.padding = "2rem calc(" + document.getElementById("faq").offsetWidth + "px / 5) 2rem 2rem";
		document.getElementById("faq").style.height = document.getElementById("textContainer").offsetHeight + "px";
		document.getElementById("text").style.height = "calc(" + document.getElementById("textContainer").offsetHeight + "px + 4rem)";			
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			toggleDropDown('slide-1');
		});
		
		document.getElementById("textContainer").style.height = document.getElementById("faq").offsetHeight + "px";
		
		if (window.innerWidth < 437) {
			function toggleDropDown(id) {
				const zakladka = document.getElementById(id + "-body");
				const przycisk = document.getElementById(id + "-more");
				const wszystkieZakladki = document.querySelectorAll(".zakladka-body");
				const wszystkiePrzyciski = document.querySelectorAll(".zakladka-more");
				wszystkieZakladki.forEach((element) => {
					if (element.id !== id + "-body") {
						element.style.maxHeight = document.getElementById(element.id + "Visible").offsetHeight + 4 + "px";
					}
				});
				wszystkiePrzyciski.forEach((element) => {
					if (element.id !== id + "-more") {
						element.textContent = ">";
						element.classList.remove("active");
					}
				});
				if (zakladka.style.maxHeight === document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px") {
					zakladka.style.maxHeight = "28rem";
					przycisk.textContent = "<";
					przycisk.classList.add("active");
				}
				else {
					zakladka.style.maxHeight = document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px";
					przycisk.textContent = ">";
					przycisk.classList.remove("active");
				}
			}
		}
		else if (window.innerWidth < 768) {
			function toggleDropDown(id) {
				const zakladka = document.getElementById(id + "-body");
				const przycisk = document.getElementById(id + "-more");
				const wszystkieZakladki = document.querySelectorAll(".zakladka-body");
				const wszystkiePrzyciski = document.querySelectorAll(".zakladka-more");
				wszystkieZakladki.forEach((element) => {
					if (element.id !== id + "-body") {
						element.style.maxHeight = document.getElementById(element.id + "Visible").offsetHeight + 4 + "px";
					}
				});
				wszystkiePrzyciski.forEach((element) => {
					if (element.id !== id + "-more") {
						element.textContent = ">";
						element.classList.remove("active");
					}
				});
				if (zakladka.style.maxHeight === document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px") {
					zakladka.style.maxHeight = "28rem";
					przycisk.textContent = "<";
					przycisk.classList.add("active");
				}
				else {
					zakladka.style.maxHeight = document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px";
					przycisk.textContent = ">";
					przycisk.classList.remove("active");
				}
			}
		}
		else {
			function toggleDropDown(id) {
				const zakladka = document.getElementById(id + "-body");
				const przycisk = document.getElementById(id + "-more");
				const wszystkieZakladki = document.querySelectorAll(".zakladka-body");
				const wszystkiePrzyciski = document.querySelectorAll(".zakladka-more");
				wszystkieZakladki.forEach((element) => {
					if (element.id !== id + "-body") {
						element.style.maxHeight = document.getElementById(element.id + "Visible").offsetHeight + 4 + "px";
					}
				});
				wszystkiePrzyciski.forEach((element) => {
					if (element.id !== id + "-more") {
						element.textContent = ">";
						element.classList.remove("active");
					}
				});
				if (zakladka.style.maxHeight === document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px") {
					zakladka.style.maxHeight = "12rem";
					przycisk.textContent = "<";
					przycisk.classList.add("active");
				}
				else {
					zakladka.style.maxHeight = document.getElementById(id + "-bodyVisible").offsetHeight + 4 + "px";
					przycisk.textContent = ">";
					przycisk.classList.remove("active");
				}
			}
		}
	</script>
</main>
<?php get_footer(); ?>
