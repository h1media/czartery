		<?php /* Template Name: Pełna szerokość */ ?>

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
			<section class="main-content main-content-full">
				
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h4><?php the_field('subtitle'); ?></h4>
				<div class="title-block5"></div>

				<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<!-- END .main-content -->
			</section>
		
		<!-- END .content-wrapper -->
		</div>
		
		<?php get_footer(); ?>