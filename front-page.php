<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="misssi">
      <div class="w">
        <?php get_template_part(('content-header')); ?>
        <div class="misssi__text vertical-middle">
          <p class="margin--bottom-20">你好！欢迎来到<span class="bg-miss">&nbsp;MissSi&nbsp;</span></p>
          <span class="text--typed font-xxxl">是放在灯台上，就照亮一家的人</span>
          <div class="margin--top-40">
            <button class="font-18">阅读文章</button>
            <span class="margin-20 inline-block font-m">or</span>
            <button class="font-18">反馈交流</button>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://rudrastyh.com/wp-content/themes/rm/new_a/typed.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        Typed.new('.text--type', {
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