<?php get_header(); ?>
  <main id="main">
    <section class="mainContent">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-6">
            <?php if(have_rows('right_side_images')): while(have_rows('right_side_images')): the_row(); ?>
              <img src="<?php the_sub_field('right_side_image'); ?>" class="aligncenter" alt="" />
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>