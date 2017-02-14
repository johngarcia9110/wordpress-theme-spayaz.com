<div class="container">
  <div class="row space-bottom">
    <?php $loop = new WP_Query( array( 'post_type' => 'service_offerings', 'posts_per_page' => -1 ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-sm-12 col-md-12 col-lg-4 text-center">
        <div class="service-card" onclick="location.href='<?php echo the_permalink(); ?>';">
          <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
          <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>
