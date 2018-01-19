<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="miss-home">
      <div class="w">
        <header id="header" class="header">
          <div class="header__info inline-block">
            <div class="header__logo font-14 inline-block"><a class="font-white" href="/">MissSi</a></div>
            <div id="burger" class="burger mobile inline-block">
              <div class="bar bg-white"></div>
              <div class="bar bg-white"></div>
            </div>
          </div>
          <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'container_class' => 'header__nav float-right font-14'
            ));
          ?>
        </header>
        <div class="home__text vertical-middle">
          <p class="margin--bottom-20 font-14">你好！欢迎来到<span class="bg-miss">&nbsp;MissSi&nbsp;</span></p>
          <span class="text--typed font-40"></span>
          <div class="margin--top-40">
            <button class="font-18">阅读文章</button>
            <span class="margin-20 inline-block font-14">or</span>
            <button class="font-18">反馈交流</button>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://rudrastyh.com/wp-content/themes/rm/new_a/typed.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        Typed.new('.text--typed', {
          strings: ["人点<strong>灯</strong>，不放在斗底下", "是放在灯台上，就照亮一家的人", "MissSi与你分享 · 微光"],
          loop: true,
          backDelay: 1500,
          startDelay: 100,
          typeSpeed: 100
        });
      });
    </script>
  </body>
</html>