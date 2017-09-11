<?php get_header(); ?>
  <main id="main">
    <section class="mainContent">
      <div class="container">
        <h1 class="page-title">About Us</h1>
        <hr />
        <?php the_field('page_intro'); ?>
      </div>
    </section>
    <section id="missionVisionCallout" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/us-network-map.jpg); background-position:center center;">
      <div class="container">
        <?php the_field('mission_vision_callout'); ?>
      </div>
    </section>
    <section class="capabilities-solutions">
      <div class="container">
        <?php the_field('capabilities_section'); ?>
        <p class="text-center"><a href="<?php echo home_url('services'); ?>" class="btn-main">Our Services</a></p>
      </div>
    </section>
    <section class="strategic-foundation">
      <div class="container">
        <h2>Strategic Foundation</h2>
        <?php if(have_rows('strategic_foundations')): while(have_rows('strategic_foundations')): the_row(); ?>
          <div class="row">
            <div class="col-sm-6">
              <h4><strong><?php the_sub_field('foundation_title'); ?></strong></h4>
              <?php the_sub_field('foundation_text'); ?>
            </div>
            <div class="col-sm-6">
              <img src="<?php the_sub_field('foundation_image'); ?>" class="img-responsive center-block" alt="" />
            </div>
          </div>
        <?php endwhile; endif; ?>
        <p class="text-center"><a href="<?php echo home_url('our-process'); ?>" class="btn-main">Our Process</a></p>
      </div>
    </section>
    <section class="primary-focus">
      <div class="container">
        <?php the_field('primary_focus_section'); ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>