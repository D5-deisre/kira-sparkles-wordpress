<?php
get_header();
?>
<section class="page-banner banner-contact">
    <h2>Contact / Register</h2>
    <p>Register your team for future UniK sports events or get in touch with us.</p>
  </section>

  <main>
    <section>
      <h2>Team Registration &amp; Contact</h2>
      <?php if ( isset( $_GET['registered'] ) && '1' === $_GET['registered'] ) : ?>
        <div class="callout"><strong>Thank you!</strong> Your team registration has been received. We will be in touch.</div>
      <?php elseif ( isset( $_GET['registered'] ) ) : ?>
        <div class="callout"><strong>Sorry.</strong> Please fill in all required fields with a valid email and try again.</div>
      <?php endif; ?>
      <div class="contact-layout">

        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
          <input type="hidden" name="action" value="unik_register">
          <?php wp_nonce_field( 'unik_register', 'unik_nonce' ); ?>

          <div class="form-row">
            <label for="team">Team name</label>
            <input type="text" id="team" name="team" required minlength="2">
          </div>

          <div class="form-row">
            <label for="person">Contact person</label>
            <input type="text" id="person" name="person" required>
          </div>

          <div class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-row">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" required
                   pattern="\+?[0-9]{10,13}" title="Enter 10 to 13 digits, e.g. +256700000000">
          </div>

          <div class="form-row">
            <label for="sport">Sport</label>
            <select id="sport" name="sport" required>
              <option value="">-- Select a sport --</option>
              <option>Woodball</option>
              <option>Football</option>
              <option>Netball</option>
              <option>Athletics</option>
              <option>Other</option>
            </select>
          </div>

          <div class="form-row">
            <label for="players">Number of players</label>
            <input type="number" id="players" name="players" min="1" max="30" required>
          </div>

          <div class="form-row">
            <label for="comments">Comments</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
          </div>

          <button type="submit" class="btn">Submit</button>
          <button type="reset" class="btn btn-reset">Reset</button>
        </form>

        <aside class="info-card">
          <div class="card">
            <h3>Get in Touch</h3>
            <p>University of Kisubi<br>Entebbe Road, Kisubi, Uganda<br>
               Email: <a href="mailto:sports@unik.ac.ug">sports@unik.ac.ug</a><br>
               Phone: +256 000 000000</p>
          </div>
          <div class="card" style="margin-top:16px">
            <h3>Before You Register</h3>
            <ul class="steps">
              <li>Choose one contact person for your team.</li>
              <li>Give an email address and phone number we can reach.</li>
              <li>Tell us the sport and how many players you expect.</li>
            </ul>
            <p style="margin-top:10px">New to woodball? <a href="<?php echo esc_url( unik_url( 'about' ) ); ?>#woodball">Learn how the sport works</a>.</p>
          </div>
        </aside>

      </div>
    </section>
  </main>

<?php get_footer(); ?>
