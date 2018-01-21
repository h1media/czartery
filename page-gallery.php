		<?php /* Template Name: Galerie */ ?>

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
			
			<!-- BEGIN .main-content -->
			<section class="main-content main-content-left-sidebar">
				
				<!-- BEGIN .yacht-listing-wrapper-3 -->
				<div class="yacht-listing-wrapper-3 clearfix">


				<?php
				    $query = new WP_Query( array(
				        'post_type' => 'gallery',
				        'posts_per_page' => 100,
				    ) );
				?>

				<?php if ( $query->have_posts() ) : ?>

				<!-- begin loop -->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					
					<!-- BEGIN .yacht-block -->
					<div class="yacht-block">
						<div class="yacht-block-image">
							<!--<div class="new-icon">New</div>-->

							<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('gallery-listing-thumbs'); ?></a>

						</div>
						<div class="yacht-block-content galleries">
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						</div>
					<!-- END .yacht-block -->
					</div>

				<?php endwhile; ?>
				<!-- end loop -->


				<?php wp_reset_postdata(); ?>

				<?php else : ?>
				    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
				<!-- END .yacht-listing-wrapper-3 -->
				</div>
				
				<!--<div class="page-pagination clearfix">
					<ul class="clearfix">
						<li><span class="current">1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>-->
				
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
		
		<?php get_footer(); ?>