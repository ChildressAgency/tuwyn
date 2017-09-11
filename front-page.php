<?php get_header(); ?>
  <section id="whoWeAre">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>Who we are</h1>
          <hr />
          <?php the_field('who_we_are_statement'); ?>
        </div>
        <div class="col-sm-6">
          <ul class="certifications list-unstyled list-inline">
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdvosb-logo.jpg" class="img-responsive center-block" alt="Service Disabled Veteran Owned Small Business Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dbe-logo.jpg" class="img-responsive center-block" alt="Disadvantaged Business Enterprise Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/swam-logo.jpg" class="img-responsive center-block" alt="Small, Women, and Minority Certified Logo" /></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="hp-services">
    <div class="container">
      <?php the_field('services_statement'); ?>
      <a href="<?php echo home_url('services'); ?>" class="btn-main btn-alt">Our Services</a>
    </div>
  </section>
  <section id="hp-serviceCards">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height hidden-xs">
        <div class="col-sm-4 col-sm-height">
          <h1>Corporate Construction</h1>
        </div>
        <div class="col-sm-4 col-sm-height">
          <h1>VIM</h1>
        </div>
        <div class="col-sm-4 col-sm-height">
          <h1>Integrated Solutions</h1>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <?php $card = get_field('card_sections'); ?>
          <div class="service-card">
            <h1 class="visible-xs-block">Corporate Construction</h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/silhouette-workers.jpg" class="img-responsive center-block" alt="" />
            <?php echo $card['corporate_construction_card_text']; ?>
            <a href="<?php echo $card['corporate_construction_card_link']; ?>" class="btn-main">Learn More</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card">
            <h1 class="visible-xs-block">VIM</h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wall-of-monitors.jpg" class="img-responsive center-block" alt="" />
            <?php echo $card['vim_card_text']; ?>
            <a href="<?php echo $card['vim_card_link']; ?>" class="btn-main">Learn More</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card">
            <h1 class="visible-xs-block">Integrated Solutions</h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/innovation-brain.jpg" class="img-responsive center-block" alt="" />
            <?php echo $card['integrated_solutions_card_text']; ?>
            <a href="<?php echo $card['integrated_solutions_card_link']; ?>" class="btn-main">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="coreValues">
    <div class="container">
      <h1>Core Values:</h1>
      <div class="row">
        <div class="col-sm-7">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/three-es.png" class="img-responsive center-block" alt="Three Es" />
        </div>
        <div class="col-sm-5">
          <div class="eee">
            <h2>Empowerment</h2>
            <span>of our employees</span>
          </div>
          <div class="eee">
            <h2>Efficiency</h2>
            <span>in our actions</span>
          </div>
          <div class="eee">
            <h2>Excellence</h2>
            <span>in all we do</span>
          </div>
        </div>
      </div>
      <p>These three core elements help us maximize client satisfaction.</p>
    </div>
  </section>
  <section id="whyUnique">
    <div class="container">
      <h1>Why is TUWYN Unique?</h1>
      <?php the_field('why_unique_statment'); ?>
      <a href="<?php echo home_url('our-process'); ?>" class="btn-main">Our Process</a>
    </div>
  </section>
<?php get_footer(); ?>