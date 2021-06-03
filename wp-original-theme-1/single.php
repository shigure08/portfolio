<?php
/**
 * single.php
 */
?>

<?php get_header(); ?>

<div  class="main">
  <main>

    <?php while( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <time class="post__date"><?php echo get_the_date(); ?></time>
          <?php the_title( '<h1 class="heading-big entry__title">', '</h1>' ); ?>

          <div class="category">
            <div class=>
              <span class="category__label">カテゴリー</span>
              <?php the_category( ' / ' ); ?>
            </div>

            <?php
              the_tags(
                '<div><span class="category__tags">タグ</span>',
                ' / ',
                '</div>'
              );
            ?>
          </div>
        </header>

        <?php if( has_post_thumbnail() ) : ?>
          <div class="post__thumbnail">
            <?php the_post_thumbnail( 'test-single-image' ); ?>
          </div>
        <?php endif; ?>

        <div class="post__content">
          <?php the_content(); ?>
        </div>
      </article>

      <?php
        the_post_navigation( array(
          'prev_text'           => '<span class="size-small">前の記事</span>',
          'next_text'           => '<span class="size-small">次の記事</span>',
          'screen_reader_text'  => '前後の記事へのリンク',
        ) );
      ?>
    <?php endwhile; ?>

  </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
