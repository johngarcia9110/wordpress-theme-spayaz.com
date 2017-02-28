<article <?php post_class('location-listing container'); ?>>
  <?php 
    $hours = get_field('location_hours');
    $address = get_field('location_address');
    $phoneNumber = get_field('location_phone_numer');
    $facebook = get_field('location_facebook');
    $yelp = get_field('location_yelp');
   ?>
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" alt=" Image of Location ">
      </div>
      <div class="col-sm-12 col-md-6">
        <header>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="location-brief-info">
          <div class="location-info-section">
            <p><strong>Hours:</strong></p>
            <p><?php echo $hours ?></p>
          </div>
          <div class="location-address">
            <p><strong>Address: </strong></p>
            <p><?php echo $address ?></p>
          </div>
          <div class="location-phone">
            <p><strong>Phone:</strong></p>
            <p><a href:"tel:<?php echo $phoneNumber ?>"><?php echo $phoneNumber ?></a></p>
          </div>
          <a class="btn btn-lg spay-btn-orange" href="<?php the_permalink();?>"> View This Location </a>
        </div>
        
      </div>
    </div>
  <div class="entry-summary">
    <?php //the_excerpt(); ?>
  </div>
</article>