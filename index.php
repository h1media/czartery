		<?php get_header(); ?>

		<div id="page-header">
			<h1>Aktualności</h1>
			<div class="title-block3"></div>
			<p>Wszystkie aktualności</p>
		</div>
		
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">
			
			<!-- BEGIN .main-content -->
			<section class="main-content main-content-full">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<!-- BEGIN .news-block-wrapper -->
				<div class="news-block-wrapper news-block-wrapper-3-col-listing clearfix">

					<!-- BEGIN .news-block -->
					<div class="news-block">
						<div class="news-block-image">
							<a href="news-single.html"><img src="images/image11.jpg" alt="" /></a>
						</div>
						<!-- BEGIN .news-block-content -->
						<div class="news-block-content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink(); ?>" class="news-read-more">Czytaj dalej <i class="fa fa-angle-right"></i></a>
						<!-- END .news-block-content -->
						</div>
					<!-- END .news-block -->
					</div>
					
				<!-- END .news-block-wrapper -->
				</div>
				
				<?php endwhile; ?>

				<?php else: ?>
				  <article>
				    <h1>Sorry...</h1>
				    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				  </article>
				<?php endif; ?>

			<!-- END .main-content -->
			</section>
		
		<!-- END .content-wrapper -->
		</div>
		
	<?php get_footer(); ?>