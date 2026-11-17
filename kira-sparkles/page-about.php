<?php get_header(); ?>

<main id="main">

  <section class="page-hero">
    <div class="wrap">
      <p class="hero-eyebrow">About Us</p>
      <h1>A cleaning team that comes to you</h1>
      <p>Kira Sparkles is a mobile cleaning and washing bay service based in Kawuku, Entebbe Road.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap about-grid">
      <div class="about-copy">
        <div class="section-head">
          <h2>Who we are</h2>
          <p>We built Kira Sparkles around a simple idea: good cleaning should fit around your day, not the other way round.</p>
        </div>
        <p>From our base on Entebbe Road in Kawuku, our team loads up and drives to wherever the work is: an office, a compound full of vehicles, or a family home. We arrive with our own water, equipment and supplies, so nothing on your side has to stop.</p>
        <p>Corporate cleaning, a washing bay that comes to your car, and mobile home cleaning: three services, delivered on site by one team.</p>
      </div>

      <div class="purpose-card">
        <h3>What we aim to do</h3>
        <p>Take the trip out of cleaning. No searching for a washing bay, no waiting on a cleaner who may or may not turn up. Book a time and we handle the rest where you are.</p>
        <h3>Who we serve</h3>
        <p>Offices around Kawuku and the Entebbe Road corridor, households wanting regular home cleaning, and vehicle owners who would rather not queue at a bay.</p>
      </div>
    </div>

    <div class="wrap">
      <div class="about-pictures">
        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/cleaner-bucket-apron.jpg' ) ); ?>" alt="Cleaner in an apron and yellow glove carrying a bucket of brushes and cleaning products">
          <figcaption>Our own water, equipment and supplies</figcaption>
        </figure>
        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/cleaning-bucket.jpg' ) ); ?>" alt="Cleaner holding a bucket of gloves, brushes and sponges">
          <figcaption>Ready for every job</figcaption>
        </figure>
        <figure>
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/cleaning-supplies.jpg' ) ); ?>" alt="Bucket of sponges, gloves, cloths and spray bottle on a wooden floor">
          <figcaption>Everything we need, on site</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="section on-mint">
    <div class="wrap">
      <div class="section-head">
        <h2>What you can expect</h2>
        <p>The standards we hold ourselves to on every job.</p>
      </div>
      <div class="value-grid">
        <div class="value-card">
          <h3>We come to you</h3>
          <p>Your location, your schedule. The team travels with everything needed for the job.</p>
        </div>
        <div class="value-card">
          <h3>Flexible scheduling</h3>
          <p>Visits arranged around your working hours or household routine.</p>
        </div>
        <div class="value-card">
          <h3>Corporate and residential</h3>
          <p>The same careful approach whether it is an office floor or a family home.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head">
        <h2>How it works</h2>
        <p>Simple from first call to finished job.</p>
      </div>
      <ol class="how-steps">
        <li><strong>You get in touch</strong>Call, WhatsApp or send a request through the contact page.</li>
        <li><strong>We plan the visit</strong>We confirm the service, your location and a time that suits you.</li>
        <li><strong>We pack the van and drive to you</strong>The team arrives with its own water, equipment and supplies.</li>
        <li><strong>We leave the place spotless</strong>The job is done on site, without disrupting your day.</li>
      </ol>
    </div>
  </section>

  <section class="cta-band">
    <div class="wrap">
      <div>
        <h2>Ready for us to come to you?</h2>
        <p>Tell us where you are and what needs cleaning, and we'll fit you into the route.</p>
      </div>
      <div class="cta-band-actions">
        <a class="btn btn-light" href="<?php echo esc_url( kira_page_url( 'contact' ) ); ?>">Contact us</a>
        <a class="btn btn-ghost" style="border-color:#fff; color:#fff;" href="<?php echo esc_url( kira_page_url( 'services' ) ); ?>">View services</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
