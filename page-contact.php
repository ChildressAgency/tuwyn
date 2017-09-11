<?php get_header(); ?>
  <main id="main">
    <section class="mainContent">
      <div class="container">
        <h1 class="page-title">Contact us</h1>
        <div class="row">
          <div class="col-sm-6">
            <?php echo do_shortcode('[contact_form]'); ?>
          </div>
          <div class="col-sm-6">
            <div class="contact-info">
              <p><span>Call Us:</span><?php the_field('phone', 'option'); ?></p>
              <p><span>Find Us:</span>Tell Us What You Need<br /><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip'); ?></p>
              <?php 
                $location = get_field('location', 'option');
                if(!empty($location)): ?>
                  <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                  </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>