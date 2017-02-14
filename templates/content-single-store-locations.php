
<?php while (have_posts()) : the_post(); ?>
  <?php 
    $description = get_field('location_description');
    $hours = get_field('location_hours');
    $address = get_field('location_address');
    $gmap = get_field('google_maps');
    $phoneNumber = get_field('location_phone_numer');
    $facebook = get_field('location_facebook');
    $yelp = get_field('location_yelp');
   ?>
    <div class="col-sm-12 col-md-6">
      <img class="img-fluid margin-bottom" src="<?php the_post_thumbnail_url(); ?>" alt="Store Location Image">
      <div class="location-social">
        <span>Follow Us: </span>
        <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $yelp ?>"><i class="fa fa-yelp"></i></a>
        <a href="https://twitter.com/wearespayneuter"><i class="fa fa-twitter"></i></a>
      </div>
      <h2>About This Location: </h2>
      <p><?php echo $description; ?></p>
    </div>
    <div class="entry-content col-sm-12 col-md-6">
      <div class="location-store-info">
        <div class="location-store-infoblock">
          <h3>Store Hours: </h3>
          <?php echo $hours ?>
        </div>
        <div class="location-store-infoblock">
          <h3>Address: </h3>
          <?php echo $address ?>
        </div>
        <div class="location-store-infoblock">
          <h3>Contact: </h3>
          <p><i class="fa fa-phone"></i> Phone: <a href:"tel:<?php echo $phoneNumber ?>"><?php echo $phoneNumber ?></a></p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#location-modal">
            <i class="fa fa-envelope-o"></i> Email This Location
          </button>
        </div>
      </div>
      <div class="google-map">
        <div class="acf-map">
         <div class="marker" data-lat="<?php echo $gmap['lat']; ?>" data-lng="<?php echo $gmap['lng']; ?>"></div>
        </div>
      </div>
    </div>
      <div class="modal" id='location-modal'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Email This Location</h5>
            </div>
            <div class="modal-body">
              <?php $formId = get_field('contact_form_id');?>
              <?php echo do_shortcode('[gravityform id="'.$formId.'" title=false description=false]'); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
