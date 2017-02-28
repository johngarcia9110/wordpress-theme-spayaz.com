<?php use Roots\Sage\Titles; ?>
<?php 
  $feature_image = 'http://dev.spayaz.com/wp-content/uploads/2017/02/whitebonepattern.png';
if(has_post_thumbnail()) {
     $feature_image = get_the_post_thumbnail_url($post->ID, 'large'); 
}

 ?>
<?php if(is_front_page()){
  
  //no need for page title on homepage
  
}elseif(is_page()){?>
  <?php 
    if($feature_image === 'http://dev.spayaz.com/wp-content/uploads/2017/02/whitebonepattern.png'){
        $feature_image = 'http://dev.spayaz.com/wp-content/uploads/2017/02/whitebonepattern.png';?>
        
        <div class="page-header" style="background-image: url(<?php echo $feature_image ?>);">
          
      <?php }else{ ?>
        
        <div class="page-header" style="background-image: url(<?php echo $feature_image ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    
      <?php } ?>
      
      <h1><?php echo the_title(); ?></h1>
      
  </div>  
  
<?php }elseif(!is_front_page() && is_home()){?>
  <?php $blogImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
        $blogFeatImage = $blogImage[0];?>
  <div class="page-header" style="background-image: url(<?php echo $blogFeatImage ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
      <h1> SpayAz Blog</h1>
  </div>  
<?php }else{?>
  <?php if(taxonomy_exists('location_state')){
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
  <?php $stateImage = get_field('state-image', $term); ?>
  <div class="page-header" style="background-image: url(<?php echo $stateImage ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
      <h1> <?php echo $term->name; ?></h1>
    <?php }else{?>
      <h1> <?php echo the_title(); ?></h1>
    <?php } ?>
  </div>
<?php }?>
