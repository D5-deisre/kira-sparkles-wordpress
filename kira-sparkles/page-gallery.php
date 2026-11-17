<?php get_header(); ?>

<main id="main">

  <section class="page-hero">
    <div class="wrap">
      <p class="hero-eyebrow">Gallery</p>
      <h1>Cleaning around Kawuku and Entebbe Road</h1>
      <p>A look at the equipment and the crews behind our cleaning services.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="gallery-grid">

        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/mop-floor.jpg' ) ); ?>" alt="Green bucket of cleaning products with a mop on a polished floor">
          <figcaption>Floor cleaning and mopping</figcaption>
        </figure>

        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/friendly-cleaner.jpg' ) ); ?>" alt="Smiling cleaner in an apron holding a basin of cleaning products">
          <figcaption>Friendly, professional service</figcaption>
        </figure>

        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/team-with-equipment.jpg' ) ); ?>" alt="A cleaning crew in blue uniforms and hard hats with a vacuum cleaner, polisher and mops">
          <figcaption>A cleaning crew with its equipment</figcaption>
        </figure>

        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/sweeping-outdoors.jpg' ) ); ?>" alt="Cleaner in blue overalls and a hard hat sweeping fallen leaves from a paved path">
          <figcaption>Outdoor cleaning and sweeping</figcaption>
        </figure>

      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="wrap">
      <div>
        <h2>Want results like these at your place?</h2>
        <p>Get in touch and we'll schedule a visit.</p>
      </div>
      <div class="cta-band-actions">
        <a class="btn btn-light" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Contact us</a>
        <a class="btn btn-ghost" style="border-color:#fff; color:#fff;" href="<?php echo esc_url( kira_page_url( 'services' ) ); ?>">View services</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
