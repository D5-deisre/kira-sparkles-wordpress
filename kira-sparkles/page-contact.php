<?php get_header(); ?>

<main id="main">

  <section class="page-hero">
    <div class="wrap">
      <p class="hero-eyebrow">Contact Us</p>
      <h1>Tell us where you are and what needs doing</h1>
      <p>Call, WhatsApp, or send a request below and we'll fit your job into the route.</p>
    </div>
  </section>

  <section class="section">
    <div class="wrap contact-grid">

      <div class="contact-info">
        <div class="section-head">
          <h2>Get in touch</h2>
          <p>We reply fastest over phone or WhatsApp during working hours.</p>
        </div>

        <ul class="contact-details">
          <li>
            <span class="label">Address</span>
            <span class="value">Entebbe Road, Kawuku, Uganda</span>
          </li>
          <li>
            <span class="label">Telephone</span>
            <a href="tel:+256745600006">+256 745 600 006</a>
          </li>
          <li>
            <span class="label">Mobile</span>
            <a href="tel:+256709638550">0709 638 550</a>
          </li>
        </ul>

        <h3 style="font-size:1rem; margin-bottom:10px;">Working hours</h3>
        <table class="hours-table">
          <tr><td>Monday – Friday</td><td>7:00 AM – 6:00 PM</td></tr>
          <tr><td>Saturday</td><td>8:00 AM – 5:00 PM</td></tr>
          <tr><td>Sunday</td><td>By request</td></tr>
        </table>

        <div class="map-block">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/map-illustration.svg' ) ); ?>" alt="Map showing Kira Sparkles located on Entebbe Road, Kawuku">
        </div>

        <figure class="contact-photo">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/sweeping.jpg' ) ); ?>" alt="Cleaner sweeping the floor with a dustpan and brush next to a cleaning trolley">
          <figcaption>Tell us where you are and we'll bring the team</figcaption>
        </figure>
      </div>

      <form class="contact-form" id="contactForm" novalidate>
        <h2 style="font-size:1.2rem; margin-bottom:20px;">Send a request</h2>

        <div class="field">
          <label for="name">Your name</label>
          <input type="text" id="name" name="name" autocomplete="name" required>
        </div>

        <div class="field">
          <label for="email">Your email</label>
          <input type="email" id="email" name="email" autocomplete="email" required>
        </div>

        <div class="field">
          <label for="phone">Phone number <span style="font-weight:400; color:var(--ink-700);">(optional)</span></label>
          <input type="tel" id="phone" name="phone" autocomplete="tel">
        </div>

        <div class="field">
          <label for="message">Your message</label>
          <textarea id="message" name="message" required placeholder="Which service, and where should we come to?"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Send request</button>
        <p class="form-note" id="formStatus" role="status">We'll respond within one working day.</p>
      </form>

    </div>
  </section>

</main>

<?php get_footer(); ?>
