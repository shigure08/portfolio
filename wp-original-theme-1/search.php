<?php
/**
 * search.php
 */
?>

<?php get_header(); ?>

<div class="main">
  <main class="site-main">
    <?php if( have_posts() ) : ?>
      <header class="archive__title">
        <h1 class="heading-medium">「<span><?php echo get_search_query(); ?></span>」で検索した結果</h1>
        <p class="archive__description">
          <span><?php echo $wp_query->found_posts; ?></span>件の記事が見つかりました。
        </p>
      </header>

      <div>
        <?php
          while ( have_posts() ) {
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
          <h1 class="heading__big">Nothing Found</h1>
        </header>

        <div>
          「<span><?php echo get_search_query(); ?></span>」で検索しましたが、何も見つかりませんでした。検索ワードを変えてもう一度お試しください。
        </div>
      </section>
    <?php endif; ?>
  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
