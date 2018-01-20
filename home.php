<?php get_header();?>
<div class="w posts">
  <div class="posts_info">
    <h1>欢迎阅读MissSi的文章</h1>
    <p>人点灯，不放在斗底下，是放在灯台上，就照亮一家的人。MissSi与您分享·微光。</p>
    <?php get_search_form(); ?>
  </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="posts_content">
    <?php if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part(('content-article'));
      endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
</div>
<?php  get_footer(); ?>