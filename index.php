<?php get_header(); ?>
<main id="main">
  <section class="mainContent">
    <div class="container">
      <?php if(have_posts()): ?>
        <?php if(is_archive()): while(have_posts()): the_post(); ?>
          <div class="blog-summary">
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
              <h5><?php echo get_the_title('F j, Y'); ?></h5>
              <?php the_excerpt(); ?>
            </a>
          </div>
        <?php endwhile; else: while(have_posts()): the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <hr />
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>