<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <title>Furniture Design</title>
  <meta
    name="description"
    content="テキストテキストテキストテキストテキストテキストテキスト" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/img/favicon.ico" />
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/style.css" />
  <script
    defer
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/js/main.js"></script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header id="header" class="wrapper">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img
          src="<?php echo get_theme_file_uri(); ?>/img/logo.svg"
          width="180"
          height="21"
          alt="Furniture Design" /></a>
    </h1>

    <nav id="navi">
      <ul class="nav-menu">
        <li><a href="<?php echo home_url('/products/'); ?>">PRODUCTS</a></li>
        <li><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
        <li><a href="<?php echo home_url('/company/'); ?>">COMPANY</a></li>
        <li>
          <a href="mailto:xxxxx@xxx.xxx?subject=お問い合わせ">CONTACT</a>
        </li>
      </ul>
    </nav>

    <div class="toggle_btn">
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>