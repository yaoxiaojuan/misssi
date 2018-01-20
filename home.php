<div class="w posts">
  <?php get_header();?>
  <div class="posts__info">
    <h1>欢迎阅读MissSi的文章</h1>
    <p>人点灯，不放在斗底下，是放在灯台上，就照亮一家的人。</p>
  </div>
  <?php
    get_search_form();
    get_sidebar();
  ?>
  <div class="posts__content">
    <?php if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part(('content-article'));
      endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
  <?php  get_footer(); ?>
</div>