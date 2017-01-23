<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  $wp_customize->add_section(
  'footer_section',
  array(
  'title' => 'Footer Settings',
  'description' => 'Edit the footer area.',
  'priority' => 55,
  )
  );

  $wp_customize->add_setting(
'copyright_textbox',
array(
'default' => 'Copyright &copy; 2016. All Rights Reserved.',
)
);

}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
