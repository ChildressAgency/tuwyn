<?php get_header(); ?>
<main id="main">
  <section class="mainContent">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <hr />
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>