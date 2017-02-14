<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  
  // Location page settings
  $wp_customize->add_section('location_page_header_section', array(
    'title'=>__('Location Page','sage'),
    'priority'=> 30,
    'description'=> 'Customize the location page.'
  ));
  $wp_customize->add_setting('sage_location_page_header_section');
  $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'location_page_header_section', array(
    'label' => __('Backgorund Image', 'sage'),
    'section'=> 'location_page_header_section',
    'settings' => 'sage_location_page_header_section',
    'description' => 'Select an image to use for the page title background, if no image is selected, the background will default to a preset color.',
  )));
  
  // Services Page Settings
  
  $wp_customize->add_section('services_page_header_section', array(
    'title'=>__('Services Page','sage'),
    'priority'=> 30,
    'description'=> 'Customize the services page.'
  ));
  $wp_customize->add_setting('sage_services_page_header_section');
  $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'services_page_header_section', array(
    'label' => __('Backgorund Image', 'sage'),
    'section'=> 'services_page_header_section',
    'settings' => 'sage_services_page_header_section',
    'description' => 'Select an image to use for the page title background, if no image is selected, the background will default to a preset color.',
  )));
  
  
  // Monthly Promo Settings

  $wp_customize->add_section('promo_section', array(
    'title'=>__('Promotions','sage'),
    'priority'=> 30,
    'description'=> 'Customize the promotion pop up.'
  ));
  $wp_customize->add_setting('sage_promo_image_section');
  $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'promo_section', array(
    'label' => __('Background Image', 'sage'),
    'section'=> 'promo_section',
    'settings' => 'sage_promo_image_section',
    'description' => 'Choose the promotion image',
  )));  
  $wp_customize->add_setting('sage_promo_text_setting', array(
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('promo_section_text', array(
    'label' => __('Promo Text', 'sage'),
    'section'=> 'promo_section',
    'settings' => 'sage_promo_text_setting',
    'type' => 'textarea',
    'description' => 'Add optional text.'
  ));  
  
  
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
