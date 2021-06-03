<?php
/**
 * index.php
 */
?>

<?php get_header(); ?>

<div class="main">
  <main>
    <?php if ( have_posts() ) : ?>
      <?php if ( ! is_home() ) : ?>
        <header class="archive__title">
          <?php
            the_archive_title( '<h1 class="heading-medium page-title">「', '」の記事一覧</h1>' );

            if ( is_category() || is_tag() ) {
              $desc = get_the_archive_description();

              if ( $desc ) {
                echo '<div class="archive__description">' . $desc . '</div>';
              }
            }
          ?>
        </header>
      <?php endif; ?>

      <div>
        <?php while ( have_posts() )
        {
            the_post();
            get_template_part( 'template-parts/post/content' );
          }
        ?>
      </div>

      <?php
        the_posts_pagination( array(
          'screen_reader_text'  => '投稿のナビゲーション',
        ) );
      ?>
    <?php else: ?>
      <section class="notfound">
        <header class="archive__title">
          <h1 class="heading-big">Nothing Found</h1>
        </header>

        <div class="page__content">
          おさがしの記事は見つかりませんでした。
        </div>
      </section>
    <?php endif; ?>
  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
