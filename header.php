<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_template_directory_uri(). '/dist/images/favicon.png'?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
    if(!is_page()){
      get_template_part(('content-header'));
    }
  ?>
