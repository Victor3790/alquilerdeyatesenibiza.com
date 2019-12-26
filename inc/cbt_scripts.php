<?php
/**
 * Enqueue scripts and styles.
 */
function cbt_scripts() {
	wp_enqueue_style('cbt-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400|Playfair+Display:400,700&display=swap');

	wp_enqueue_style( 'cbt-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cbt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cbt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'cbt-main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'cbt-small-menu', get_template_directory_uri() . '/js/smallMenu.js', array('jquery'), '1.0', false );

	wp_enqueue_script( 'cbt-to-top', get_template_directory_uri() . '/js/toTop.js', array('jquery'), '1.0', true );

}
