<?php
if(get_post_type( get_the_ID() ) == 'store_locations'){
  
  get_template_part('templates/content-single-store', 'locations'); 
  
}elseif(get_post_type( get_the_ID() ) == 'service_offerings'){
  
  get_template_part('templates/content-single', 'service');
  
}else{

  get_template_part('templates/content-single', get_post_type()); 
 
 }?>
