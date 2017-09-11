<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>TUWYN</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!--[if gte IE 9]
    <style type="text/css">
      .gradient {
        filter: none;
      }
    </style>
  <![endif]-->
</head>

<body <?php body_class(); ?>>
  <nav id="header-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="TUWYN Logo" /></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="email-social">
          <a href="mailto:<?php the_field('email', 'option'); ?>" class="header-email"><?php the_field('email', 'option'); ?></a>
          <div class="social">
            <?php if(get_field('linkedin', 'option')): ?>
              <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
            <?php endif; if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-official"></i></a>
            <?php endif; if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="clearfix"></div>
        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'tuwyn_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </div>
    </div>
  </nav>
  <?php 
    $hero_image = get_field('hero_image') ? get_field('hero_image') : get_stylesheet_directory_uri() . '/images/dc-skyline-2.jpg'; 
    $hero_image_css = get_field('hero_image_css') ? get_field('hero_image_css') : 'background-position:44% 100%;';
  ?>
  <section class="hero<?php if(is_front_page()){ echo ' hp-hero'; } ?>" style="background-image:url(<?php echo $hero_image; ?>); <?php echo $hero_image_css; ?>">
    <?php if(is_front_page()): ?>
      <div class="caption-wrapper">
        <div class="caption">
          <h1><?php the_field('hero_caption'); ?></h1>
          <span class="bottom-left-border"></span>
          <span class="bottom-right-border"></span>
        </div>
        <a href="<?php the_field('hero_caption_link'); ?>" class="btn-main btn-alt"><?php the_field('hero_caption_link_text'); ?></a>
      </div>
    <?php endif; ?>
    <?php if(get_field('globe') == 'right-globe'): ?>
      <div class="right-globe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-globe.png" class="img-responsive" alt="" /></div>
    <?php elseif(get_field('globe') == 'left-globe'): ?>
      <div class="left-globe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-globe.png" class="img-responsive" alt="" /></div>
    <?php endif; ?>
  </section>
