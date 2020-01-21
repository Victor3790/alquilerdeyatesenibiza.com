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
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bbFooter__social">
									<a href="https://www.facebook.com/alquilerdeyatesenibiza">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="">
									</a>
									<a href="https://www.flickr.com/photos/ibizayachting/">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/flickr.png" alt="">
									</a>
									<a href="https://www.pinterest.com/ibizayachting/pins/">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.png" alt="">
									</a>
								</div>
							</div>
							<div class="col-12">
								<div class="bbFooter__social">
									<a href="https://twitter.com/IbizaYachting">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="">
									</a>
									<a href="https://www.youtube.com/channel/UCLU6zJWMDeV-eFHFX8lz9Ww/videos">
										<img class="bbFooter__social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/youtube.png" alt="">
									</a>
									<a href="https://www.linkedin.com/in/alquiler-de-yates-en-ibiza-460920a5/">
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
							Empresa registrada en el Registro Mercantil: Tomo: 39538 Folio: 00028 Hoja: 349493. B-64533328 -  Alquiler de Yates en Ibiza & Barcos Barcelona S.L.
						</p>
						<a href="https://alquilerdeyatesenibiza.com/copyright/">
							ALQUILER DE YATES EN IBIZA S.L.  Todos los derechos reservados - Copyright 2020
						</a> – <a href="https://alquilerdeyatesenibiza.com/politica-de-privacidad/">
							Política de privacidad
						</a> – <a href="https://alquilerdeyatesenibiza.com/terminos-y-condiciones/">
							Términos y condiciones
						</a> – <a href="https://alquilerdeyatesenibiza.com/trabaje-con-nosotros/">
							Trabaje con nosotros
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
