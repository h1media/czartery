		<?php /* Template Name: Sklejka */ ?>

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

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h4><?php the_title(); ?></h4>
				<div class="title-block5"></div>

				<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


			<!-- END .main-content -->
			</section>
			
			<!-- BEGIN .sidebar-content -->
			<section class="sidebar-content sidebar-content-left-sidebar">			

				<!-- BEGIN .widget -->
				<?php if ( is_active_sidebar( 'single_sklejka' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'single_sklejka' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
			<!-- END .sidebar-content -->
			</section>
		
		<!-- END .content-wrapper -->
		</div>
		
		<?php get_footer(); ?>