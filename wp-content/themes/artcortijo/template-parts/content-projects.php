<div class="appear-up sep"><h2>J'ai travaillé sur ces projets: </h2></div>
<section class="info projects">
  <div class="appear-up info__wrapper">
    <div class="grid-content">
      <?php
        $args = array(
          'post_type'   => 'projects',
          'post_status' => 'publish',
        );
        $projects = new WP_Query( $args );
      ?>
      <?php if( $projects->have_posts() ) : ?>
        <?php while( $projects->have_posts() ) : $projects->the_post(); ?>
          <?php $location = get_field('site_url'); ?>
          <a class="project" href="<?php echo $location; ?>" target="_blank">
            <div class="project__wrapper">
              <img class="project__img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
              <div class="project__info">
                <div class="project__hide">
                  <h4 class="project__title"><?php the_title(); ?></h4>
                  <p class="project__desc"><?php the_content(); ?></p>
                </div>
              </div>
            </div>
          </a>
        <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>
   </div>
  </div>
</section>