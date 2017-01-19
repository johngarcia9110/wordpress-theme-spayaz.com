<?php
/**
 * Template Name: Locations Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php

    $args = array( 'taxonomy' => 'location_state' );

    $terms = get_terms('location_state', $args);

    $count = count($terms); $i=0;
    if ($count > 0) {
        $cape_list = '<p class="my_term-archive">';
        foreach ($terms as $term) {
            $i++;
            $term_list = '<a href="/store_locations/' . $term->slug . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a>';
            if ($count != $i) $term_list .= ' &middot; '; else $term_list .= '</p>';
        }
        echo $term_list;
    }
    ?>

<?php endwhile; ?>
