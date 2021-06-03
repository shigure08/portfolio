<?php
/**
 * search.php
 *
 * The template for displaying search results.
 *
 * 
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="contents ">
    <?php if( have_posts() ) : ?>
      <header class="search-header">
        <h1 class="search-header__medium search-header__title">「<span><?php echo get_search_query(); ?></span>」で検索した結果</h1>
        <p class="search-header__description">
          <span><?php echo $wp_query->found_posts; ?></span>件の記事が見つかりました。
        </p>
      </header>

      <div class="entry">
        <?php
          while ( have_posts() ) {
            the_post();
            get_template_part( 'loop-content' );
          }
        ?>
      </div>
      
      <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>'
      ) ); ?>
    </div>
    <?php else: ?>
      <section class="entry__no-result entry__not-found">
        <header class="search-header">
          <h1 class="search-header__big search-header__title">Nothing Found</h1>
        </header>

        <div class="search-header__content">
          「<span><?php echo get_search_query(); ?></span>」で検索しましたが、何も見つかりませんでした。検索ワードを変えてもう一度お試しください。 
        </div>
      </section>
    <?php endif; ?>
    </div>
    <!--end contents-->
</div>
<!--end container-->
<?php get_footer(); ?>