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
                <h4 class="yacht__type"><?php echo $subField['tipo']; ?></h4>
                <h2 class="yacht__name"><?php the_title(); ?></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <h5 class="yacht__guests-title">Invitados</h5>
              </div>
              <div class="col-4">
                <h5 class="yacht__cabins-title">Camarotes</h5>
              </div>
              <div class="col-4">
                <h5 class="yacht__crew-title">Año</h5>
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
          </div>
					<div>
						<?php the_content(); ?>
					</div>
        </div>
        <div class="col-12 col-lg-4">
          <h2>Especificaciones</h2>
          <div class="yacht__details">
            <table>
							<?php
								if($fields) :?>
										<?php foreach ($fields as $field) : ?>
											<?php if($field['value'] && !is_array($field['value']) && !is_numeric($field['value'])) : ?>
												<tr class="yacht__detail">
													<th class="yacht__detail-header"><?php echo $field['label'] ?></th>
													<td class="yacht__detail-data"><?php echo $field['value']; ?></td>
												</tr>
											<?php endif; ?>
										<?php endforeach; ?>
								<?php endif; ?>
            </table>
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