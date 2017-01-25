<?php use Roots\Sage\Titles; ?>

<?php if(is_front_page()){
  
}else{?>
  <div class="page-header">
    <?php if(taxonomy_exists('location_state')){
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
      <h1> <?php echo $term->name; ?></h1>
    <?php }else{?>
      <h1> <?php echo the_title(); ?></h1>
    <?php } ?>
  </div>
<?php }?>
