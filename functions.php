<?php
	add_filter('show_admin_bar', '__return_false');

	function the_breadcrumb() {
		$sep = '<span> › </span>';
		
		if (!is_front_page()) {
			echo '<div class="breadcrumbs">';
			echo "Strona Główna";
			echo $sep;
			
			if (is_page()) {
				echo the_title();
			}
			if (is_category() || is_single() ){
				the_category("<span> › </span>");
			}
			if (is_single()) {
				echo $sep;
				
				the_title();
			}
			
			echo '</div>';
		}
	}

	add_filter( 'get_the_archive_title', function ( $title ) {
		if( is_category() ) {
			$title = single_cat_title( '', false );
		}
	
		return $title;
	});
	
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'single-post-thumbnail', 590, 180 );
