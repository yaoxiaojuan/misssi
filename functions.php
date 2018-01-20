<?php
  function blog_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/scripts.js');
  }
  add_action('wp_enqueue_scripts', 'blog_resources');
  add_theme_support( 'post-thumbnails' );

  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
  ));
  function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar'),
        'id'            => 'sidebar-1',
    ) );
    register_sidebar( array(
        'name'          => __( 'Search'),
        'id'            => 'Search',
    ) );
  }
  add_action( 'widgets_init', 'themename_widgets_init' );
  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
?>