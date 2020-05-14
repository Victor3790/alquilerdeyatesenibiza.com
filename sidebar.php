<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Base_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bbFooter__social">
					<a href="https://www.facebook.com/alquilerdeyatesenibiza" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="alquiler de yates en ibiza - Facebook">
					</a>
					<a href="https://www.instagram.com/ibiza_yachting/" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.png" alt="alquiler de yates en ibiza - Instagram">
					</a>
					<a href="https://www.pinterest.com/ibizayachting/pins/" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.png" alt="alquiler de yates en ibiza - Pinterest">
					</a>
				</div>
			</div>
			<div class="col-12">
				<div class="bbFooter__social">
					<a href="https://twitter.com/IbizaYachting" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" alt="alquiler de yates en ibiza - Twitter">
					</a>
					<a href="https://www.youtube.com/channel/UCLU6zJWMDeV-eFHFX8lz9Ww/videos" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/youtube.png" alt="alquiler de yates en ibiza - Youtube">
					</a>
					<a href="https://www.linkedin.com/in/alquiler-de-yates-en-ibiza-sin-intermediarios-460920a5" target="_blank">
						<img class="bbSidebar_social-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</aside><!-- #secondary -->
