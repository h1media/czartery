<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- Title -->
	<title><?php wp_title(); ?></title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49672586-11"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-49672586-11');
	</script>


	<?php wp_head(); ?>

<!-- END head -->
</head>

<!-- BEGIN body -->
<body>
	
	<!-- BEGIN .outer-wrapper -->
	<div class="outer-wrapper">
	
		<!-- BEGIN .top-bar-wrapper -->
		<div class="top-bar-wrapper">

			<!-- BEGIN .top-bar -->
			<div class="top-bar clearfix">

				<div class="top-bar-left clearfix">
					<ul>
						<li class="top-list-address"><?php the_field('options_address', 'option'); ?></li>
						<li class="top-list-phone"><?php the_field('options_phone', 'option'); ?></li>
						<!--<li class="top-list-business-hours">Mon - Sat 9.00 - 18.30. Sunday Closed</li>-->
					</ul>
				</div>

				<div class="top-bar-right clearfix">
					<ul>
						<?php if( get_field('facebook', 'option') ): ?>
							<li class="top-list-facebook"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank">Facebook</a></li>
						<?php endif; ?>
						<?php if( get_field('twitter', 'option') ): ?>
							<li class="top-list-twitter"><a href="<?php the_field('twitter', 'option'); ?>" target="_blank">Twitter</a></li>
						<?php endif; ?>
					</ul>
				</div>

			<!-- END .top-bar -->
			</div>

		<!-- END .top-bar-wrapper -->
		</div>

		<!-- BEGIN .header-wrapper -->
		<header class="header-wrapper clearfix">

			<!-- BEGIN .header-inner -->
			<div class="header-inner">

				<div class="logo">
					<a href="http://poljacht.pl/"><img src="<?php the_field('logo', 'option'); ?>"></a>
				</div>

				<a href="/kontakt/" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Kontakt</a>

				<!-- BEGIN #primary-navigation -->
				<nav id="primary-navigation" class="navigation-wrapper fixed-navigation clearfix">

					<!-- BEGIN .navigation-inner -->
					<div class="navigation-inner">

						<!-- BEGIN .navigation -->
						<div class="navigation">
								<?php
								wp_nav_menu( array( 
								    'theme_location' => 'my-custom-menu', 
								    'container_class' => 'custom-menu-class' ) ); 
								?>
							<!--<ul>	
								<li class="current-menu-item current_page_item menu-item-has-children"><a href="index.html">Home</a>
									<ul>
										<li><a href="index.html">Home I</a></li>
										<li><a href="index2.html">Home II</a></li>
									</ul>
								</li>
								<li class="megamenu-3-col menu-item-has-children">
									<a href="yacht-charter-3-col.html">For Charter</a>
									<ul>
										<li><a href="yacht-charter-3-col.html">For Charter (Sidebar)</a>
											<ul>
												<li><a href="yacht-charter-2-col.html">2 Columns</a></li>
												<li><a href="yacht-charter-3-col.html">3 Columns</a></li>
												<li><a href="yacht-charter-4-col.html">4 Columns</a></li>
												<li><a href="yacht-charter-5-col.html">5 Columns</a></li>
											</ul>
										</li>
										<li><a href="yacht-charter-3-col-full.html">For Charter (Full Width)</a>
											<ul>
												<li><a href="yacht-charter-2-col-full.html">2 Columns</a></li>
												<li><a href="yacht-charter-3-col-full.html">3 Columns</a></li>
												<li><a href="yacht-charter-4-col-full.html">4 Columns</a></li>
												<li><a href="yacht-charter-5-col-full.html">5 Columns</a></li>
											</ul>
										</li>	
										<li><a href="yacht-charter-single.html">For Charter Single Page</a>
											<ul>
												<li><a href="yacht-charter-single.html">For Charter Single Page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="megamenu-3-col menu-item-has-children">
									<a href="yacht-sale-3-col.html">For Sale</a>
									<ul>
										<li><a href="yacht-sale-3-col.html">For Sale (Sidebar)</a>
											<ul>
												<li><a href="yacht-sale-2-col.html">2 Columns</a></li>
												<li><a href="yacht-sale-3-col.html">3 Columns</a></li>
												<li><a href="yacht-sale-4-col.html">4 Columns</a></li>
												<li><a href="yacht-sale-5-col.html">5 Columns</a></li>
											</ul>
										</li>
										<li><a href="yacht-sale-3-col-full.html">For Sale (Full Width)</a>
											<ul>
												<li><a href="yacht-sale-2-col-full.html">2 Columns</a></li>
												<li><a href="yacht-sale-3-col-full.html">3 Columns</a></li>
												<li><a href="yacht-sale-4-col-full.html">4 Columns</a></li>
												<li><a href="yacht-sale-5-col-full.html">5 Columns</a></li>
											</ul>
										</li>	
										<li><a href="yacht-sale-single.html">For Sale Single Page</a>
											<ul>
												<li><a href="yacht-sale-single.html">For Sale Single Page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="megamenu-2-col menu-item-has-children">
									<a href="photos-4-col.html">Photos</a>
									<ul>
										<li><a href="photos-4-col.html">Photos (Sidebar)</a>
											<ul>
												<li><a href="photos-2-col.html">2 Columns</a></li>
												<li><a href="photos-3-col.html">3 Columns</a></li>
												<li><a href="photos-4-col.html">4 Columns</a></li>
												<li><a href="photos-5-col.html">5 Columns</a></li>
											</ul>
										</li>
										<li><a href="photos-4-col-full.html">Photos (Full Width)</a>
											<ul>
												<li><a href="photos-2-col-full.html">2 Columns</a></li>
												<li><a href="photos-3-col-full.html">3 Columns</a></li>
												<li><a href="photos-4-col-full.html">4 Columns</a></li>
												<li><a href="photos-5-col-full.html">5 Columns</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="megamenu-4-col menu-item-has-children">
									<a href="pages.html">Pages</a>
									<ul>
										<li><a href="news-1-col.html">News</a>
											<ul>
												<li><a href="news-1-col.html">1 Column</a></li>
												<li><a href="news-2-col.html">2 Columns</a></li>
												<li><a href="news-3-col.html">3 Columns</a></li>
												<li><a href="news-4-col.html">4 Columns</a></li>
												<li><a href="news-5-col.html">5 Columns</a></li>
												<li><a href="news-single.html">News Single</a></li>
											</ul>
										</li>
										<li><a href="pages.html">Pages</a>
											<ul>
												<li><a href="online-booking.html">Online Booking</a></li>
												<li><a href="locations.html">Locations Listing</a></li>
												<li><a href="locations-single.html">Locations Single</a></li>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="typography.html">Typography</a></li>
												<li><a href="js-elements.html">JS Elements</a></li>
											</ul>
										</li>
										<li><a href="pages.html">Pages</a>
											<ul>
												<li><a href="search-results.html">Search Results</a></li>
												<li><a href="404-page.html">404 Page</a></li>
												<li><a href="full-width.html">Full Width</a></li>
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="typography.html">Right Sidebar</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</li>
										<li><a href="pages.html">Testimonials</a>
											<ul>
												<li><a href="testimonials-left-sidebar.html">Testimonials (Left Sidebar)</a></li>
												<li><a href="testimonials.html">Testimonials (Right Sidebar)</a></li>
												<li><a href="testimonials-single.html">Testimonials Single</a></li>
											</ul>
										</li>
									</ul>
								</li>	
								<li class="menu-item-has-children"><a href="contact.html">Contact</a>
									<ul>
										<li><a href="contact.html">Contact I</a></li>
										<li><a href="contact2.html">Contact II</a></li>
									</ul>
								</li>
							</ul>-->
						<!-- END .navigation -->
						</div>

						<a href="/kontakt/" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Kontakt</a>

					<!-- END .navigation-inner -->
					</div>

				<!-- END #primary-navigation -->
				</nav>

				<div id="mobile-navigation">
					<a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
				</div>

				<div class="clearboth"></div>

				<!-- BEGIN .mobile-navigation-wrapper -->
				<div class="mobile-navigation-wrapper">	
				
					<?php
					wp_nav_menu( array( 
					    'theme_location' => 'my-custom-menu', 
					    'container_class' => 'custom-menu-class' ) ); 
					?>

				<!-- END .mobile-navigation-wrapper -->
				</div>

			<!-- END .header-inner -->
			</div>

		<!-- END .header-wrapper -->
		</header>