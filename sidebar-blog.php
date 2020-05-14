<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Base_Theme
 */

if ( ! is_active_sidebar( 'cbt-sidebar-blog' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'cbt-sidebar-blog' ); ?>
</aside><!-- #secondary -->
