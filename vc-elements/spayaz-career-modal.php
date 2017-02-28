<?php
/*
Element Description: Spay Az Pricing Box
*/
 
// Element Class 
class spayazCareerButton extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'spayaz_careerbutton_mapping' ) );
        add_shortcode( 'spayaz_careerbutton', array( $this, 'spayaz_careerbutton_html' ) );
    }
     
    // Element Mapping
    public function spayaz_careerbutton_mapping() {
         
            // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
      }
         
      // Map the block with vc_map()
      vc_map( 

        array(
            'name' => __('Career Button Pop Up', 'text-domain'),
            'base' => 'spayaz_careerbutton',
            'description' => __('Career page application pop up.', 'text-domain'), 
            'category' => __('Custom Elements', 'text-domain'),   
            'icon' => 'icon-wpb-row',            
            
        )
      );                         
        
    } 
     
     
    // Element HTML
    public function spayaz_careerbutton_html( $atts ) {
         
    // Params extraction
      // extract(
      //   shortcode_atts(
      //       array(
      //           'title'   => '',
      //           'price' => '',
      //           'text' => '',
      //       ), 
      //       $atts
      //   )
      // );

      // Fill $html var with data
      $html = '
      <button class="btn btn-primary spay-btn-orange" type="button" data-toggle="modal" data-target="#career-modal">
      <i class="fa fa-envelope-o"></i> Submit Application
      </button>
      ';      

      return $html;
         
    } 
     
} // End Element Class
 
// Element Class Init
new spayazCareerButton();  

?>