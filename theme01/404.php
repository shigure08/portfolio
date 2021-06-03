<?php get_header(); ?>
<div class="container">
    <div class="contents contents-f">
        <section class="not">
            <div class="not__wrapper">
                <header class="not__header">
                    <h1 class="not__header-title">404 Not Found!</h1>
                </header>

                <div class="not__content">
                    <p>ページが見つかりませんでした。URLが正しいかどうか確認してください。</p>
                    <p><a href="<?php echo home_url( '/' ) ?>">ホームに戻る</a></p>
                </div>
            </div>
        </section>
    </div>
    <!--end contents-->
</div>
<!--end container-->
<?php get_footer(); ?>