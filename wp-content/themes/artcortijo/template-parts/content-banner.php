<section id="site-banner" class="banner border-gradient-opt1">
  <span class="banner__anim border-top"></span>
  <span class="banner__anim border-right"></span>
  <span class="banner__anim border-bottom"></span>
  <span class="banner__anim border-left"></span>
  <div class="banner__wrapper">
    <div class="banner__info">
      <h1 class="appear text-gradient-opt1">Arturo Cortijo Purizaca</h1>
      <h2 class="appear text-gradient-opt1"><?php _e('Développeur Front-End', 'artcortijo') ?></h2>
      <p class="appear description"><?php the_content(); ?></p>
    </div>
    <div class="banner__portrait appear-up"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/portrait.svg' ); ?></div>
  </div>
</section>
