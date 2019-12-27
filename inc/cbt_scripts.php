<?php
/**
 * Enqueue scripts and styles.
 */
function cbt_scripts() {
	wp_enqueue_style('cbt-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400|Playfair+Display:400,700&display=swap');

	wp_enqueue_style( 'cbt-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'cbt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cbt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//Custom styles and scripts
	wp_enqueue_style( 'cbt-main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'cbt-small-menu', get_template_directory_uri() . '/js/smallMenu.js', array('jquery'), '1.0', false );

	wp_enqueue_script( 'cbt-to-top', get_template_directory_uri() . '/js/toTop.js', array('jquery'), '1.0', true );

	if(is_front_page()){

		wp_enqueue_style('cbt-swiper-style', get_template_directory_uri() . '/css/swiper.min.css');

		wp_enqueue_style( 'cbt-index-styles', get_template_directory_uri() . '/css/index.css' );

		wp_enqueue_script('cbt-swiper-script', get_template_directory_uri() . '/js/swiper.min.js', array(), '1.0', false);

		wp_enqueue_script('cbt-index-header-script', get_template_directory_uri() . '/js/index-header.js', array('jquery','cbt-swiper-script'));

		wp_enqueue_script('cbt-scrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), '1.0', true);

		wp_enqueue_style('cbt-odometer-style', get_template_directory_uri() . '/css/odometer-theme-minimal.css');

		wp_enqueue_script('cbt-odometer-script', get_template_directory_uri() . '/js/odometer.min.js', array('jquery'), '1.0', true);

		wp_enqueue_script('cbt-index-footer-script', get_template_directory_uri() . '/js/index-footer.js', array('jquery','cbt-odometer-script'));
	}

	if (is_page()) {
		wp_enqueue_style('cbt-page-style', get_template_directory_uri() . '/css/page.css');
	}

}
