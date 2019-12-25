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

	<footer id="colophon" class="site-footer bbFooter">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<h4 class="bbFooter__title">Contacto</h4>
					<p class="bbFooter__text">
						Carrer de Juan Carles nº1,<br>
						Ibiza Nueva,<br>
						07800 (Ibiza).
					</p>
					<p class="bbFooter__text">
						Llámanos: 620 269 020 <br>
						Escríbenos: correo@barcosbarcelona.com
					</p>
				</div>
				<div class="col-12 col-md-4">
					<h4 class="bbFooter__title">Horario</h4>
					<p class="bbFooter__text">
						De Lunes a Viernes <br>
						10:00 - 18:00 h. <br>
						Sábado <br>
						10:00 - 14:00 h.
					</p>
				</div>
				<div class="col-12 col-md-4">
					<div class="bbFooter__social">
						<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="">
						<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="">
						<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
