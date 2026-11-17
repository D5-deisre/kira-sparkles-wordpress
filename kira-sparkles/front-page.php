<?php get_header(); ?>

<main id="main">

  <!-- SERVICES (now at the top) -->
  <section class="section on-mint" id="services">
    <div class="wrap">
      <div class="section-head">
        <h2>Our services</h2>
        <p>Every booking follows the same route: we pack the van, drive to you, and leave the place spotless. Here's what's on offer.</p>
      </div>

      <div class="route route-photos">
        <div class="stop">
          <img class="stop-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/commercial-floor.jpg' ) ); ?>" alt="Cleaners polishing a hallway floor with machines and mops">
          <span class="stop-label">Stop 1</span>
          <h3>Corporate cleaning</h3>
          <p>Scheduled cleaning for offices and commercial spaces, arranged around your working hours.</p>
        </div>
        <div class="stop">
          <img class="stop-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/car-wash.jpg' ) ); ?>" alt="A car covered in foam at a washing bay">
          <span class="stop-label">Stop 2</span>
          <h3>Washing bay</h3>
          <p>On-site washing for cars, motorcycles and small fleets — no queueing, no driving to a bay.</p>
        </div>
        <div class="stop">
          <img class="stop-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/home-deep-clean.jpg' ) ); ?>" alt="Cleaner vacuuming the floor of a large kitchen and living area">
          <span class="stop-label">Stop 3</span>
          <h3>Mobile home cleaning</h3>
          <p>Deep cleaning for homes, carried out room by room at a time that suits your household.</p>
        </div>
      </div>
      <p style="margin-top:28px;">
        <a class="btn btn-primary" href="<?php echo esc_url( kira_page_url( 'services' ) ); ?>">See all services</a>
        <a class="btn btn-ghost" href="<?php echo esc_url( kira_page_url( 'gallery' ) ); ?>">View gallery</a>
      </p>
    </div>
  </section>

  <!-- HERO -->
  <section class="hero">
    <div class="wrap">
      <div class="hero-copy">
        <p class="hero-eyebrow">Kawuku · Entebbe Road · Mobile service</p>
        <h1>We bring the clean to your doorstep</h1>
        <p class="hero-lede">Kira Sparkles is a mobile cleaning company serving Kawuku and the Entebbe Road corridor. No need to drive anywhere — our team comes to your office, your car, or your home with everything needed to get the job done.</p>

        <div class="hero-actions">
          <a class="btn btn-primary" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Request a service</a>
          <a class="btn btn-ghost" href="<?php echo esc_url( kira_page_url( 'services' ) ); ?>">See what we do</a>
        </div>

        <ul class="hero-trust">
          <li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon-check.svg' ) ); ?>" alt="">Comes to your location</li>
          <li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon-check.svg' ) ); ?>" alt="">Corporate &amp; residential</li>
          <li><img src="<?php echo esc_url( get_theme_file_uri( 'assets/icon-check.svg' ) ); ?>" alt="">Flexible scheduling</li>
        </ul>
      </div>

      <div class="hero-art">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/service-van.jpg' ) ); ?>" alt="White van with cleaning equipment stored inside, parked outside an office building" style="display:block; width:100%; height:auto; border-radius:16px; object-fit:cover;">
      </div>
    </div>
  </section>

  <!-- PURPOSE / ABOUT -->
  <section class="section" id="about">
    <div class="wrap about-grid">
      <div class="about-copy">
        <div class="section-head">
          <h2>Cleaning that travels to you</h2>
          <p>Most cleaning companies wait for customers to come to them. We built Kira Sparkles the other way round: a two-in-one cleaning and washing bay outfit that loads up and drives to wherever the work is.</p>
        </div>
        <p>Whether that's a fleet of vehicles at your compound, an office that needs a weekly once-over, or a home that could use a deep clean, our team arrives with its own water, equipment and supplies — so your day doesn't have to stop for it.</p>

        <div class="about-figures">
          <div><strong>2</strong><span>Core services, one visit</span></div>
          <div><strong>Kawuku</strong><span>Home base, Entebbe Road</span></div>
          <div><strong>7 days</strong><span>Booking availability</span></div>
        </div>
      </div>

      <div class="purpose-card">
        <h3>Why we exist</h3>
        <p>Finding a washing bay or a reliable cleaner nearby usually means time you don't have. Kira Sparkles removes that trip entirely — book a time, and we handle the rest on site.</p>
        <h3>Who it's for</h3>
        <p>Offices around Kawuku and Entebbe Road, households wanting regular home cleaning, and vehicle owners who'd rather not queue at a bay.</p>
      </div>
    </div>
  </section>

  <!-- CTA BAND -->
  <section class="cta-band">
    <div class="wrap">
      <div>
        <h2>Ready for us to come to you?</h2>
        <p>Tell us where you are and what needs cleaning — we'll fit you into the route.</p>
      </div>
      <div class="cta-band-actions">
        <a class="btn btn-light" href="tel:+256745600006">Call +256 745 600 006</a>
        <a class="btn btn-ghost" style="border-color:#fff; color:#fff;" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Send a request</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
