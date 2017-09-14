  <section id="connect" class="gradient">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-7 col-sm-height">
          <div class="connect-box">
            <div class="social">
              <?php if(get_field('linkedin', 'option')): ?>
                <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
              <?php endif; if(get_field('facebook', 'option')): ?>
                <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-official"></i></a>
              <?php endif; if(get_field('twitter', 'option')): ?>
                <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
              <?php endif; ?>
            </div>
            <span class="bottom-left-border"></span>
            <span class="bottom-right-border"></span>
          </div>
          <span>connect with us</span>
        </div>
        <div class="col-sm-5 col-sm-height">
          <div class="contact-icon">
            <h1><a href="<?php echo home_url('contact'); ?>">Contact Us</a></h1>
            <a href="<?php echo home_url('contact'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-icon.png" class="img-responsive center-block" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="left-globe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-globe.png" class="img-responsive" alt="" /></div>
  </section>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="TUWYN Logo" />
        </div>
        <div class="col-sm-3 col-md-4">
          <ul class="certifications list-unstyled list-inline">
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdvosb-logo.jpg" class="img-responsive center-block" alt="Service Disabled Veteran Owned Small Business Logo" /></li>
            <!--<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dbe-logo.jpg" class="img-responsive center-block" alt="Disadvantaged Business Enterprise Logo" /></li>-->
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/swam-logo.jpg" class="img-responsive center-block" alt="Small, Women, and Minority Owned Certified Logo" /></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <?php 
            $footer_nav_args = array(
              'theme_location' => 'footer-nav',
              'menu' => '',
              'container' => '',
              'container_class' => '',
              'container_id' => '',
              'menu_class' => 'footer-nav nav navbar-nav navbar-right',
              'menu_id' => '',
              'echo' => true,
              'fallback_cb' => 'tuwyn_footer_fallback_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($footer_nav_args);
          ?>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> TUWYN LLC</p>
        <p>website created by <a href="http://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>