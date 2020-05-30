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

	<?php wp_head(); ?>
</head>

<!-- <div id="intro-overlay">
	<div class="anim-wrapper">
		<span class="glitch" data-text="Hola">Hola</span>
	</div>
	<div class="text">
    <span class="pseudo">Sliced</span>
    <span data-text="Sliced" class="part"></span>
    <span data-text="Sliced" class="part"></span>
	</div>
</div> -->

<div id="intro-overlay"></div>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'artcortijo' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<?php
				else :
					?>
					<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
					<?php
				endif; ?>
			</div>
			
      <?php get_template_part( 'template-parts/content', 'color-theme' ); ?>

			<!-- <nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'artcortijo' ); ?></button> -->
				<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'primary-menu',
				// 	'menu_id'        => 'main-menu',
				// ) );
				?>
			<!-- </nav> -->
			
		</header>

		<div id="content" class="site-content">