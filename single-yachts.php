		<?php get_header(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="page-header">
			<h1><?php the_title(); ?></h1>
			<div class="title-block3"></div>
			<p>Oferta Czarterowa</p>
		</div>
		
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">
			
			<!-- BEGIN .main-content -->
			<section class="main-content main-content-left-sidebar">
				
				<!-- BEGIN .rev_slider_wrapper2 -->
				<div class="rev_slider_wrapper2">	
					<!-- BEGIN #slider1 -->
					<div id="slider2" class="rev_slider" data-version="5.0">

							<?php 

							$images = get_field('yacht_gallery');

							if( $images ): ?>
							    <ul>
							        <?php foreach( $images as $image ): ?>

										<li data-transition="fade" 
										    data-title="Slide Title" 
										    data-param1="Additional Text" 
										    data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
											<img src="<?php echo $image['sizes']['yacht-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
										</li>

							        <?php endforeach; ?>
							    </ul>
							<?php endif; ?>

					<!-- END #slider1 -->
					</div>

				<!-- END .rev_slider_wrapper2 -->
				</div>
				
				<h3>Szczegóły</h3>
				<div class="title-block7"></div>
				
				<p><?php the_content(); ?></p>
				
				<div class="yach-tech-spec">

					<h3>Dane techniczne</h3>
					<div class="title-block7"></div>
					<div>
						<?php the_field('yacht_spec'); ?>
					</div>

				</div>

				<div class="yach-schema">

						<?php 

							$image = get_field('yacht_schema');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)

						if( $image ): ?>

							<img src="<?php echo $image['sizes']['yacht-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

				</div>

				<div class="yach-equipment">

					<h3>Wyposażenie</h3>
					<div class="title-block7"></div>
					<div><?php the_field('yacht_accessory'); ?></div>

				</div>
				
			<!-- END .main-content -->
			</section>
			
			<!-- BEGIN .sidebar-content -->
			<section class="sidebar-content sidebar-content-left-sidebar">			

				<!-- BEGIN .widget -->
				<?php if ( is_active_sidebar( 'single_yacht' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'single_yacht' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
			<!-- END .sidebar-content -->
			</section>
		
		<!-- END .content-wrapper -->
		</div>

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php get_footer(); ?>