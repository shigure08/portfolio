<footer class="footer">
<div class="footer__wrapper">
    <div class="footer__inner-dynamic">
        <aside>
            <ul><?php dynamic_sidebar('フッター１'); ?></ul>
            <ul><?php dynamic_sidebar('フッター２'); ?></ul>
            <ul><?php dynamic_sidebar('フッター３'); ?></ul>
            <ul><?php dynamic_sidebar('フッター４'); ?></ul>
        </aside>
    </div><!--footer__inner-dynamic-->
    <div class="footer__inner-copy">
        <div class="footer__copyright">
            <p>© 2020 <?php bloginfo( 'name' ); ?></p>
        </div>
    </div><!--end footer__copyright-->
</div>
</footer>
<?php wp_footer(); ?>
<!--システム・プラグイン用-->
</body>

</html>