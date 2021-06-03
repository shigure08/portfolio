<?php
/**
 * header.php
 */
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="center">
  <div>
    <header class="header__wrap">
      <div class="header__logo">
        <div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
          </a>
        </div>
       <!--
       <div class="header__discription">
         <?php bloginfo( 'description' ); ?>
       </div>
        -->
      </div>

      <nav class="header__nav">
        <?php wp_nav_menu( array(
          'theme_location'  => 'header-navigation',
          'menu_id'         => 'main__nav__top',
          'menu_class'      => 'header__nav-wrap',
        ) ); ?>
      </nav>
    </header>

    <div class="clearfix">
