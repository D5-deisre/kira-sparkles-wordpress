<?php
get_header();
?>
<section class="page-banner banner-results">
    <h2>Results &amp; Fixtures</h2>
    <p>Scores and podiums from the 8th Uganda International Woodball Championships, plus what is coming next.</p>
  </section>

  <main>

    <section id="at-a-glance">
      <h2>The Championships at a Glance</h2>
      <dl class="glance">
        <dt>Event</dt><dd>8th Uganda International Woodball Championships</dd>
        <dt>Dates</dt><dd>6th to 8th November 2026</dd>
        <dt>Host</dt><dd>University of Kisubi (UniK)</dd>
        <dt>Venue</dt><dd>UniK Campus</dd>
        <dt>Sport</dt><dd>Woodball, in partnership with the Uganda Woodball Federation (UWbF)</dd>
      </dl>
    </section>

    <section id="results">
      <h2>Championship Results</h2>
      <div class="callout">
        <strong>Official results coming soon.</strong> Final results are being confirmed with the organisers and will be
        published here. The table below will be updated once they are verified.
      </div>
      <div class="table-wrap">
        <table>
          <caption class="sr-only" style="position:absolute;left:-9999px;">Medal table for the 8th Uganda International Woodball Championships</caption>
          <thead>
            <tr><th>Position</th><th>Team / Player</th><th>Category</th><th>Status</th></tr>
          </thead>
          <tbody>
            <tr><td>Gold</td><td>To be updated</td><td>To be updated</td><td class="status soon">Pending</td></tr>
            <tr><td>Silver</td><td>To be updated</td><td>To be updated</td><td class="status soon">Pending</td></tr>
            <tr><td>Bronze</td><td>To be updated</td><td>To be updated</td><td class="status soon">Pending</td></tr>
          </tbody>
        </table>
      </div>

      <h3 class="sub">From the podium</h3>
      <div class="gallery large">
        <figure><img src="<?php echo esc_url( unik_img( 'podium.jpg' ) ); ?>" alt="Three men on the podium holding trophies in front of the championship backdrop"><figcaption>Podium presentation</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'trophy-holders.jpg' ) ); ?>" alt="Three men each holding a trophy at the prize-giving ceremony"><figcaption>Trophy presentation</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'medallists.jpg' ) ); ?>" alt="Five medal winners posing in front of the Uganda Woodball Federation backdrop"><figcaption>Medal winners</figcaption></figure>
      </div>
    </section>

    <section id="fixtures">
      <h2>Upcoming Fixtures</h2>
      <div class="table-wrap">
        <table>
          <caption class="sr-only" style="position:absolute;left:-9999px;">UniK Sports events and fixtures</caption>
          <thead>
            <tr><th>Date</th><th>Event</th><th>Venue</th><th>Status</th></tr>
          </thead>
          <tbody>
            <tr><td>6-8 Nov 2026</td><td>8th Uganda International Woodball Championships</td><td>UniK Campus</td><td class="status done">Completed - results to be posted</td></tr>
            <tr><td>To be announced</td><td>Woodball Training &amp; Friendly Matches</td><td>UniK Sports Grounds</td><td class="status soon">Upcoming</td></tr>
            <tr><td>To be announced</td><td>Inter-Faculty Football</td><td>UniK Sports Grounds</td><td class="status soon">Upcoming</td></tr>
            <tr><td>To be announced</td><td>Netball Tournament</td><td>UniK Netball Court</td><td class="status soon">Upcoming</td></tr>
            <tr><td>To be announced</td><td>Athletics Day</td><td>UniK Sports Grounds</td><td class="status soon">Upcoming</td></tr>
          </tbody>
        </table>
      </div>
      <p class="center">Want your team to play? <a class="btn" href="<?php echo esc_url( unik_url( 'contact' ) ); ?>">Register a team</a></p>
    </section>

  </main>

<?php get_footer(); ?>
