		<?php get_header(); ?>

		<div id="page-header">
			<h1><?php the_title(); ?></h1>
			<div class="title-block3"></div>
			<p>Aktualności</p>
		</div>
		
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">
			
			<!-- BEGIN .main-content -->
			<section class="main-content main-content-left-sidebar">
				
				<!-- BEGIN .news-block-wrapper -->
				<div class="news-block-wrapper news-block-wrapper-1-col-listing news-single clearfix">

					<!-- BEGIN .news-block -->
					<div class="news-block">
						<div class="news-block-image">
							<a href="news-single.html"><img src="images/image10.jpg" alt="" /></a>
						</div>

						<!-- BEGIN .news-block-content -->
						<div class="news-block-content">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- BEGIN .news-description -->
							<div class="news-description">
								
								<?php the_content(); ?>
								
							<!-- END .news-description -->
							</div>

						<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

						<!-- END .news-block-content -->
						</div>

					<!-- END .news-block -->
					</div>
					
				<!-- END .news-block-wrapper -->
				</div>
				
			<!-- END .main-content -->
			</section>
			
			<!-- BEGIN .sidebar-content -->
			<section class="sidebar-content sidebar-content-left-sidebar">

				<!-- BEGIN .widget -->
				<?php if ( is_active_sidebar( 'single_blog' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'single_blog' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>
				
			<!-- END .sidebar-content -->
			</section>
		
		<!-- END .content-wrapper -->
		</div>
		
	<?php get_footer(); ?>