<div class="related">
<h3 class="related__title">こちらの記事もオススメです</h3>
<?php
$categories = wp_get_post_categories($post->ID, array('orderby'=>'rand')); // 複数カテゴリーを持つ場合ランダムで取得
if ($categories) {
    $args = array(
        'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
        'post__not_in' => array($post->ID), // 表示している記事を除く
        'showposts'=>7, // 取得記事数
        'caller_get_posts'=>1, // 取得した記事の何番目から表示するか
        'orderby'=> 'rand' // 記事をランダムで取得
    ); 
    $my_query = new WP_Query($args); 
    if( $my_query->have_posts() ) { ?>
        <ul>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>" class="related__item">
        <?php if( has_post_thumbnail()) :?>
            <?php the_post_thumbnail(array(150,100));?>
          <?php else :?>
            <img src="<?php echo get_template_directory_uri()?>/images/no-image.gif" alt="">
          <?php endif;?>
        <p class="related__item-p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p></a></li>
         <?php endwhile; wp_reset_query(); ?>
<?php } else { ?>
    <p class="no-related">関連する記事は見当たりません…</p>
<?php } } ?>
</ul>
</div>