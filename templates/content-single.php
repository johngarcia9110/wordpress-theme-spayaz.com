<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('blog-post-full'); ?>>
    <header>
      <!-- <h1 class="entry-title"><?php// the_title(); ?></h1> -->
      <?php 
      $thumbnail = the_post_thumbnail();

      if ( $thumbnail ) {
        $alt_text = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );

        if ( ! empty( $thumbnail ) ) {
            if ( ! empty( $alt_text ) ) {
                $alt_text = $alt_text;
           } else {
                $alt_text = __( 'no alt text set', 'textdomain' ); 
           }
           echo '';
       }
      }
      
       ?>

      
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content space-bottom">
      <?php the_content(); ?>
    </div>
    <!-- <footer>
      <?php // wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer> -->
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
