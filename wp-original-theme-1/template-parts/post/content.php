<?php
/**
* content.php
*/
?>


<article <?php post_class( 'article__list' ); ?>>
  <a href="<?php the_permalink(); ?>">
    <div>
      <!--画像を追加-->
      <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php endif; ?>
    </div><!--end img-warp-->
    <div>
      <!--タイトル-->
      <h2><?php the_title(); ?></h2>
      <!--投稿日を表示-->
      <span>
        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
      </span>
      <!--著者を表示-->
      <span>
        <?php the_author(); ?>
      </span>
      <!--抜粋-->
      <?php the_excerpt(); ?>
    </div><!--end text-->
  </a>
</article>
