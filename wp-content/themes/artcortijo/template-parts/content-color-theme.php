<section class="color-switcher appear-up">
  <div class="color-switcher__wrapper">
    <div class="color-switcher__icons">
      <span><?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/sun.svg' ); ?></span>
      <div class="toggle-wrapper">
        <input type="checkbox" name="theme" id="color-switch" /><label for="color-switch">Toggle</label>
      </div>
      <span><?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/moon.svg' ); ?></span>
    </div>
  </div>
</section>