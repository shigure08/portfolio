<?php
/**
 * 404.php
 */
?>

<?php get_header(); ?>

<div>
  <main>
    <section class="notfound404">
      <header>
        <h1>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/404.png"></h1>
          </a>
        </h1>
      </header>

      <div class="page__content">
        <p>ページが見つかりませんでした。URLが正しいかどうか確認してください。</p>
        <p><a href="<?php echo home_url( '/' ) ?>">ホームに戻る</a></p>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>
