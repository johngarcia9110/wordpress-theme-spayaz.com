<?php 
// Parent container
vc_map( array(
    'name'                    => __( 'Price Table' , 'textdomain' ),
    'base'                    => 'wbc_item',
    'icon'                    => 'icon-wpb-row',
    'description'             => __( 'Container for Item', 'textdomain' ),
    'as_parent'               => array('only' => 'wbc_inner_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    'content_element'         => true,
    'show_settings_on_create' => true,
    'params'                  => array(
                //BEGIN ADDING PARAMS
                array(
                    'type'        => 'textfield',
                    'heading'     => __( '', 'textdomain' ),
                    'param_name'  => 'heading',
                    'description' => __( 'Pricing Table Title', 'textdomain' ),
                ),
                //END ADDING PARAMS
    ),
    "js_view" => 'VcColumnView'
) );
// Nested Element
vc_map( array(
    'name'            => __('Product/Service Item', 'textdomain'),
    'base'            => 'wbc_inner_item',
    'description'     => __( 'Items "Item".', 'textdomain' ),
    'icon'            => 'icon-wpb-row',
    'content_element' => true,
    'as_child'        => array('only' => 'wbc_item'), // Use only|except attributes to limit parent (separate multiple values with comma)
    'params'          => array(
                
                //BEGIN ADDING PARAMS
                array(
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => __( 'Name of Product/service', 'textdomain' ),
                    'param_name' => 'contentname',
                    'value' => __( '<p>Name of Product</p>', 'textdomain' )
                ),
                array(
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => __( 'Price', 'textdomain' ),
                    'param_name' => 'contentprice',
                    'value' => __( '$00.00', 'textdomain' )
                ),
                //END ADDING PARAMS
    ),
) );
// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer'))
{
    class WPBakeryShortCode_Wbc_Item extends WPBakeryShortCodesContainer {
    }
}
// Replace Wbc_Inner_Item with your base name from mapping for nested element
if(class_exists('WPBakeryShortCode'))
{
    class WPBakeryShortCode_Wbc_Inner_Item extends WPBakeryShortCode {
    }
}
// Shortcodes, just for this example for testing :)
// I keep the shortcodes in their own file so that 
// they don't rely on VC for outputting them, so 
// shortcodes will work when VC not enabled/installed 
// as some users may not want to use VC.
if(!function_exists('wbc_item_output')){
    
    function wbc_item_output( $atts, $content = null){
        $atts =  extract(shortcode_atts( 
            array( 
            'heading'             => '',
        ),$atts )) ;
        $html = '';
        $html .= '<div class="spayaz-pricebox">';
        if(!empty($heading)){
            $html .= '<h2 class="spayaz-pricebox-title">'.$heading.'</h2>';
        }
        $html .= do_shortcode( $content );
        $html .= '</div>';
        return $html;
    }
    add_shortcode( 'wbc_item' , 'wbc_item_output' );
}
if(!function_exists('wbc_inner_item_output')){
    
    function wbc_inner_item_output($atts, $content = null){
        $atts =  extract(shortcode_atts( 
            array( 
            'contentname'             => 'test',
            'contentprice'        => '',
        ),$atts )) ;
        $html = '';
        $html .= '<div class="table-row">';
        $html .= '<span class="spayaz-pricetable-item">' .$contentname . '</span>';
        $html .= '<span class="spayaz-pricetable-item-price">'. $contentprice .'</span>';
        $html .= do_shortcode( $content );
        $html .= '</div>';
        return $html;
    }
    add_shortcode( 'wbc_inner_item' , 'wbc_inner_item_output' );
}




?>