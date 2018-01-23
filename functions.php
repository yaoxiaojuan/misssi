<?php
  function blog_resources() {
    wp_enqueue_style('basic',  get_template_directory_uri() . '/dist/css/basic.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/dist/css/header.css', 'style');
    wp_enqueue_style('misssi', get_template_directory_uri() . '/dist/css/misssi.css', 'style');
    wp_enqueue_style('posts', get_template_directory_uri() . '/dist/css/posts.css', 'style');
    wp_enqueue_style('page', get_template_directory_uri() . '/dist/css/page.css', 'style');
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/scripts.js');
  }
  add_action('wp_enqueue_scripts', 'blog_resources');
  add_theme_support( 'post-thumbnails' );

  function widgets_init() {
    register_sidebar(array(
      'name' => _( 'Sidebar'),
      'id' => 'sidebar-1',
      'before_title' => '<span class="hidden">',
      'after_title' => '</span>',
      'before_widget' => '<aside class="post_sidebar pc">',
      'after_widget'  => '</aside>',
    ));
    register_nav_menus(array(
      'primary' => _('Primary'),
    ));
  }
  add_action('widgets_init', 'widgets_init');
?>