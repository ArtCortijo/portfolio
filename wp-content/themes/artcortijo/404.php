<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package artcortijo
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="error-404 not-found">
			<h1 class=" text-gradient-opt1"><?php _e( "Page non trouvée", 'artcortijo' ); ?></h1>
			<h2 class="error-404__text"><?php _e( "Oh. On dirait que vous avez pris un mauvais virage quelque part. Il n'y a rien à voir ici l'ami.", 'artcortijo' ); ?></h2>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-404__link link__underline"><h2><?php _e( "Cliquez ici pour revenir à la page d'accueil", 'artcortijo' ); ?></h2></a>
			<p><?php _e( "Ou vous pouvez également rester ici. C'est cool.", 'artcortijo' ); ?></p>
		</section>
	</main>
</div>

<?php
get_footer();
