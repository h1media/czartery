		<?php /* Template Name: Jachty */ ?>

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
				
				<!-- BEGIN .yacht-listing-wrapper-3 -->
				<div class="yacht-listing-wrapper-3 clearfix">


				<?php
				    $query = new WP_Query( array(
				        'post_type' => 'yachts',
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

							<figure class="imghvr-shutter-in-out-diag-2">
								<?php the_post_thumbnail('yacht-listing-thumbs'); ?>
								    <figcaption>
								       <?php the_excerpt(); ?>
								    </figcaption>
								    <a href="<?php esc_url(the_permalink()); ?>"></a>
							</figure>	

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
		
		<!-- END .content-wrapper -->
		</div>
		
		<?php get_footer(); ?>