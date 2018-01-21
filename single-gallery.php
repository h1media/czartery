		<?php get_header(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="page-header">
			<h1><?php the_title(); ?></h1>
			<div class="title-block3"></div>
			<p>Fotogaleria</p>
		</div>
		
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">

			<!-- BEGIN .main-content -->
			<section class="main-content main-content-left-sidebar">
				
				<!-- BEGIN .photo-gallery-wrapper -->
				<div class="photo-gallery-wrapper photo-gallery-3-col clearfix">

					<?php 

					$images = get_field('gallery');

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>

								<div class="photo-gallery-item"><a href="<?php echo $image['url']; ?>" data-gal="prettyPhoto[gallery]"><img src="<?php echo $image['sizes']['gallery-listing-thumbs']; ?>" alt="<?php echo $image['alt']; ?>" /></a></div>

					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>

				<!-- END .photo-gallery-wrapper -->
				</div>
				
			<!-- END .main-content -->
			</section>
			
			<!-- BEGIN .sidebar-content -->
			<section class="sidebar-content sidebar-content-left-sidebar">	

				<!-- BEGIN .widget -->
				<?php if ( is_active_sidebar( 'single_gallery' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'single_gallery' ); ?>
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