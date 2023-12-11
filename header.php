<!doctype html>
<html>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800;900&display=swap" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/all.css" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="menu-mobile">
    <nav class="mainMenu">
      <!--a class="menuBtn mobile">
        <span class="lines"></span>
      </a-->
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </div>

  <a class="menuBtn header">
    <span class="lines"></span>
  </a>

  <header>
    <div class="container">
      <h1><a href="<?php echo site_url(); ?>">Apex</a></h1>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </div>
  </header>

  <div id="tagline">
    <div class="container">
      <?php if (is_singular('post')) { ?>

        <div class="row">
          <div class="col-1">
            <div class="capa"><?php the_post_thumbnail(); ?></div>
          </div>
          <div class="col-2">
            <h2><?php echo the_title(); ?></h2>
          </div>
        </div>

      <?php } else { ?>
        <h2><?php echo get_field('tagline'); ?></h2>
      <?php } ?>
    </div>
  </div>