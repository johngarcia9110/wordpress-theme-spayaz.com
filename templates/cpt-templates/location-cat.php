<div class="container">
  <div class="row space-bottom">
  <?php
    $taxonomy = 'location_state';
    $terms = get_terms($taxonomy);

    if ( $terms && !is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $term ) { ?>
        <div class="col-sm-12 col-md-12 col-lg-4 state-card-column">
            <div class="state-card text-center" onclick="location.href='<?php echo get_term_link($term->slug, $taxonomy); ?>';">
              <div class="state-icon-wrapper">
                <i class="state-icon <?php echo 'state-' . strtolower($term->name); ?>"></i>
              </div>
              <h2><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></h2>
            </div>
        </div>
      <?php } ?>
  <?php endif;?>
  </div>
</div>
