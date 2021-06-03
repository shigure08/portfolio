<?php
/**
 * functions.php
 */


/*
 * Setup White Snow theme.
 */
function test_setup_theme() {
  // Wordpress will generate <title> tag automatically.
  add_theme_support( 'title-tag' );

  // Enable support for adding RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  // Enable support for menus.
  register_nav_menu( 'header-navigation', 'Header navigation' );

  // Enable support for Post Thumbnails.
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 760, 300, true );
  add_image_size( 'test-single-image', 960, 540, true );

  // Set the max content width.
  $GLOBALS['content_width'] = 704;
}

add_action( 'after_setup_theme', 'test_setup_theme' );


/*
 * Enqueue styles and scripts.
 */
function test_enqueue_scripts() {
  // Load theme style.
  wp_enqueue_style(
    'test-style',
    get_stylesheet_uri()
  );

  // Enqueue Roboto font from google.
  wp_enqueue_style(
    'roboto',
    'https://fonts.googleapis.com/css?family=Roboto'
  );
}

add_action( 'wp_enqueue_scripts', 'test_enqueue_scripts' );


/*
 * Register sidebar.
 */
function test_widgets_init() {
  // Register main sidebar
  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'sidebar-main',
    'description'   => 'Add widgets you want to display in sidebar.',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="widget-title heading-small">',
    'after_title'   => '</h5>',
  ) );
}

add_action( 'widgets_init', 'test_widgets_init' );
