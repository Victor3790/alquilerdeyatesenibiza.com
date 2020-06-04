<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Base_Theme
 */

?>

	</div><!-- #content -->

	<div id="toTop" class="toTop__container">
		<img class="toTop" src="<?php echo get_template_directory_uri() ?>/imgs/top.png" alt="">
	</div>

	<footer id="colophon" class="site-footer bbFooter">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<h4 class="bbFooter__title"><?php _e('Contact us', 'cbt'); ?></h4>
					<p class="bbFooter__text">
						Carrer ses Figueres,31, <br>
						07800 Ibiza, Balearic Islands, <br>
						<?php _e('Spain', 'cbt'); ?>
					</p>
					<p class="bbFooter__text" style="color:#fff;">
						<?php _e('Call us', 'cbt'); ?>: <a class="phone" style="color:#fff;" href="tel:0034 620 26 90 20">(0034) 620 26 90 20</a><br>
						<?php _e('Write to us', 'cbt'); ?>: <a style="color:#fff;" href="mailto:info@alquilerdeyatesenibiza.com?Subject=Información" target="_top">info@alquilerdeyatesenibiza.com</a>
					</p>
				</div>
				<div class="col-12 col-md-4">
					<h4 class="bbFooter__title"><?php _e('Business hours', 'cbt'); ?></h4>
					<p class="bbFooter__text">
						<?php _e('Monday to Friday', 'cbt'); ?> <br>
						10:00 - 18:00 h. <br>
						<?php _e('Saturday', 'cbt'); ?> <br>
						10:00 - 14:00 h.
					</p>
				</div>
				<div class="col-12 col-md-4">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bbFooter__social">
									<a href="https://www.facebook.com/alquilerdeyatesenibiza" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="alquiler de yates en ibiza - Facebook">
									</a>
									<a href="https://www.instagram.com/ibiza_yachting_group_/" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.png" alt="alquiler de yates en ibiza - Instagram">
									</a>
									<a href="https://www.pinterest.com/ibizayachting/pins/" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.png" alt="alquiler de yates en ibiza - Pinterest">
									</a>
								</div>
							</div>
							<div class="col-12">
								<div class="bbFooter__social">
									<a href="https://twitter.com/IbizaYachting" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="alquiler de yates en ibiza - Twitter">
									</a>
									<a href="https://www.youtube.com/channel/UCLU6zJWMDeV-eFHFX8lz9Ww/videos" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/youtube.png" alt="alquiler de yates en ibiza - Youtube">
									</a>
									<a href="https://www.linkedin.com/in/alquiler-de-yates-en-ibiza-sin-intermediarios-460920a5" target="_blank">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="legal">
						<p>
							<?php _e('Company recorded in the Business Register of Barcelona (Spain)', 'cbt'); ?>: Tomo: 39538 Folio: 00028 Hoja: 349493. B-64533328 -  Alquiler de Yates en Ibiza & Barcos Barcelona S.L.
						</p>
						<a href="https://alquilerdeyatesenibiza.com/copyright/">
							ALQUILER DE YATES EN IBIZA S.L. <?php _e('All Rights reserved', 'cbt'); ?> - Copyright 2020
						</a> – <a href="https://alquilerdeyatesenibiza.com/politica-de-privacidad/">
							<?php _e('Privacy Policy', 'cbt'); ?>
						</a> – <a href="https://alquilerdeyatesenibiza.com/terminos-y-condiciones/">
							<?php _e('Terms of use', 'cbt'); ?>
						</a> – <a href="https://alquilerdeyatesenibiza.com/trabaje-con-nosotros/">
							<?php _e('Careers', 'cbt'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
