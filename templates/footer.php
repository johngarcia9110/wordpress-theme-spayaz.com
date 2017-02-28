<button type="button" class="btn btn-primary btn-promo" data-toggle="modal" data-target="#promoModal">
  Latest Promotion
</button>
<footer class="content-info site-footer">
  <div class="container footer-content">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <?php dynamic_sidebar('sidebar-footer-left'); ?>
      </div>
      <div class="col-sm-12 col-md-4">
        <?php dynamic_sidebar('sidebar-footer-right'); ?>
      </div>
      <div class="col-sm-12 col-md-4">
        <?php
        wp_nav_menu([
           'menu'            => 'secondary_navigation',
           'theme_location'  => 'secondary_navigation',
           'container'       => 'div',
           'container_id'    => 'footer-navigation',
           'container_class' => 'footer-navigation-container',
           'menu_id'         => false,
           'menu_class'      => 'nav pull-right',
           'depth'           => 2,
           'fallback_cb'     => 'bs4navwalker::fallback',
           'walker'          => new bs4navwalker()
        ]);?>
      </div>
    </div>
  </div>
  <p class="text-center copyright">Copyright 2017 Spay and Neuter Clinic, Inc.</p>
  
  <!-- Promotions Modal -->
  <div class="modal fade" id="promoModal" tabindex="-1" role="dialog" aria-labelledby="latestPromoModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Latest Promotion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" src="<?php echo esc_url(get_theme_mod("sage_promo_image_section")); ?>">
        </div>
        <div class="modal-footer">
          <a download="latest-promo.jpg" href="<?php echo esc_url(get_theme_mod("sage_promo_image_section")); ?>" class="btn btn-primary btn-download pull-left"><i class="fa fa-file-text"></i> Download</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Careers Modal -->
  
  <div class="modal" id='career-modal'>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Enter Your Information Below:</h5>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode('[gravityform id="14" title=false description=false]')?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- zendesk chat -->
  <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?3kWlXTUywjDHoPQ4b3c4Fxz3WM24QkYh";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
  </script>

</footer>
