<?php
/**
 * sidebar.php
 */
if ( ! is_active_sidebar( 'sidebar-main' ) ) {
  return;
}
?>

<aside class="side ">
  <?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside>
