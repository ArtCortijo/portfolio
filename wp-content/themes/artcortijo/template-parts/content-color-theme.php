<section class="color-switcher">
  <div>
    <div class="color-switcher__icons">
      <?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/sun.svg' ); ?> <span>/</span> <?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/images/moon.svg' ); ?>
    </div>
    <div class="toggle-wrapper">
      <input type="checkbox" name="theme" id="color-switch" /><label for="color-switch">Toggle</label>
    </div>
  </div>
</section>