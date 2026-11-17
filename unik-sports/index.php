<?php get_header(); ?>
<main>
  <?php while ( have_posts() ) : the_post(); ?>
    <section>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
