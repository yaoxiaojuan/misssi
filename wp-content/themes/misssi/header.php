<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header" class="header w">
    <div class="header__info inline-block">
      <div class="header__logo font-14 inline-block"><a href="/">MissSi</a></div>
      <div id="burger" class="burger mobile inline-block">
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_class' => 'header__nav float-right font-14'
      ));
    ?>
  </header>
