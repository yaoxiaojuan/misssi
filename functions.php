<?php
  function blog_resources() {
    wp_enqueue_style('basic',  get_template_directory_uri() . '/assets/css/basic.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css', 'style');
    wp_enqueue_style('misssi', get_template_directory_uri() . '/assets/css/misssi.css', 'style');
    wp_enqueue_style('posts', get_template_directory_uri() . '/assets/css/posts.css', 'style');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/scripts.js');
  }
  add_action('wp_enqueue_scripts', 'blog_resources');

  function widgets_init() {
    register_sidebar(array(
      'name' => __( 'Sidebar'),
      'id' => 'sidebar-1',
    ));
    register_nav_menus(array(
      'primary' => __('Primary'),
    ));
  }
  add_action('widgets_init', 'widgets_init');
?>