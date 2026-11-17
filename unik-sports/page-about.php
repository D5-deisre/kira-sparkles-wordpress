<?php
get_header();
?>
<section class="page-banner banner-about">
    <h2>About UniK Sports</h2>
    <p>Who we are, what woodball is, and how the University of Kisubi is part of its story.</p>
  </section>

  <main>

    <section id="who-we-are">
      <h2>Who We Are</h2>
      <p>UniK Sports brings together the sporting life of the University of Kisubi. From the woodball fairway to the
         football pitch, the netball court and the athletics track, our students train, compete and represent the
         University with pride, guided by the University motto, "In Virtue We Educate".</p>
      <div class="cards" style="margin-top:18px">
        <div class="card">
          <h3>Our Mission</h3>
          <p>To promote sport as part of whole-person education: healthy bodies, strong teams and good character.</p>
        </div>
        <div class="card">
          <h3>What We Offer</h3>
          <p>Training, competitions and friendly matches in woodball, football, netball and athletics.</p>
        </div>
        <div class="card">
          <h3>Our Values</h3>
          <p>Fair play, teamwork, discipline and excellence, on and off the field.</p>
        </div>
        <div class="card">
          <h3>Our Reach</h3>
          <p>Proud hosts of the 8th Uganda International Woodball Championships, 6th to 8th November 2026.</p>
        </div>
      </div>
    </section>

    <section id="woodball">
      <h2>What Is Woodball?</h2>
      <div class="split top">
        <div class="logo-card">
          <img src="<?php echo esc_url( unik_img( 'woodball-logo.jpg' ) ); ?>" alt="Uganda Woodball Federation (UWbF) logo">
          <p><strong>Uganda Woodball Federation (UWbF)</strong><br>The national body for woodball in Uganda</p>
        </div>
        <div>
          <p>Woodball is a mallet sport invented in Taiwan in 1990 by Weng Ming-hui and Kuang-chu Young. Players use a
             wooden mallet to strike a wooden ball through a series of wooden gates, in the spirit of golf and croquet.
             It can be played on grass, on sand or even indoors, which makes it easy to introduce on campuses and in
             communities.</p>
          <p>Today woodball is played in around 45 countries and territories, and the sport is governed worldwide by
             the International Woodball Federation.</p>

          <h3 class="sub">How a game works</h3>
          <ol class="steps">
            <li>Players take turns striking the wooden ball with a mallet.</li>
            <li>The ball must be driven through the gates along the fairway in the correct order.</li>
            <li>Play finishes at the final goal.</li>
            <li>In stroke play, the player or team that completes the course in the fewest strokes does best.</li>
          </ol>
        </div>
      </div>

      <h3 class="sub">Woodball in Uganda</h3>
      <div class="split top">
        <div>
          <p>Woodball came to Uganda through university sport, pioneered by Mr Kayongo Paul Mark of Ndejje University
             and Ms Peninnah Kabenge of Makerere University. The Uganda Woodball Federation (UWbF) was formed in 2008
             and is recognised by the National Council of Sports.</p>
          <p>Uganda's players have gone on to compete at international events such as the Woodball World Cup and the
             World University Woodball Championship, showing how far a campus sport can travel.</p>
        </div>
        <figure class="photo">
          <img src="<?php echo esc_url( unik_img( 'players-field.jpg' ) ); ?>" alt="Players on the woodball fairway with mallets between games">
          <figcaption>Players on the fairway, mallets in hand</figcaption>
        </figure>
      </div>
    </section>

    <section id="unik-and-woodball">
      <h2>UniK and Woodball</h2>
      <div class="split">
        <figure class="photo">
          <img src="<?php echo esc_url( unik_img( 'unik-team.jpg' ) ); ?>" alt="UniK team members holding the University of Kisubi flag, a trophy and medals">
          <figcaption>The UniK team with the University flag, a trophy and medals</figcaption>
        </figure>
        <div>
          <p>The University of Kisubi is proud to be part of woodball's growth in Uganda. From 6th to 8th November
             2026 the University hosted the 8th Uganda International Woodball Championships on its campus, welcoming
             teams, officials and supporters from across the competition.</p>
          <p>UniK athletes take part in the sport and carry the University flag onto the fairway and onto the
             podium. This website exists so that every match, medal and moment gets the attention it deserves.</p>
          <p class="center" style="text-align:left">
            <a class="btn" href="<?php echo esc_url( unik_url( 'results' ) ); ?>">See the results</a>
            <a class="btn btn-dark" href="<?php echo esc_url( unik_url( 'contact' ) ); ?>">Register your team</a>
          </p>
        </div>
      </div>

      <figure class="photo" style="margin-top:24px">
        <img src="<?php echo esc_url( unik_img( 'championship-banner.jpg' ) ); ?>" alt="Man standing beside the championship trophy in front of the Uganda International Woodball Open Championship banner">
        <figcaption>The championship trophy in front of the Uganda International Woodball Open Championship banner</figcaption>
      </figure>
    </section>

  </main>

<?php get_footer(); ?>
