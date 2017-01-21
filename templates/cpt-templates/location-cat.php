<div class="container">
  <div class="row">
  <?php
    $taxonomy = 'location_state';
    $terms = get_terms($taxonomy);

    if ( $terms && !is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $term ) { ?>
        <div class="col-sm-3">
          <div class="state-card">
            <div class="state-icon">
              <i class="state-icon state-arizona"></i>
            </div>
          <h2><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></h2>
          </div>
        </div>
      <?php } ?>
  <?php endif;?>
  </div>
</div>
