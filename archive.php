<?php
	if ( has_post_thumbnail()) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	}
?>
<?php get_header(); ?>
<main id="main" class="" style="">
	<header id="header" class="" style="background-color: #c5c5c5;">
		<div class="container" style="padding: 2rem; background-color: #333333; color: #ffffff;">
			<div class="contact-page-breadcrumb" style="margin: 0 0 1rem 0;">
				<?php the_breadcrumb(); ?>
			</div>
			<h1 class="" style="margin: 0; line-height: 2rem;">
				<?php the_archive_title(); ?>
			</h1>
			<img class="" style="width: 120px;" src="http://localhost/wordpress/wp-content/uploads/2024/04/underline.png" alt="underline">
		</div>
	</header>
	<div class="container" style="">
		<div class="row" style="justify-content: space-evenly;">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-12 col-md-5" style="margin: 0 0 2rem 0;">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="" style="margin: 2rem 0 0 0; padding: 1rem 0; border-right: solid 1px #f5f5f5; border-radius: 20%; background-color: #f5f5f5;">
							<div class="row" style="">
								<div class="col-12" style="">
									<?php if (has_post_thumbnail()) : ?>
										<a class="" style="" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('large', ['class' => 'single']); ?>
										</a>
									<?php endif; ?>
									<div class="" style="min-height: 175px; padding: 0 1rem; text-align: center;">
										<h2 class="" style="margin: 0 0 1rem 0;">
											<a class="" style="color: #121212; text-decoration: none;" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
										<div class="" style="">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<p class="" style="">
					<?php _e('Brak wpisów w tej kategorii.', 'textdomain'); ?>
				</p>
			<?php endif; ?>
		</div>
		<div class="pagination" style="">
			<?php the_posts_pagination(array('mid_size' => 2, 'prev_text' => __('« Poprzednia', 'textdomain'), 'next_text' => __('Następna »', 'textdomain'),)); ?>
		</div>
	</div>        
</main>
<?php get_footer(); ?>
