<?php
get_header();
?>
<section class="hero" id="hero">
    <h2>8th Uganda International Woodball Championships</h2>
    <p>Hosted by the University of Kisubi, 6th to 8th November 2026</p>
    <a class="btn" href="<?php echo esc_url( unik_url( 'results' ) ); ?>">View Results</a>
  </section>

  <main>

    <section id="welcome">
      <h2>Welcome to UniK Sports</h2>
      <div class="split top">
        <div>
          <p>UniK Sports is the home of sporting activity at the University of Kisubi. This site brings together
             schedules, results, photos and stories from woodball, football, netball, athletics and more,
             so that our teams and events get the visibility they deserve.</p>
          <p>New to woodball? It is a mallet sport in which players drive a wooden ball through a series of gates.
             Learn how it works and how it came to Uganda and to UniK.</p>
          <p class="center" style="text-align:left"><a class="btn btn-dark" href="<?php echo esc_url( unik_url( 'about' ) ); ?>#woodball">What is woodball?</a></p>
        </div>
        <figure class="photo">
          <img src="<?php echo esc_url( unik_img( 'players-field.jpg' ) ); ?>" alt="Players on the woodball fairway with mallets between games">
          <figcaption>Woodball on the UniK grounds</figcaption>
        </figure>
      </div>
    </section>

    <section id="news">
      <h2>Latest News</h2>
      <div class="news-list">
        <article>
          <h3>Championships Wrap Up at UniK</h3>
          <time datetime="2026-11-08">8 November 2026</time>
          <p>Three days of woodball action brought teams, officials and supporters to the University of Kisubi.</p>
          <a href="<?php echo esc_url( unik_url( 'news' ) ); ?>#wrap-up">Read more</a>
        </article>
        <article>
          <h3>Teams Welcomed to Campus</h3>
          <time datetime="2026-11-06">6 November 2026</time>
          <p>Participating teams were received on the opening day as the 8th championships got under way.</p>
          <a href="<?php echo esc_url( unik_url( 'news' ) ); ?>#welcome-teams">Read more</a>
        </article>
        <article>
          <h3>Register for Upcoming Events</h3>
          <time datetime="2026-11-10">10 November 2026</time>
          <p>Teams wishing to take part in future UniK sports events can now register online.</p>
          <a href="<?php echo esc_url( unik_url( 'news' ) ); ?>#register">Read more</a>
        </article>
      </div>
      <p class="center"><a class="btn btn-dark" href="<?php echo esc_url( unik_url( 'news' ) ); ?>">All news &amp; events</a></p>
    </section>

    <section id="fixtures">
      <h2>Events &amp; Fixtures</h2>
      <div class="table-wrap">
        <table>
          <caption class="sr-only" style="position:absolute;left:-9999px;">UniK Sports events and fixtures</caption>
          <thead>
            <tr><th>Date</th><th>Event</th><th>Venue</th><th>Status</th></tr>
          </thead>
          <tbody>
            <tr><td>6-8 Nov 2026</td><td>8th Uganda International Woodball Championships</td><td>UniK Campus</td><td>Completed - results to be posted</td></tr>
            <tr><td>To be announced</td><td>Inter-Faculty Football</td><td>UniK Sports Grounds</td><td>Upcoming</td></tr>
            <tr><td>To be announced</td><td>Netball Tournament</td><td>UniK Netball Court</td><td>Upcoming</td></tr>
            <tr><td>To be announced</td><td>Athletics Day</td><td>UniK Sports Grounds</td><td>Upcoming</td></tr>
          </tbody>
        </table>
      </div>
      <p class="center"><a class="btn btn-dark" href="<?php echo esc_url( unik_url( 'results' ) ); ?>">Full results &amp; fixtures</a></p>
    </section>

    <section id="gallery">
      <h2>Photo Gallery</h2>
      <div class="gallery">
        <figure><img src="<?php echo esc_url( unik_img( 'unik-team.jpg' ) ); ?>" alt="UniK team members holding the University of Kisubi flag, a trophy and medals"><figcaption>The UniK team with flag, trophy and medals</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'players-field.jpg' ) ); ?>" alt="Players on the woodball fairway with mallets between games"><figcaption>On the woodball fairway</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'podium.jpg' ) ); ?>" alt="Three men on the podium holding trophies in front of the championship backdrop"><figcaption>Podium presentation</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'medallists.jpg' ) ); ?>" alt="Five medal winners posing in front of the Uganda Woodball Federation backdrop"><figcaption>Medal winners</figcaption></figure>
      </div>
      <p class="center"><a class="btn btn-dark" href="<?php echo esc_url( unik_url( 'gallery' ) ); ?>">View full gallery</a></p>
    </section>

  </main>

<?php get_footer(); ?>
