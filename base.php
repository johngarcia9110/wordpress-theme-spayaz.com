<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php if(is_single()){ ?>
      <div class="page-header">
        <h1><?php echo the_title(); ?></h1>
      </div>
      <div class="wrap container page-content-wrapper" role="document">
        <div class="content row">
          <?php include Wrapper\template_path(); ?>
        </div>
      </div>
      
    <?php }elseif(is_post_type_archive()){ ?>
        <?php if(is_post_type_archive( 'store_locations' )){?>
          <div class="page-header" style="background-image : url('<?php echo esc_url(get_theme_mod("sage_location_page_header_section")); ?>'); background-repeat: no-repeat; background-size: cover;">
            <h1><?php post_type_archive_title(); ?></h1>
          </div>
        <?php get_template_part('templates/cpt-templates/location', 'cat');
      }elseif(taxonomy_exists( 'location_state' )){ ?>
        <div class="page-header">
          <h1><?php post_type_archive_title(); ?></h1>
        </div>
        <?php get_template_part('templates/cpt-templates/location-state', 'cat'); }?>
      
      <?php }else{ ?>
    <?php get_template_part('templates/page', 'header');?>
    <div class="wrap container page-content-wrapper" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar() && !is_post_type_archive( 'service_offerings' || 'store_locations' )) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php } ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>