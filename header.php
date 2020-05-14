<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Base_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cbt' ); ?></a>

	<header id="masthead" class="site-header cbtHeader">
		<div id="smallMenuIcon" class="cbtSmallMenu">
			<div class="cbtSmallMenu__bar"></div>
			<div class="cbtSmallMenu__bar"></div>
			<div class="cbtSmallMenu__bar"></div>
		</div>
		<div class="site-branding cbtHeader__logo-container">
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title cbtHeader__logo-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title cbtHeader__logo-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cbt_description = get_bloginfo( 'description', 'display' );
			if ( $cbt_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cbt_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="lang_swithcer">
			<?php echo do_shortcode('[polylang]'); ?>
		</div>

		<nav id="site-navigation" class="main-navigation cbtHeader__menu-container">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	   => 'cbtHeader__navList-container',
			) );
			?>
		</nav><!-- #site-navigation -->

		<nav id="smallMenu" class="main-navigation cbtHeader__menu-container-small">
			<span id="close" class="cbtSmallMenu__close"></span>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	   => 'cbtHeader__navList-container-small',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
