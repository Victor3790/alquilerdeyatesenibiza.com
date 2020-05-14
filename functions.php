<?php
/**
 * Custom Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom_Base_Theme
 */
include (get_theme_file_path('/inc/cbt_setup.php'));
add_action( 'after_setup_theme', 'cbt_setup' );

include (get_theme_file_path('/inc/cbt_content_width.php'));
add_action( 'after_setup_theme', 'cbt_content_width', 0 );

include (get_theme_file_path('/inc/cbt_widgets_init.php'));
add_action( 'widgets_init', 'cbt_widgets_init' );

include (get_theme_file_path('/inc/cbt_scripts.php'));
add_action( 'wp_enqueue_scripts', 'cbt_scripts' );

//Load extra styles in head if home
include (get_theme_file_path('/inc/cbt_index_styles.php'));
add_action( 'wp_head', 'cbt_index_styles' );

//Load extra styles in head if page
include (get_theme_file_path('/inc/cbt_page_styles.php'));
add_action( 'wp_head', 'cbt_page_styles' );

//Load extra styles in head if 'alquiler-yates'
include (get_theme_file_path('/inc/cbt_alquiler_styles.php'));
add_action( 'wp_head', 'cbt_alquiler_styles' );

//Load extra styles in head if 'yates-lujo'
include (get_theme_file_path('/inc/cbt_lujo_styles.php'));
add_action( 'wp_head', 'cbt_lujo_styles' );

//Load extra styles in head if 'yate type'
include (get_theme_file_path('/inc/cbt_yate_styles.php'));
add_action( 'wp_head', 'cbt_yate_styles' );

//Load extra styles in head if 'post'
include (get_theme_file_path('/inc/cbt_post_styles.php'));
add_action( 'wp_head', 'cbt_post_styles' );

//Load extra styles in head if 'blog'
include (get_theme_file_path('/inc/cbt_blog_styles.php'));
add_action( 'wp_head', 'cbt_blog_styles' );

//Load form styles
include (get_theme_file_path('/inc/cbt_search_form_styles.php'));
add_action( 'wp_head', 'cbt_search_form_styles' );

//Register the custom query vars for the search form
include (get_theme_file_path('/inc/cbt_query_vars.php'));
add_filter( 'query_vars', 'cbt_query_vars' );

//Function for custom queries
include (get_theme_file_path('/inc/cbt_search_query.php'));
add_action( 'pre_get_posts', 'cbt_search_query', 1 );

//Add Custom image sizes
add_image_size('cbt_large', 1900, 850, true);
add_image_size('cbt_large_yacht', 1600, 700, true);
add_image_size('cbt_small', 800, 300, true);
add_image_size('cbt_small_retina', 1400, 600, true);
add_image_size('cbt_small_landscape', 900, 450, true);
add_image_size('cbt_small_landscape_retina', 1500, 850, true);
add_image_size('cbt_thumbnail', 900, 700, true);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// Polylang Shortcode - https://wordpress.org/plugins/polylang/
// Add this code in your functions.php
// Put shortcode [polylang] to post/page for display flags

function polylang_shortcode() {
	ob_start();
	pll_the_languages(array(
		'show_flags'		=>1,
		'show_names'		=>1,
		'hide_current'	=>1
		)
	);
	$flags = ob_get_clean();
	return $flags;
}
add_shortcode( 'polylang', 'polylang_shortcode' );
