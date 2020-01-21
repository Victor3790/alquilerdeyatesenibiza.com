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
					<h2><?php the_field('yates_lujo_titulo'); ?></h2>
					<div style="margin-top: 25px; margin-bottom: 25px;" class="title-line title-line--center tittle-line--black"></div>
					<p>
						<?php the_field('yates_lujo_uno'); ?>
					</p>
        </div>
      </div>
    </div>

		<div class="pageImg"></div>

    <div class="container">
      <div class="row">
        <div class="col">
					<p>
						<?php the_field('yates_lujo_dos'); ?>
					</p>
        </div>
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
