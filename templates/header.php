<header class="fixed-top">
  <div class="nav-top-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          
        </div>
        <div class="col-sm-6">
          <div class="location-social pull-right">
            <a href="https://www.facebook.com/spayneuterclinicaz" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/wearespayneuter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/spayneuterclinic/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.pinterest.com/wearespayneuter/" target="_blank"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-wrap">
    <div class="container">
      <nav class="navbar navbar-toggleable-md navbar-light">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerMain" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-text">Menu</span>
        </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="brand-logo" src="http://dev.spayaz.com/wp-content/uploads/2017/02/SNCBanner.png" alt="Spay Neuter Clinic Logo"></a>
          <?php
          // Use the new walker
          wp_nav_menu([
             'menu'            => 'primary_navigation',
             'theme_location'  => 'primary_navigation',
             'container'       => 'div',
             'container_id'    => 'navbarTogglerMain',
             'container_class' => 'collapse navbar-collapse pull-xs-right',
             'menu_id'         => false,
             'menu_class'      => 'nav navbar-nav',
             'depth'           => 3,
             'fallback_cb'     => 'bs4navwalker::fallback',
             'walker'          => new bs4navwalker()
          ]);?>
      </nav>
    </div>
  </div>
</header>
