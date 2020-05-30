<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artcortijo
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'banner' ); ?>
      <div class="appear-up sep"><h2>À propos de moi</h2></div>
      <div class="grid-content col-2">
        <?php get_template_part( 'template-parts/content', 'experience' ); ?>
        <?php get_template_part( 'template-parts/content', 'education' ); ?>
      </div>
      <?php get_template_part( 'template-parts/content', 'skills' ); ?>
      <?php get_template_part( 'template-parts/content', 'other-skills' ); ?>
      <?php get_template_part( 'template-parts/content', 'projects' ); ?>
      <div class="appear-up sep"><h2>Infos additionnelles...</h2></div>
      <div class="grid-content col-2">
        <?php get_template_part( 'template-parts/content', 'qualities' ); ?>
        <?php get_template_part( 'template-parts/content', 'hobbies' ); ?>
      </div>
      <?php get_template_part( 'template-parts/content', 'contact' ); ?>
    <?php endwhile; // End of the loop. ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
