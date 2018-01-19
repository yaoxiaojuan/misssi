<?php get_header();?>
<div class="banner banner--bg-main">
  <div class="vertical-middle">
    <h1 class="font-48">新闻中心</h1>
    <p class="font-24">让数据的价值皆可计算</p>
  </div>
</div>
<div class="news__content">
  <h1><?php the_title(); ?></h1>
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile;
    else: ?>
      <p><?php _e('抱歉，您查看的文章好像不存在诶。。。'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer();?>