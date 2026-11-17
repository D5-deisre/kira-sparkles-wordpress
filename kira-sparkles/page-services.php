<?php get_header(); ?>

<main id="main">

  <section class="page-hero">
    <div class="wrap">
      <p class="hero-eyebrow">Services</p>
      <h1>Cleaning and laundry care that comes to you</h1>
      <p>From offices and vehicles to homes, clothes and carpets, one team handles it all in Kawuku and along Entebbe Road.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <h2>Cleaning services</h2>
        <p>Pick the service you need and tell us where you are. We bring the water, equipment and supplies.</p>
      </div>

      <div class="service-grid three">

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/commercial-floor.jpg' ) ); ?>" alt="Cleaners polishing a hallway floor with machines and mops">
          <div class="service-body">
            <h3>Home &amp; office cleaning</h3>
            <p>Scheduled cleaning for offices and commercial spaces, arranged around your working hours.</p>
          </div>
        </article>

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/car-wash.jpg' ) ); ?>" alt="A car covered in foam at a washing bay">
          <div class="service-body">
            <h3>Washing bay</h3>
            <p>On-site washing for cars, motorcycles and small fleets, with no queueing and no driving to a bay.</p>
          </div>
        </article>

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/home-deep-clean.jpg' ) ); ?>" alt="Cleaner vacuuming the floor of a large kitchen and living area">
          <div class="service-body">
            <h3>Mobile home cleaning</h3>
            <p>Deep cleaning for homes, carried out room by room at a time that suits your household.</p>
          </div>
        </article>

      </div>
    </div>
  </section>

  <section class="section on-mint">
    <div class="wrap">
      <div class="section-head">
        <h2>Laundry &amp; carpet care</h2>
        <p>Extra services for the things that are hard to do at home.</p>
      </div>

      <div class="service-grid four">

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/clothes-suits.jpg' ) ); ?>" alt="Staff member showing a suit in a protective cover to a customer">
          <div class="service-body">
            <h3>Clothes &amp; suits washing</h3>
            <p>Careful washing for everyday clothes and suits, handled by our team.</p>
          </div>
        </article>

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/laundry.jpg' ) ); ?>" alt="Hand taking a towel out of a washing machine">
          <div class="service-body">
            <h3>Duvets &amp; bedcovers</h3>
            <p>Washing for duvets and bedcovers, which are bulky and hard to wash in a home machine.</p>
          </div>
        </article>

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/ironing.svg' ) ); ?>" alt="Illustration of a steam iron pressing a shirt">
          <div class="service-body">
            <h3>Ironing</h3>
            <p>Neatly pressed shirts, suits and household linen, ready to wear or use.</p>
          </div>
        </article>

        <article class="service-card">
          <img class="service-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/living-room-vacuum.jpg' ) ); ?>" alt="Cleaner vacuuming a rug in a living room">
          <div class="service-body">
            <h3>Carpet cleaning</h3>
            <p>Deep cleaning for carpets and rugs, at your home or office.</p>
          </div>
        </article>

      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="wrap">
      <div>
        <h2>Ready for us to come to you?</h2>
        <p>Tell us where you are and what needs cleaning, and we'll fit you into the route.</p>
      </div>
      <div class="cta-band-actions">
        <a class="btn btn-light" href="tel:+256745600006">Call +256 745 600 006</a>
        <a class="btn btn-ghost" style="border-color:#fff; color:#fff;" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Send a request</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
