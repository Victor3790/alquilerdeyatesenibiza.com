<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Base_Theme
 */

?>
<?php
	$fields = get_field_objects();
	$subField = get_field('sub_especificaciones');
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
        <div class="col-12 col-lg-8">
          <div class="container">
            <div class="row">
              <div class="col-8 col-sm-7 col-md-6 col-lg-7">
                <h4 class="yacht__type"><?php _e( $subField['tipo'], 'cbt'); ?></h4>
                <h2 class="yacht__name"><?php the_title(); ?></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <h5 class="yacht__guests-title"><?php _e('Guests', 'cbt'); ?></h5>
              </div>
              <div class="col-4">
                <h5 class="yacht__cabins-title"><?php _e('Cabins', 'cbt'); ?></h5>
              </div>
              <div class="col-4">
                <h5 class="yacht__crew-title"><?php _e('Year', 'cbt'); ?></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <h2 class="yacht__guests"><?php echo $subField['invitados']; ?></h2>
              </div>
              <div class="col-4">
                <h2 class="yacht__cabins"><?php echo $subField['camarotes']; ?></h2>
              </div>
              <div class="col-4">
                <h2 class="yacht__crew"><?php echo $subField['anio']; ?></h2>
              </div>
            </div>
						<div class="row">
							<div class="col">
								<?php the_content(); ?>
							</div>
						</div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <h2><?php _e('Specifications', 'cbt'); ?></h2>
          <div class="yacht__details">
            <table>
							<?php
								if($fields) :?>
										<?php foreach ($fields as $field) : ?>
											<?php if($field['value'] && !is_array($field['value']) && !is_numeric($field['value'])) : ?>
												<tr class="yacht__detail">
													<th class="yacht__detail-header"><?php _e ($field['label'], 'cbt' )?></th>
													<td class="yacht__detail-data"><?php _e ($field['value'], 'cbt'); ?></td>
												</tr>
											<?php endif; ?>
										<?php endforeach; ?>
								<?php endif; ?>
            </table>
          </div>
        </div>
      </div>
		</div>

		<div class="yacht__slider-container">
			<?php
				$gallery = get_field('numero_de_galeria');
				$shortcode = '[sliders_pack id="'.$gallery.'"]';
				echo do_shortcode($shortcode);
			?>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="yacht__extra-container">
						<div>
							<p>
								<i>
									<?php
									 	_e('Note: The descriptions of all yachts, sails and ships have been previously revised and published in good faith. ', 'cbt');
										_e('They are supposed to be right but can not be guaranteed because there may be errors in the specifications.', 'cbt')
									?>
								</i>
							</p>
							<p>
								<i>
									<?php
										_e('Alquiler de Yates en Ibiza & Barcos Barcelona S.L., does not guarantee ', 'cbt');
										_e('nor do we assume any legal obligation for the exactness, ', 'cbt');
										_e('integrity or utility of any image or information published ', 'cbt');
										_e('in our web. The prices and details of the ship may vary ', 'cbt');
										_e('depending on the season and these features will be specified ', 'cbt');
										_e('in your charter contract.', 'cbt');
									?>
								</i>
							</p>
							<p>
								<i>
									<?php
										_e('Some of the luxury ships and sails detailed in this web site ', 'cbt');
										_e('may have an extra charge for positioning ', 'cbt');
										_e('and later re positioning of the ship ', 'cbt');
										_e('at the required port of sailing zone.', 'cbt');
									?>
								</i>
							</p>
						</div>
						<div class="yacht__form-container">
							<h3><?php _e('Questions or suggestions', 'cbt'); ?></h3>
							<p>
								<?php
									_e('Do not hesitate to contact us for further information ', 'cbt');
									_e('through the contact form or the phone ', 'cbt');
								?>
								<a class="phone" href="tel:0034 620 26 90 20">0034 620 26 90 20</a>
								<?php
									_e(', we will answer as soon as possible.', 'cbt');
								?>
							</p>
							<?php echo do_shortcode('[cf7form cf7key="yate-contact-form"]'); ?>
						</div>
					</div>
				</div>
			</div>
    </div>
	</div><!-- .entry-content -->

	<?php get_template_part( 'template-parts/cbt_yacht_search_form' ); ?>

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
