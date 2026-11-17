<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header">
    <div class="logo-slot logo-wide"><img src="<?php echo esc_url( unik_img( 'unik-logo.png' ) ); ?>" alt="University of Kisubi logo"></div>
    <div class="brand">
      <h1>UniK Sports</h1>
      <p>Excellence, teamwork and champions at the University of Kisubi</p>
    </div>
  </header>

  <nav class="main-nav" aria-label="Main navigation">
    <ul>
      <li><a href="<?php echo esc_url( unik_url( 'home' ) ); ?>"<?php echo unik_active( 'home' ); ?>>Home</a></li>
      <li><a href="<?php echo esc_url( unik_url( 'about' ) ); ?>"<?php echo unik_active( 'about' ); ?>>About</a></li>
      <li><a href="<?php echo esc_url( unik_url( 'news' ) ); ?>"<?php echo unik_active( 'news' ); ?>>News &amp; Events</a></li>
      <li><a href="<?php echo esc_url( unik_url( 'results' ) ); ?>"<?php echo unik_active( 'results' ); ?>>Results &amp; Fixtures</a></li>
      <li><a href="<?php echo esc_url( unik_url( 'gallery' ) ); ?>"<?php echo unik_active( 'gallery' ); ?>>Gallery</a></li>
      <li><a href="<?php echo esc_url( unik_url( 'contact' ) ); ?>"<?php echo unik_active( 'contact' ); ?>>Contact / Register</a></li>
    </ul>
  </nav>
