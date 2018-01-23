<?php get_header();?>
<div class="w posts">
  <div class="post_info">
    <h1>Welcome to the Blog</h1>
    <p>人点灯，不放在斗底下，是放在灯台上，就照亮一家的人。MissSi与您分享·微光。</p>
    <?php get_search_form(); ?>
  </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="post_content">
    <?php if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part(('content-article'));
      endwhile;?>
      <p class="font-miss loadmore text-center pointer margin-20">loadmore</p>
    <?php else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
</div>
<?php  get_footer(); ?>