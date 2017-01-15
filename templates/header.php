<header>
  <div class="container">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerMain" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
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
           'depth'           => 2,
           'fallback_cb'     => 'bs4navwalker::fallback',
           'walker'          => new bs4navwalker()
        ]);?>
    </nav>
  </div>
</header>
