<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'assets/logo.svg' ) ); ?>" type="image/svg+xml">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to main content</a>

<header class="site-header">
  <div class="wrap">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/logo.svg' ) ); ?>" alt="">
      <span class="brand-name">Kira <span>Sparkles</span></span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="mainNav">
      <span></span>
      <span class="sr-only">Menu</span>
    </button>

    <nav class="main-nav" id="mainNav" aria-label="Primary">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_id'        => '',
          'menu_class'     => '',
          'items_wrap'     => '<ul>%3$s</ul>',
          'fallback_cb'    => 'kira_fallback_menu',
        )
      );
      ?>
    </nav>

    <div class="header-cta">
      <a class="header-phone" href="tel:+256745600006">+256 745 600 006</a>
      <a class="btn btn-primary" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Book a service</a>
    </div>
  </div>
</header>
