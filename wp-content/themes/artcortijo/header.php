<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcortijo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php get_template_part( 'template-parts/content', 'favicon' ); ?>

	<?php wp_head(); ?>
</head>

<div class="intro-anim"></div>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'artcortijo' ); ?></a>
		<header id="masthead" class="site-header">
			<nav id="site-navigation" class="art-header">
				<a class="art-header__home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span>Art</span>
					<?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/portrait.svg' ); ?>
				</a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'main-menu',
				) );
				?>
			</nav>
			<?php get_template_part( 'template-parts/content', 'color-theme' ); ?>
		</header>

		<div id="content" class="site-content">