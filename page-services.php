<?php get_header(); ?>
  <main id="main">
    <section class="mainContent">
      <div class="container">
        <h1 class="page-title">Core Competencies:</h1>
      </div>
    </section>
    <?php if(have_rows('core_competencies')): $i=1; while(have_rows('core_competencies')): the_row('core_competencies'); ?>
      <section class="text-img-row"<?php if($i==1){ echo ' style="margin-top:40px;"'; } ?>>
        <div class="container-fluid container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height img-side<?php if($i%2==0){echo ' col-sm-push-6'; } ?>">
              <div class="title-img">
                <h2><?php the_sub_field('core_competency_title'); ?></h2>
                <span style="background-image:url(<?php the_sub_field('core_competency_image'); ?>); <?php the_sub_field('core_competency_image_css'); ?>"></span>
              </div>
            </div>
            <div class="col-sm-6 col-sm-height text-side<?php if($i%2==0){ echo ' col-sm-pull-6'; } ?>">
              <article>
                <?php the_sub_field('core_competency_content'); ?>
              </article>
            </div>
          </div>
        </div>
      </section>
    <?php $i++; endwhile; endif; ?>
    <section id="logistics">
      <div class="container">
        <h1 class="page-title">Logistics Products and Services</h1>
        <article>
          <?php the_field('logistics_section_intro'); ?>
        </article>
        <?php if(have_rows('logistics_services')): while(have_rows('logistics_services')): the_row(); ?>
          <article>
            <div class="title-img-bottom">
              <span style="background-image:url(<?php the_sub_field('logistics_service_image'); ?>);<?php the_sub_field('logistics_service_image_css'); ?>"></span>
              <h2><?php the_sub_field('logistics_service_title'); ?></h2>
            </div>
            <?php the_sub_field('logistics_service_content'); ?>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>