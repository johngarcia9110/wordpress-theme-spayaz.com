<?php
if(get_post_type( get_the_ID() ) == 'store_locations'){
  
  get_template_part('templates/content-single-store', 'locations'); 
  
}else{

  get_template_part('templates/content-single', get_post_type()); 
 
 }?>
