<?php
/**
 * page.php
 */
?>

<?php get_header(); ?>

<div  class="main content-area">
  <main class="site-main">

    <?php while( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <time class="tiny-text entry-date"><?php echo get_the_date(); ?></time>
          <?php the_title( '<h1 class="heading-big entry__title">', '</h1>' ); ?>
        </header>

        <div class="page__content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>

  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
