<?php
get_header();
?>
<section class="page-banner banner-news">
    <h2>News &amp; Events</h2>
    <p>The latest stories from the University of Kisubi sports family.</p>
  </section>

  <main>

    <!-- Sample stories: replace the text with your own reports as they are confirmed. -->
    <section id="latest">
      <h2>Latest Stories</h2>
      <div class="news-feed">

        <article class="news-article" id="wrap-up">
          <figure><img src="<?php echo esc_url( unik_img( 'group-medals.jpg' ) ); ?>" alt="Large group of medallists and officials posing outdoors beside tents and banners"></figure>
          <div class="news-body">
            <span class="tag">Woodball</span>
            <h3>Championships Wrap Up at UniK</h3>
            <time datetime="2026-11-08">8 November 2026</time>
            <p>Three days of woodball action brought teams, officials and supporters to the University of Kisubi for
               the 8th Uganda International Woodball Championships.</p>
            <p>The closing day ended with a prize-giving ceremony on the grounds, where medals and trophies were
               presented and teams gathered for group photographs beside the tents and banners.</p>
            <a href="<?php echo esc_url( unik_url( 'results' ) ); ?>">See results &amp; podium photos</a>
          </div>
        </article>

        <article class="news-article" id="unik-team">
          <figure><img src="<?php echo esc_url( unik_img( 'unik-team.jpg' ) ); ?>" alt="UniK team members holding the University of Kisubi flag, a trophy and medals"></figure>
          <div class="news-body">
            <span class="tag">UniK Team</span>
            <h3>UniK Team Celebrates with Medals and a Trophy</h3>
            <time datetime="2026-11-08">8 November 2026</time>
            <p>Members of the UniK team posed proudly with the University flag, their medals and a trophy after the
               championships.</p>
            <p>The photo captures the spirit of the University's motto, "In Virtue We Educate", as students
               carried discipline and teamwork from the classroom to the fairway.</p>
            <a href="<?php echo esc_url( unik_url( 'about' ) ); ?>#unik-and-woodball">UniK and woodball</a>
          </div>
        </article>

        <article class="news-article" id="welcome-teams">
          <figure><img src="<?php echo esc_url( unik_img( 'players-field.jpg' ) ); ?>" alt="Players on the woodball fairway with mallets between games"></figure>
          <div class="news-body">
            <span class="tag">Woodball</span>
            <h3>Teams Welcomed to Campus</h3>
            <time datetime="2026-11-06">6 November 2026</time>
            <p>Participating teams were received on the opening day as the 8th championships got under way on the
               UniK grounds.</p>
            <p>Players were seen on the fairway with their mallets, preparing for the days of competition ahead.</p>
            <a href="<?php echo esc_url( unik_url( 'about' ) ); ?>#woodball">New to woodball? Read how it works</a>
          </div>
        </article>

        <article class="news-article" id="why-this-site">
          <figure><img src="<?php echo esc_url( unik_img( 'championship-banner.jpg' ) ); ?>" alt="Man standing beside the championship trophy in front of the Uganda International Woodball Open Championship banner"></figure>
          <div class="news-body">
            <span class="tag">Announcement</span>
            <h3>Why UniK Now Has Its Own Sports Website</h3>
            <time datetime="2026-11-09">9 November 2026</time>
            <p>Major sporting events at the University, including the recent international woodball championships,
               deserved more visibility than the main University website could give them.</p>
            <p>This dedicated sports site brings schedules, results, photographs and stories together in one place
               so that supporters, partners and the media can find them easily.</p>
            <a href="<?php echo esc_url( unik_url( 'gallery' ) ); ?>">Browse the photo gallery</a>
          </div>
        </article>

        <article class="news-article" id="register">
          <figure><img src="<?php echo esc_url( unik_img( 'medallists.jpg' ) ); ?>" alt="Five medal winners posing in front of the Uganda Woodball Federation backdrop"></figure>
          <div class="news-body">
            <span class="tag">Registration</span>
            <h3>Register for Upcoming Events</h3>
            <time datetime="2026-11-10">10 November 2026</time>
            <p>Teams wishing to take part in future UniK sports events can now register online.</p>
            <p>Simply tell us your team name, contact person and sport, and we will keep you updated about
               fixtures and tournaments.</p>
            <a class="btn" href="<?php echo esc_url( unik_url( 'contact' ) ); ?>">Register your team</a>
          </div>
        </article>

      </div>
    </section>

  </main>

<?php get_footer(); ?>
