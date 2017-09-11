<?php get_header(); ?>
  <main id="main">
    <section class="mainContent">
      <div class="container">
        <h1 class="page-title">Blog</h1>
        <div class="sorting dropdown">
          <button class="btn-sort dropdown-toggle" type="button" id="sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sort By <i class="fa fa-angle-down"></i></button>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="sort">
            <li><a href="<?php echo esc_url(add_query_arg('sort', 'az')); ?>">A to Z</a></li>
            <li><a href="<?php echo esc_url(add_query_arg('sort', 'za')); ?>">Z to A</a></li>
            <li><a href="<?php echo esc_url(add_query_arg('sort', 'asc')); ?>">Date <i class="fa fa-arrow-up"></i></a></li>
            <li><a href="<?php echo esc_url(add_query_arg('sort', 'desc')); ?>">Date <i class="fa fa-arrow-down"></i></li>
          </ul>
        </div>
        <div class="clearfix"></div>

          <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $blog_posts_args = array(
              'posts_status' => 'publish',
              'posts_per_page' => 9,
              'paged' => $paged
            );

            if(isset($_GET['sort'])){
              switch($_GET['sort']){
                case 'az':
                  $blog_posts_args['orderby'] = 'title';
                  $blog_posts_args['order'] = 'ASC';
                break;
                case 'za':
                  $blog_posts_args['orderby'] = 'title';
                  $blog_posts_args['order'] = 'DESC';
                break;
                case 'asc':
                  $blog_posts_args['orderby'] = 'post_date';
                  $blog_posts_args['order'] = 'ASC';
                break;
                case 'desc':
                  $blog_posts_args['orderby'] = 'post_date';
                  $blog_posts_args['order'] = 'DESC';
                break;
              }
            }

            $blog_posts = new WP_Query($blog_posts_args);
            if($blog_posts->have_posts()): ?>
              <div class="row">
                <?php $i=0; while($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                  <?php if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
                  <div class="col-sm-4">
                    <div class="blog-summary">
                      <?php 
                        $featured_image = get_stylesheet_directory_uri() . '/images/logo-placeholder.png';
                        if(get_field('featured_image')){
                          $featured_image = get_field('featured_image');
                        }
                      ?>
                      <img src="<?php echo $featured_image; ?>" class="img-responsive center-block" alt="" />
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <h5><?php echo get_the_date('F j, Y'); ?></h5>
                        <?php the_excerpt(); ?>
                      </a>
                    </div>
                  </div>
                <?php $i++; endwhile; ?>
              </div>
          <?php wp_pagenavi(array('wp_query' => $blog_posts)); endif; ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>