		
		<?php get_header(); ?>

		<!-- BEGIN .rev_slider_wrapper1 -->
		<div class="rev_slider_wrapper1">	
			<!-- BEGIN #slider1 -->
			<div id="slider1" class="rev_slider" data-version="5.0">
				<ul>


					<?php 
					    query_posts(array( 
					        'post_type' => 'slides',
					        'showposts' => 20
					    ) );  
					?>

					<?php while (have_posts()) : the_post(); ?>

					<!-- BEGIN .Slide 1 -->
					<li data-transition="fade">
						<!--<img src="<?php echo get_template_directory_uri(); ?>/images/cache_44869373.jpg"  alt=""  width="1920" height="1280">-->
						<?php the_post_thumbnail(); ?>
						<div class="tp-caption rev-custom-caption-2"
							data-x="left"
							data-y="center"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="o:0"
							data-transform_out="o:0"
							data-start="500">
							<div class="rev-caption-wrapper clearfix">
								<h3><?php the_title(); ?></h3>
								<div class="title-block1"></div>
								<p><?php the_field('line_1'); ?></p>
								<p class="line2"><?php the_field('line_2'); ?></p>
								<div class="slideshow-button-wrapper">
									<a href="<?php the_field('url_button1'); ?>" class="slideshow-button-photos"><?php the_field('text_button1'); ?></a>
									<a href="<?php the_field('url_button2'); ?>" class="slideshow-button-about"><?php the_field('text_button2'); ?></a>
								</div>
							</div>
						</div>
					<!-- END .Slide 1 -->
					</li>

					<?php endwhile;?>

					<?php wp_reset_query(); ?>
					
					<!-- BEGIN .Slide 1 -->
					<!--<li data-transition="fade">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cache_47568717.jpg"  alt=""  width="1920" height="1280">
						<div class="tp-caption rev-custom-caption-2"
							data-x="left"
							data-y="center"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="o:0"
							data-transform_out="o:0"
							data-start="500">
							<div class="rev-caption-wrapper clearfix">
								<h3>Organizacja rejsów pod żaglami</h3>
								<div class="title-block1"></div>
								<p>Enjoy sailing in pristine conditions, it doesn't matter what your experience<br /> level is, we have a skilled crew to assist you</p>
								<div class="slideshow-button-wrapper">
									<a href="photos-4-col.html" class="slideshow-button-photos"><i class="fa fa-image"></i>Photos</a>
									<a href="about-us.html" class="slideshow-button-about"><i class="fa fa-info-circle"></i>About Us</a>
								</div>
							</div>
						</div>-->
					<!-- END .Slide 1 -->
					</li>

				</ul>

			<!-- END #slider1 -->
			</div>

		<!-- END .rev_slider_wrapper1 -->
		</div>

		<section class="content-wrapper home-icons-outer-wrapper">

			<h3 class="center-title"><?php the_field('why_us'); ?></h3>
			<div class="title-block2"></div>
			<p class="home-intro-text"><?php the_field('why_us_desc'); ?></p>

			<div class="clearfix">

				<div class="qns-one-third home-icon-wrapper">
					<div class="qns-home-icon"><!--<i class="fa fa-anchor"></i>-->
					<img src="<?php the_field('why_us_left_image'); ?>" />
					</div>
					<h4><?php the_field('why_us_left_title'); ?></h4>
					<div class="title-block3"></div>
					<p><?php the_field('why_us_left'); ?></p>
				</div>

				<div class="qns-one-third home-icon-wrapper">
					<div class="qns-home-icon"><!--<i class="fa fa-ship"></i>-->
						<img src="<?php the_field('why_us_middle_image'); ?>" />
					</div>
					<h4><?php the_field('why_us_middle_title'); ?></h4>
					<div class="title-block3"></div>
					<p><?php the_field('why_us_middle'); ?></p>
				</div>

				<div class="qns-one-third home-icon-wrapper qns-last">
					<div class="qns-home-icon"><!--<i class="fa fa-child"></i>-->
						<img src="<?php the_field('why_us_right_image'); ?>" />
					</div>
					<h4><?php the_field('why_us_right_title'); ?></h4>
					<div class="title-block3"></div>
					<p><?php the_field('why_us_right'); ?></p>
				</div>

			</div>

		</section>

		<!-- BEGIN .clearfix -->
		<section class="clearfix">

			<!-- BEGIN .about-us-block -->
			<div class="about-us-block about-us-block-1">

				<h3><?php the_field('place_title'); ?></h3>
				<div class="title-block4"></div>
				<p><?php the_field('place_desc'); ?></p>
				<a href="/port/" class="button0"><i class="fa fa-arrow-circle-right"></i>Więcej</a>

			<!-- END .about-us-block -->
			</div>

			<div class="video-wrapper video-wrapper-home" style="background-image: url(<?php the_field('place_image'); ?>);">

				<div class="video-play">
					<a href="<?php the_field('place_youtube'); ?>" data-gal="prettyPhoto"><i class="fa fa-play"></i></a>
				</div>

			</div>

		<!-- END .clearfix -->
		</section>

		<!-- BEGIN .content-wrapper -->
		<section class="content-wrapper clearfix our-yachts-sections">

			<h3 class="center-title"><?php the_field('our_yachts_title'); ?></h3>
			<div class="title-block2"></div>
			<p class="yacht-intro-text"><?php the_field('our_yachts_desc'); ?></p>

			<!-- BEGIN .yacht-block-wrapper -->
			<div class="owl-carousel1 yacht-block-wrapper">

			<?php 
			    query_posts(array( 
			        'post_type' => 'yachts',
			        'showposts' => 20
			    ) );  
			?>

			<?php while (have_posts()) : the_post(); ?>

				<!-- BEGIN .yacht-block -->
				<div class="yacht-block">
					<div class="yacht-block-image">
						<!--<div class="new-icon">New</div>-->
						<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('yacht-thumbs'); ?></a>
					</div>
					<div class="yacht-block-content">
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<div class="title-block5"></div>
						<ul>
							<li><span>Długość całkowita:</span> <?php the_field('yacht_length'); ?></li>
							<li><span>Szerokość:</span> <?php the_field('yacht_width'); ?></li>
							<li><span>Powierzchnia żagli:</span> <?php the_field('yacht_sail'); ?></li>
							<li><span>Moc silnika:</span> <?php the_field('yacht_engine'); ?></li>
							<li><span>Liczba koi:</span> <?php the_field('yacht_rooms'); ?></li>
						</ul>
					</div>
				<!-- END .yacht-block -->
				</div>

			<?php endwhile;?>

			<?php wp_reset_query(); ?>

			<!-- END .yacht-block-wrapper -->
			</div>

		<!-- END .content-wrapper -->
		</section>


		<!--<section class="full-width-testimonials-wrapper">

			<div class="full-width-testimonials-inner content-wrapper">

				<div class="title-block2"></div>

				<div class="testimonial-list-wrapper">

					<div class="testimonial-wrapper">
						<p><span class="qns-open-quote">“</span>Stawianie żagli na jachcie podobne jest bardziej niż na innych statkach do rozwijania skrzydeł u ptaka  a  lekkość, z jaką  jacht się porusza, stanowi rozkosz dla oczu.<span class="qns-close-quote">”</span></p>
						<div class="testimonial-image"><img src="<?php echo get_template_directory_uri(); ?>/images/image5.jpg" alt="" /></div>
						<div class="testimonial-author"><p>Josef Conrad Korzeniowski „Zwierciadło morza”</p></div>
					</div>

				</div>

			</div>

		</section>-->


		<!-- BEGIN .content-wrapper -->
		<section class="content-wrapper clearfix news-gallery-sections">

			<!-- BEGIN .qns-one-half -->
			<div class="qns-one-half">

				<h3 class="center-title">Aktualności</h3>
				<div class="title-block2"></div>

				<!-- BEGIN .news-list -->
				<div class="news-list">

					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<!-- BEGIN .news-wrapper -->
					<div class="news-wrapper clearfix">

						<div class="news-date">
							<div class="news-m"><?php the_time('M') ?></div>
							<div class="news-d"><?php the_time('j') ?></div>	
						</div>

						<div class="news-info">	
							<div class="news-meta">
								<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
								<p><?php the_excerpt(__('(more…)')); ?></p>
							</div>
						</div>

					<!-- END .news-wrapper -->
					</div>

					<?php endwhile;?>

					<?php wp_reset_query(); ?>

				<!-- END .news-list -->
				</div>

			<!-- END .qns-one-half -->
			</div>

			<!-- BEGIN .qns-one-half -->
			<div class="qns-one-half qns-last">

				<h3 class="center-title"><?php the_field('gallery_title'); ?></h3>
				<div class="title-block2"></div>

				<!-- BEGIN .home-photos-wrapper -->
				<div class="home-photos-wrapper clearfix">

					<?php 

					$images = get_field('home_gallery');

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>

								<div class="home-photo"><a href="<?php echo $image['url']; ?>" data-gal="prettyPhoto[gallery]"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></a></div>

					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>

				<!-- END .home-photos-wrapper -->
				</div>

			<!-- END .qns-one-half -->
			</div>

		<!-- END .content-wrapper -->
		</section>


		<!-- BEGIN .booking-form-wrapper -->
		<!--<section class="booking-form-wrapper clearfix">

			<div class="booking-form-left">

				<h3 class="center-title">Zarezerwuj jacht</h3>
				<div class="title-block2"></div>

				<p>Zapraszamy do korzystania z formularza rezerwacyjnego obok znajdującego sie obok. Twoja wiadomość zostanie dostarczona bezpośrednio na nasz adres e-mail.</p>

				<p><i class="smaller-text">Zwykle odpowiadamy w przeciągu 24 godzin.</i></p>

			</div>

			<div class="booking-form-right">

				<?php echo do_shortcode('[contact-form-7 id="125" title="Formularz 1"]'); ?>

			</div>

		</section>-->

		<?php get_footer(); ?>