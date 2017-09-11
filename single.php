<?php get_header(); ?>
<main id="main">
  <section class="mainContent">
    <div class="container">
      <a href="javascript:history.go(-1);" class="btn-main btn-back">Back</a>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="post-header">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <h5 class="blog-date"><?php echo get_the_date('F j, Y'); ?></h5>
        </div>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>