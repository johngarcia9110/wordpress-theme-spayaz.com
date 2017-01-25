
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
  <article <?php post_class('row'); ?>>
    <div class="col-sm-12 col-md-6">
      <h2>About This Location: </h2>
      <p><?php echo $description; ?></p>
    </div>
    <div class="entry-content col-sm-12 col-md-6">
      <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="Store Location Image">
      <div class="location-info">
        <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $yelp ?>"><i class="fa fa-yelp"></i></a>
        <a href="https://twitter.com/wearespayneuter"><i class="fa fa-twitter"></i></a>
      </div>
      <div class="google-map">

        <div class="acf-map">
         <div class="marker" data-lat="<?php echo $gmap['lat']; ?>" data-lng="<?php echo $gmap['lng']; ?>"></div>
        </div>

      </div>
      
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
