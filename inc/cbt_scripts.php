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

	wp_enqueue_script( 'cbt-phone', get_template_directory_uri() . '/js/phone.js', array('jquery'), '1.0', true );


	if(is_front_page()){

		wp_enqueue_style('cbt-swiper-style', get_template_directory_uri() . '/css/swiper.min.css');

		wp_enqueue_style( 'cbt-index-styles', get_template_directory_uri() . '/css/index.css' );

		wp_enqueue_script('cbt-swiper-script', get_template_directory_uri() . '/js/swiper.min.js', array(), '1.0', false);

		wp_enqueue_script('cbt-index-header-script', get_template_directory_uri() . '/js/index-header.js', array('jquery','cbt-swiper-script'));

		wp_enqueue_script('cbt-scrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), '1.0', true);

		wp_enqueue_style('cbt-odometer-style', get_template_directory_uri() . '/css/odometer-theme-minimal.css');

		wp_enqueue_script('cbt-odometer-script', get_template_directory_uri() . '/js/odometer.min.js', array('jquery'), '1.0', true);

		wp_enqueue_style('cbt-aos-style', get_template_directory_uri() . '/css/aos.css');

		wp_enqueue_script('cbt-aos-script', get_template_directory_uri() . '/js/aos.js', array(), '1.0', true);

		wp_enqueue_script('cbt-range-script', get_template_directory_uri() . '/js/jquery.range.js', array('jquery'), '1.0', true);

		wp_enqueue_style('cbt-range-style', get_template_directory_uri() . '/css/jquery.range.css');

		wp_enqueue_style( 'cbt-form-styles', get_template_directory_uri() . '/css/searchForm.css' );

		wp_enqueue_script('cbt-form-script', get_template_directory_uri() . '/js/searchForm.js', array('jquery', 'cbt-range-script'), '1.0', true);

		wp_enqueue_style('cbt-yate-archive-style', get_template_directory_uri() . '/css/yachtList.css');

		wp_enqueue_script('cbt-index-footer-script', get_template_directory_uri() . '/js/index-footer.js', array('jquery','cbt-odometer-script','cbt-aos-script'));
	}

	if (is_page() && !is_front_page()) {
		wp_enqueue_style('cbt-page-style', get_template_directory_uri() . '/css/page.css');
	}

	if(is_singular('yate')){
		wp_enqueue_style('cbt-page-style', get_template_directory_uri() . '/css/page.css');

		wp_enqueue_style('cbt-pageYacht-style', get_template_directory_uri() . '/css/pageYacht.css');

		wp_enqueue_style('cbt-contact-form', get_template_directory_uri() . '/css/form.css');

		wp_enqueue_script('cbt-range-script', get_template_directory_uri() . '/js/jquery.range.js', array('jquery'), '1.0', true);

		wp_enqueue_style('cbt-range-style', get_template_directory_uri() . '/css/jquery.range.css');

		wp_enqueue_style( 'cbt-form-styles', get_template_directory_uri() . '/css/searchForm.css' );

		wp_enqueue_script('cbt-form-script', get_template_directory_uri() . '/js/searchForm.js', array('jquery', 'cbt-range-script'), '1.0', true);
	}

	if(is_post_type_archive('yate')){
		wp_enqueue_style('cbt-yate-archive-style', get_template_directory_uri() . '/css/yachtList.css');

		wp_enqueue_style('cbt-yate-pagination-style', get_template_directory_uri() . '/css/pagination.css');

		wp_enqueue_script('cbt-range-script', get_template_directory_uri() . '/js/jquery.range.js', array('jquery'), '1.0', true);

		wp_enqueue_style('cbt-range-style', get_template_directory_uri() . '/css/jquery.range.css');

		wp_enqueue_style( 'cbt-form-styles', get_template_directory_uri() . '/css/searchForm.css' );

		wp_enqueue_script('cbt-form-script', get_template_directory_uri() . '/js/searchForm.js', array('jquery', 'cbt-range-script'), '1.0', true);
	}

	if(is_page('contacto')){
		wp_enqueue_style('cbt-contact-style', get_template_directory_uri() . '/css/contact.css');

		wp_enqueue_style('cbt-contact-form', get_template_directory_uri() . '/css/form.css');
	}

	if (is_single()) {
		wp_enqueue_style('cbt-page-style', get_template_directory_uri() . '/css/page.css');
		wp_enqueue_style('cbt-posts-style', get_template_directory_uri() . '/css/posts.css');
	}

	if (is_home()) {
		wp_enqueue_style('cbt-blog-page-style', get_template_directory_uri() . '/css/page.css');
		wp_enqueue_style('cbt-post-archive-style', get_template_directory_uri() . '/css/post-archive.css');
		wp_enqueue_style('cbt-posts-home-style', get_template_directory_uri() . '/css/posts.css');
		wp_enqueue_style('cbt-posts-home-pagination-style', get_template_directory_uri() . '/css/pagination-blog.css');
	}

	if (is_search()) {
		wp_enqueue_style('cbt-search-archive-style', get_template_directory_uri() . '/css/post-archive.css');
	}

	if (is_category()) {
		wp_enqueue_style('cbt-search-post-archive-style', get_template_directory_uri() . '/css/post-archive.css');
	}

}
