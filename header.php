<!DOCTYPE html>
<html lang="pl">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>
        	<?php
            	if ( is_home() ) {
					bloginfo('name');
					
					echo ' - ';
					
					bloginfo('description');
				}
            	elseif ( is_category() ) {
					single_cat_title();
					
					echo ' - ';
					
					bloginfo('name');
				}
            	elseif ( is_single() || is_page() ) {
					single_post_title();
					
					echo ' - ';
					
					bloginfo('name');
				}
            	elseif ( is_search() ) {
					bloginfo('name');
					
					echo ' - Search results for ' . esc_html($s);
				}
            	elseif ( is_404() ) {
					bloginfo('name');
					
					echo ' - Not Found';
				}
            	else {
					bloginfo('name');
					
					echo ' - ';
					
					bloginfo('description'); }
        	?>
    	</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="<?php echo esc_url( get_stylesheet_uri() ); ?>" rel="stylesheet">
	</head>
	<nav class="desktop-navigation" style="">
    	<div class="" style="background-color: #333333;">
        	<div class="container" style="padding: 2rem calc(var(--bs-gutter-x) * .5);">
            	<div class="row" style="align-items: center;">
                	<div class="col-3" style="padding: 0;">
                    	<a class="" style="" href="#">
                        	<img class="" style="height: 62px;" src="http://localhost/wordpress/wp-content/uploads/2024/03/logo.png" alt="logo">
                    	</a>
                	</div>
                	<div class="col-9" style="padding: 0;">
                    	<ul class="" style="margin: 0; padding: 0; display: flex; align-items: center; position: relative; list-style-type: none;">
							<a class="" style="" href="#">
								<li class="" style="">
                            		Strona główna
                        		</li>
							</a>
							<a class="" style="" href="#">
								<li id="sub-menu-container-1" class="" style="position: relative;">
                            		Samochody
									<div id="sub-menu-content-1" class="sub-menu-1" style="position: absolute; top: 100%; left: 0; background-color: #333333;">
										<ul class="" style="margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center; list-style-type: none;">
											<a href="#">
												<li class="" style="">
													WIP1
												</li>
											</a>
											<a href="#">
												<li class="" style="">
													WIP2
												</li>
											</a>
										</ul>
									</div>
                        		</li>
							</a>
							<a class="" style="" href="#">
								<li id="sub-menu-container-2" class="" style="position: relative;">
                            		Tory wyścigowe
									<div id="sub-menu-content-2" class="sub-menu-2" style="position: absolute; top: 100%; left: 0; background-color: #333333;">
										<ul class="" style="margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center; list-style-type: none;">
											<a href="#">
												<li class="" style="">
													WIP1
												</li>
											</a>
											<a href="#">
												<li class="" style="">
													WIP2
												</li>
											</a>
										</ul>
									</div>
                        		</li>
							</a>
							<a class="" style="" href="#">
								<li class="" style="">
                            		Cennik
                        		</li>
							</a>
							<a class="" style="" href="#">
								<li class="" style="">
                            		Kariera
                        		</li>
							</a>
							<a class="" style="position: absolute; right: 0;" href="#">
								<li class="" style="">
                            		Kontakt
                        		</li>
							</a>
                    	</ul>
                	</div>
            	</div>
        	</div>
    	</div>
	</nav>
	<nav id="mobile-navigation" class="mobile-navigation" style="width: 100%; position: fixed; top: 0; z-index: 100; background-color: #333333;">
    	<div class="" style="padding: 2rem 1rem;">
        	<div class="row" style="">
            	<div class="col-9" style="">
                	<a class="" style="" href="<?php echo get_site_url(); ?>/wip/#" >        
                    	<img class="" style="height: 62px;" src="http://localhost/wordpress/wp-content/uploads/2024/03/logo.png" alt="logo">
                	</a>
           		</div>
            	<div class="col-3" style="display: flex; justify-content: flex-end; align-items: center; z-index: 10">
                	<div class="" style="float: right;">
                    	<input id="check" class="" style="width: 36px; height: 36px; display: block; position: absolute; z-index: 2; opacity: 0; cursor: pointer" type="checkbox" onclick="toggleMenu()">
                    	<span class="line" style="width: 23px; height: 3px; margin: 6px 0; display: block; position: relative; z-index: 1; background-color: #6c757d; border-radius: 5px; transform-origin: 0 0; transition: .5s"></span>
                    	<span class="line" style="width: 23px; height: 3px; margin: 6px 0; display: block; position: relative; z-index: 1; background-color: #6c757d; border-radius: 5px; transform-origin: 0 0; transition: .5s"></span>
                    	<span class="line" style="width: 23px; height: 3px; margin: 6px 0; display: block; position: relative; z-index: 1; background-color: #6c757d; border-radius: 5px; transform-origin: 0 0; transition: .5s"></span>
                	</div>
            	</div>
            	<div id="content" class="" style="margin: 2rem 0 0 0; padding: 1rem 0; background-color: #ffffff; display: none;">
                	<ul class="" style="margin: 0; padding: 0 0 0 12px; list-style-type: none;">
                    	<li class="" style="">
                        	<div class="row" style="">
                            	<div class="col-8" style="">
                                	<a class="" style="color: #000000; font-size: 1.25rem; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
                                    	Samochody
                                	</a>
                            	</div>
								<div class="col-4" style="padding: 0 1.5rem 0 0; display: flex; justify-content: flex-end;">
									<label for="check-0" class="" style="position: relative; display: inline-block;">
										<input id="check-0" class="arrow-1" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0; cursor: pointer;" type="checkbox" onclick="toggleSub(0)">
										<img id="arrow-0" class="arrow-1" style="position: absolute; top: 50%; right: 0; z-index: 1;" src="http://localhost/wordpress/wp-content/uploads/2024/03/arrow-right.png" alt="arrow-right">
									</label>
								</div>
							</div>
							<div id="sub-0" class="sub-menu-10" style="display: none;">
								<ul class="" style="padding: 0 0 0 1rem; list-style-type: none;">
									<li class="" style="">
										<a class="" style="color: #000000; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
											WIP1
										</a>
									</li>
									<li class="" style="">
										<a class="" style="color: #000000; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
											WIP2
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="" style="">
							<div class="row" style="">
								<div class="col-8" style="">
									<a class="" style="color: #000000; font-size: 1.25rem; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
										Tory wyścigowe
									</a>
								</div>
								<div class="col-4" style="padding: 0 1.5rem 0 0; display: flex; justify-content: flex-end;">
									<label for="check-1" class="" style="position: relative; display: inline-block;">
										<input id="check-1" class="arrow-2" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0; cursor: pointer;" type="checkbox" onclick="toggleSub(1)">
										<img id="arrow-1" class="arrow-2" style="position: absolute; top: 50%; right: 0; z-index: 1;" src="http://localhost/wordpress/wp-content/uploads/2024/03/arrow-right.png" alt="arrow-right">
									</label>
								</div>
                        	</div>
							<div id="sub-1" class="sub-menu-10" style="display: none;">
								<ul class="" style="padding: 0 0 0 1rem; list-style-type: none;">
									<li class="" style="">
										<a class="" style="color: #000000; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
											WIP1
										</a>
									</li>
									<li class="" style="">
										<a class="" style="color: #000000; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
											WIP2
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="" style="">
							<a class="" style="color: #000000; font-size: 1.25rem; font-weight: 600; text-decoration: none;" style="padding: 0;" href="<?php echo get_site_url(); ?>/wip/#">
								Cennik
							</a>
						</li>
						<li class="" style="">
							<a class="" style="color: #000000; font-size: 1.25rem; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
								Kariera
							</a>
						</li>
						<li class="" style="">
							<a style="color: #000000; font-size: 1.25rem; font-weight: 600; text-decoration: none;" href="<?php echo get_site_url(); ?>/wip/#">
								Kontakt
							</a>
                    	</li>
                	</ul>
            	</div>
       		</div>
    	</div>
	</nav>
	<body class="" style="">
		<script>
			document.getElementById("sub-menu-content-1").style.width = document.getElementById("sub-menu-container-1").offsetWidth + "px";
			document.getElementById("sub-menu-content-2").style.width = document.getElementById("sub-menu-container-2").offsetWidth + "px";
		</script>
		<script>
			function toggleMenu() {
				var content = document.getElementById("content");
				var checkbox = document.getElementById("check");
				var lines = document.getElementsByClassName("line");
			
				if (content.style.display == "block") {
					content.style.display = "none";
					
					lines[0].style.width = "23px";
					lines[0].style.transform = "";
					lines[1].style.opacity = "1";
					lines[2].style.width = "23px";
					lines[2].style.transform = "";
				}
				else {
					content.style.display = "block";

					lines[0].style.width = "32.5px";
					lines[0].style.transform = "translateX(8px) translateY(2px) rotate(45deg)";
					lines[1].style.opacity = "0";
					lines[2].style.width = "32.5px";
					lines[2].style.transform = "translateX(8px) translateY(8px) rotate(-45deg)";
				}
			}
			function toggleSub(index) {
				var subMenu = document.getElementById("sub-" + index);
			
				if (subMenu.style.display === "block") {
					subMenu.style.display = "none";
				}
				else {
					subMenu.style.display = "block";
				}
			}
		</script>
		