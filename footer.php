		<!-- BEGIN .footer -->
		<footer class="footer">

			<!-- BEGIN .footer-inner -->
			<div class="footer-inner clearfix">

				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">

					<h5><?php the_field('footer_title1', 'option'); ?></h5>
					<div class="title-block6"></div>
					<p><a href="https://rodzina.gov.pl/duza-rodzina"><img class="karta-rodziny" src="<?php echo get_template_directory_uri(); ?>/images/karta-duzej-rodziny.png"></a></p>


				<!-- END .one-fourth -->
				</div>

				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">

					<h5><?php the_field('footer_title2', 'option'); ?></h5>
					<div class="title-block6"></div>
					<p><?php the_field('footer2_desc', 'option'); ?></p>

				<!-- END .one-fourth -->
				</div>

				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">

					<h5><?php the_field('footer_title3', 'option'); ?></h5>
					<div class="title-block6"></div>
						<?php
						wp_nav_menu( array( 
						    'theme_location' => 'my-custom-menu2', 
						    'container_class' => 'custom-menu-class' ) ); 
						?>

				<!-- END .one-fourth -->
				</div>

				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">

					<h5><?php the_field('footer_title4', 'option'); ?></h5>
					<div class="title-block6"></div>
					<ul class="contact-widget">
						<li class="cw-address"><?php the_field('options_address', 'option'); ?></li>
						<li class="cw-phone"><?php the_field('options_phone', 'option'); ?><span>&nbsp;</span></li>
						<li class="cw-cell"><a href="mailto:<?php the_field('options_email', 'option'); ?>"><?php the_field('options_email', 'option'); ?></a><span>Odpowiadamy w przeciągu 24 godzin.</span></li>
					</ul>

				<!-- END .one-fourth -->
				</div>

			<!-- END .footer-inner -->
			</div>

			<!-- BEGIN .footer-bottom -->
			<div class="footer-bottom">

				<div class="footer-bottom-inner clearfix">

					<p class="footer-message"><?php the_field('copyright', 'option'); ?> | <a href="<?php echo wp_login_url(); ?>" title="Login">Login</a><br /><a href="http://h1media.pl" target="_blank">H1media - strony www i marketing w internecie</a></p>

					<div class="footer-social-icons-wrapper">
						<?php if( get_field('facebook', 'option') ): ?>
							<a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
						<?php endif; ?>
						<?php if( get_field('twitter', 'option') ): ?>
							<a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
						<?php endif; ?>
					</div>

				</div>

			<!-- END .footer-bottom -->
			</div>

		<!-- END .footer -->	
		</footer>
	
	<!-- END .outer-wrapper -->
	</div>

	<?php wp_footer(); ?>
	
<!-- END body -->
</body>
</html>