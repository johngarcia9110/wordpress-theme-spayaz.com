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
      <div class="page-header" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);background-repeat:no-repeat; background-size: cover;">
        <h1><?php echo the_title(); ?></h1>
      </div>
    <?php }elseif(is_post_type_archive()){ ?>
      <div class="page-header" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);background-repeat:no-repeat; background-size: cover;">
        <h1><?php post_type_archive_title(); ?></h1>
      </div>
      <?php if(is_post_type_archive( 'store_locations' )){
        get_template_part('templates/cpt-templates/location', 'cat');
      }elseif(is_post_type_archive( 'service_offerings' )){
        get_template_part('templates/cpt-templates/services', 'cat');
      }?>
    <?php }else{ ?>
    <div class="wrap container" role="document">
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
