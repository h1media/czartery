

		<?php get_header(); ?>

		<?php if ( get_field( 'subtitle_background_image' ) ): ?>
			<div id="page-header" style="background-image: url('<?php the_field("subtitle_background_image"); ?>');">
		<?php else: ?>
			<div id="page-header">
		<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<div class="title-block3"></div>
			<p><?php the_field('subtitle'); ?></p>
		</div>
		
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<!-- BEGIN .main-content -->
			<section class="main-content main-content-left-sidebar">
				
				<div class="qns-one-half">
					<h4>Dane kontaktowe</h4>
					<div class="title-block5"></div>
					<?php the_content(); ?>
					
					<div class="widget not-widget">
						<ul class="contact-details-widget">
							<li class="cdw-address clearfix"><?php the_field('options_address', 'option'); ?></li>
							<li class="cdw-time clearfix">Jarosław Szolc</li>
							<li class="cdw-phone clearfix"><?php the_field('options_phone', 'option'); ?></li>
							<li class="cdw-email clearfix"><a href="mailto:<?php the_field('options_email', 'option'); ?>"><?php the_field('options_email', 'option'); ?></a></li>
						</ul>
					</div>
					
					<h4>Social</h4>
					<div class="title-block5"></div>
					
					<ul class="social-links clearfix">
						<?php if( get_field('facebook', 'option') ): ?>
							<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if( get_field('twitter', 'option') ): ?>
							<li><a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<?php endif; ?>
					</ul>
					
				</div>
			
				<div class="qns-one-half qns-last">

					<h4>Formularz kontaktowy</h4>
					<div class="title-block5"></div>
					
					<?php echo do_shortcode( ' [contact-form-7 id="330" title="Formularz Kontaktowy"] ' ); ?>
					
				</div>
				
			<!-- END .main-content -->
			</section>

			<!-- BEGIN .sidebar-content -->
			<section class="sidebar-content sidebar-content-left-sidebar">			

				<!-- BEGIN .widget -->
				<?php if ( is_active_sidebar( 'single_default' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'single_default' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
			<!-- END .sidebar-content -->
			</section>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
		<!-- END .content-wrapper -->
		</div>
		
		<!-- BEGIN #google-map -->
				<div id="google-map" style="height: 515px;"></div>

				<script type="text/javascript">

					function initialize() {

						// Set Location
						var myLatlng = new google.maps.LatLng(53.972909, 21.761283);

						// Set Style
						var styles = [
						    {
						      stylers: [
						        { hue: "#85a5cc" },
						        { saturation: -50 }
						      ]
						    },{
						      featureType: "road",
						      elementType: "geometry",
						      stylers: [
						        { lightness: 100 },
						        { visibility: "simplified" }
						      ]
						    },{
						      featureType: "road",
						      elementType: "labels",
						      stylers: [
						        { visibility: "off" }
						      ]
						    }
						  ];

						// Set Map Options
						var mapOptions = {
							mapTypeControlOptions: {
								mapTypeIds: ['Styled']
							},
							center: myLatlng,
							zoom: 11,
							mapTypeId: 'Styled',
							scrollwheel: false,
							scaleControl: false,
							disableDefaultUI: false
						};

						// Build Map
						var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
						var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
						map.mapTypes.set('Styled', styledMapType);

						// Set Map Marker
						var contentString = 'Przystań Zielona Zatoka 11-500 Bogaczewo';
						var infowindow = new google.maps.InfoWindow({
							content: contentString
						});
						var marker = new google.maps.Marker({
							position: myLatlng,
							map: map,
							title: 'Map Marker 1',
							icon: null,
						});

						// Display Map Marker
						google.maps.event.addListener(marker, 'click', function() {
							infowindow.open(map,marker);
						});

					}

					// Display Map
					google.maps.event.addDomListener(window, 'load', initialize);

				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu6XSjLkxjE7wNBRrZ7x8Tarb367hMiVU&callback=initMap" async defer></script>
		
		<?php get_footer(); ?>