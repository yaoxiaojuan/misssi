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

  // aside category
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

  // loadmore
  function load_more_scripts() {
    global $wp_query;
    wp_enqueue_script('jquery');
    wp_register_script('loadmore', get_stylesheet_directory_uri() . '/dist/js/loadmore.js', array('jquery'));
    wp_localize_script('loadmore', 'loadmore_params', array(
      'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
      'posts' => json_encode( $wp_query->query_vars ),
      'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
      'max_page' => $wp_query->max_num_pages
    ));
    wp_enqueue_script('loadmore');
  }
  add_action('wp_enqueue_scripts', 'load_more_scripts');

  function loadmore_ajax_handler(){
    $args = json_decode(stripslashes($_POST['query'] ), true);
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    query_posts($args);
    if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part('content-article');
      endwhile;
    endif;
    die;
  }
  add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
  add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');
?>