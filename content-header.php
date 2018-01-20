<header id="header" class="header">
  <div class="header_info inline-block">
    <div class="header_logo inline-block"><a href="/">MissSi</a></div>
    <div id="burger" class="burger mobile">
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>
  <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container_class' => 'header_nav float-right font-m'
    ));
  ?>
</header>