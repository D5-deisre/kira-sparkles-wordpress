<?php
/**
 * Fallback template: used for any page or post that has no template of its own.
 */
get_header();
?>

<main id="main">
  <section class="page-hero">
    <div class="wrap">
      <h1><?php echo is_singular() ? esc_html( get_the_title() ) : esc_html( get_bloginfo( 'name' ) ); ?></h1>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?>>
            <?php if ( ! is_singular() ) : ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php endif; ?>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p>Nothing was found here.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
