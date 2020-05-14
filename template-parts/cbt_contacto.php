<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Base_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="pageHeader">
		<div class="pageHeader__title-container">
			<?php the_title( '<h1 class="pageHeader__title">', '</h1>' ); ?>
		</div>
		<div class="pageHeader__bottomLine"></div>
	</div><!-- .pageHeader -->

	<div class="entry-content content">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contacto__container">
						<h2 class="contacto__subtitle">Contacte con nosotros</h2>
						<div class="title-line title-line--center tittle-line--black"></div>
						<h5 class="contacto__intro">
							Empresa de alquiler de yates en Ibiza y el resto del mundo con más de
							4.000 embarcaciones a su disposición.
						</h5>
						<p class="contacto__text">
							Bienvenido a Alquiler de Yates en Ibiza, su socio experto en náutica de
							recreo. Visítenos en nuestras oficinas de lunes a Viernes
							en el horario de 10:00 a 18:00 horas y los sábados de 10:00 a 14:00
							horas. Fuera de este horario póngase en contacto con nosotros a través
							del teléfono <a class="phone" href="tel:0034 620 26 90 20">0034 620 26 90 20</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contacto__gray-container">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h5 class="contacto__gray-title">Nos encontrará</h5>
						<div class="title-line title-line--center tittle-line--black"></div>
					</div>
					<div class="col-12 col-md-6">
						<p class="contacto__gray-text">
							Carrer ses Figueres,31, <br>
							07800 Ibiza, Balearic Islands, <br>
							España <br>
							<a style="color:#000;" class="contacto__phone-mail" href="mailto:info@alquilerdeyatesenibiza.com">info@alquilerdeyatesenibiza.com</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<h5 class="contacto__gray-title">Llamenos</h5>
						<div class="title-line title-line--center tittle-line--black"></div>
					</div>
					<div class="col-12 col-md-6">
						<a style="color:#000;" class="contacto__gray-phone contacto__phone-mail phone" href="tel:0034 620 26 90 20">(0034) 620 26 90 20</a>
					</div>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1552.1235563677535!2d1.4600183916240446!3d38.918329008828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1299413ee29ba873%3A0x13b1aabee9c3bc3d!2sAlquiler%20de%20Yates%20en%20Ibiza%20%26%20Barcos%20Barcelona%20S.L.%20%7C%20OFFICIAL%20YACHTING%20SITE!5e0!3m2!1ses!2smx!4v1580434356046!5m2!1ses!2smx" class="contacto__map" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="yacht__extra-container">
						<div class="yacht__form-container" style="margin-top:0;">
							<h3>Preguntas o sugerencias</h3>
							<p>
								No dude en contactarnos para más información a través
								del formulario de contacto o al teléfono
								<a class="phone" href="tel:0034 620 26 90 20">0034 620 26 90 20</a>
								y le atenderemos a la mayor brevedad.
							</p>
							<?php echo do_shortcode('[contact-form-7 title="yate contact form"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'cbt' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
