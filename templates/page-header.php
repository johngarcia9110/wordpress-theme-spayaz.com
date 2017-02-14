<?php use Roots\Sage\Titles; ?>
<?php 
if(has_post_thumbnail()) {
     $feature_image = get_the_post_thumbnail_url($post->ID, 'thumbnail'); 

}

 ?>
<?php if(is_front_page()){
  
}elseif(is_page()){?>
  <div class="page-header" style="background-image: url(<?php echo $feature_image ?>); background-size: cover;">
      <h1><?php echo the_title(); ?></h1>
  </div>  
  
<?php }elseif(!is_front_page() && is_home()){?>
  <div class="page-header">
      <h1> SpayAz Blog</h1>
  </div>  
<?php }else{?>
  <div class="page-header">
    <?php if(taxonomy_exists('location_state')){
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
      <h1> <?php echo $term->name; ?></h1>
    <?php }else{?>
      <h1> <?php echo the_title(); ?></h1>
    <?php } ?>
  </div>
<?php }?>
