<?php
get_header();
?>
<section class="page-banner banner-gallery">
    <h2>Photo Gallery</h2>
    <p>Moments from the fairway, the podium and the University of Kisubi sports family.</p>
  </section>

  <main>

    <section id="unik-team">
      <h2>Teams &amp; Medallists</h2>
      <div class="gallery large">
        <figure class="wide"><img src="<?php echo esc_url( unik_img( 'unik-team.jpg' ) ); ?>" alt="UniK team members holding the University of Kisubi flag, a trophy and medals"><figcaption>The UniK team with the University flag, a trophy and medals</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'group-medals.jpg' ) ); ?>" alt="Large group of medallists and officials posing outdoors beside tents and banners"><figcaption>Medallists and officials after the prize giving</figcaption></figure>
      </div>
    </section>

    <section id="on-the-fairway">
      <h2>On the Fairway</h2>
      <div class="gallery large">
        <figure><img src="<?php echo esc_url( unik_img( 'players-field.jpg' ) ); ?>" alt="Players on the woodball fairway with mallets between games"><figcaption>Players on the woodball fairway</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'championship-banner.jpg' ) ); ?>" alt="Man standing beside the championship trophy in front of the Uganda International Woodball Open Championship banner"><figcaption>The championship trophy and banner</figcaption></figure>
      </div>
    </section>

    <section id="prize-giving">
      <h2>Prize Giving</h2>
      <div class="gallery large">
        <figure><img src="<?php echo esc_url( unik_img( 'podium.jpg' ) ); ?>" alt="Three men on the podium holding trophies in front of the championship backdrop"><figcaption>Podium presentation</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'trophy-holders.jpg' ) ); ?>" alt="Three men each holding a trophy at the prize-giving ceremony"><figcaption>Trophy presentation</figcaption></figure>
        <figure><img src="<?php echo esc_url( unik_img( 'medallists.jpg' ) ); ?>" alt="Five medal winners posing in front of the Uganda Woodball Federation backdrop"><figcaption>Medal winners</figcaption></figure>
      </div>
    </section>

    <section id="share-photos">
      <div class="callout">
        <strong>Have photos from a UniK sports event?</strong> Email them to
        <a href="mailto:sports@unik.ac.ug">sports@unik.ac.ug</a> and we may feature them here.
      </div>
    </section>

  </main>

<?php get_footer(); ?>
