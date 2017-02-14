<?php
/*
Element Description: Spay Az Pricing Box
*/
 
// Element Class 
class spayazPriceBox extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'spayaz_pricebox_mapping' ) );
        add_shortcode( 'spayaz_pricebox', array( $this, 'spayaz_pricebox_html' ) );
    }
     
    // Element Mapping
    public function spayaz_pricebox_mapping() {
         
            // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
      }
         
      // Map the block with vc_map()
      vc_map( 

        array(
            'name' => __('Spay Az Price Box', 'text-domain'),
            'base' => 'spayaz_pricebox',
            'description' => __('Custom pricing table for spay az products/services.', 'text-domain'), 
            'category' => __('Custom Elements', 'text-domain'),   
            'icon' => 'icon-wpb-row',            
            'params' => array(   
                      
                array(
                    'type' => 'textfield',
                    'holder' => 'h3',
                    'class' => 'title-class',
                    'heading' => __( 'Name', 'text-domain' ),
                    'param_name' => 'title',
                    'value' => __( 'Awesome Product', 'text-domain' ),
                    'description' => __( 'Name of the product/service.', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Custom Group',
                ),  
                array(
                    'type' => 'textfield',
                    'holder' => 'p',
                    'class' => 'price-class',
                    'heading' => __( 'Price', 'text-domain' ),
                    'param_name' => 'price',
                    'value' => __( '$00.00', 'text-domain' ),
                    'description' => __( 'Enter the price of this product/service.', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Custom Group',
                ), 
                  
                array(
                    'type' => 'textarea',
                    'holder' => 'div',
                    'class' => 'text-class',
                    'heading' => __( 'Text', 'text-domain' ),
                    'param_name' => 'text',
                    'value' => __( 'Description', 'text-domain' ),
                    'description' => __( 'Box Text', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Custom Group',
                )                   
                     
            )
        )
      );                         
        
    } 
     
     
    // Element HTML
    public function spayaz_pricebox_html( $atts ) {
         
    // Params extraction
      extract(
        shortcode_atts(
            array(
                'title'   => '',
                'price' => '',
                'text' => '',
            ), 
            $atts
        )
      );

      // Fill $html var with data
      $html = '
      <div class="spayaz-pricebox">

        <h2 class="spayaz-pricebox-title">' . $title . '</h2>
        <p class="spayaz-pricebox-price">' . $price . '</p>
        <div class="spayaz-pricebox-text">
          <p class="text-weight-bold"> Includes: </p>
          <p>' . $text . '</p>
        </div>

      </div>';      

      return $html;
         
    } 
     
} // End Element Class
 
// Element Class Init
new spayazPriceBox();  

?>