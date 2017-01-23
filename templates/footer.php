<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <?php dynamic_sidebar('sidebar-footer-left'); ?>
      </div>
      <div class="col-sm-12 col-md-4">
        <?php dynamic_sidebar('sidebar-footer-right'); ?>
      </div>
      <div class="col-sm-12 col-md-4">
        <?php
        wp_nav_menu([
           'menu'            => 'secondary_navigation',
           'theme_location'  => 'secondary_navigation',
           'container'       => 'div',
           'container_id'    => 'footer-navigation',
           'container_class' => 'footer-navigation-container',
           'menu_id'         => false,
           'menu_class'      => 'nav pull-right',
           'depth'           => 2,
           'fallback_cb'     => 'bs4navwalker::fallback',
           'walker'          => new bs4navwalker()
        ]);?>
      </div>
    </div>
  </div>
  <div class="container">
    <p class="text-center">Copyright 2017 Arizona Spay and Neuter Clinic</p>
  </div>
</footer>
