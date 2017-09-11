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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all"
  />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
  <link rel="stylesheet" id="tuwyn-css" href="style.css" type="text/css" media="all" />

  <script src="https://use.fontawesome.com/004c3c54fb.js"></script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--<script type="text/javascript" src="js/tuwyn-scripts.js"></script>-->

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

<body>
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
  <section class="hero hp-hero" style="background-image:url(images/dc-skyline.jpg); background-position:right top;">
    <div class="caption-wrapper">
      <div class="caption">
        <h1>Tell Us What You Need<br />is a leader in managing visual information in the modern age.</h1>
        <span class="bottom-left-border"></span>
        <span class="bottom-right-border"></span>
      </div>
      <a href="#" class="btn-main btn-alt">Learn More</a>
    </div>
    <div class="right-globe"><img src="images/right-globe.png" class="img-responsive" alt="" /></div>
  </section>
