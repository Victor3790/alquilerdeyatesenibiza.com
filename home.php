<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Base_Theme
 */

get_header();
?>
	<div class="blogHeader"></div><!-- .pageHeader -->

	<div id="primary" class="content-area content">
		<main id="main" class="site-main container">
			<div class="row">
				<div class="col-12">
					<h1 style="margin-bottom: 30px;">Últimas noticias náuticas de Ibiza y Formentera.</h1>
					<div class="title-line title-line--center tittle-line--black" style="margin-bottom: 25px;"></div>
					<h3>Las noticias más relevantes de Ibiza y Formentera</h3>
				</div>
				<div class="col-12">
					<?php get_sidebar('blog'); ?>
				</div>
				<div class="col-12 col-md-8">
					<div class="row">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/cbt_result_posts' );

							endwhile;


						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<p>Más noticias</p>
							<div class="cbt_pagination">
								<?php
								echo paginate_links(array(
																			'prev_next' => false
																		));
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 widget-container">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
