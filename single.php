<?php get_header();?>
<div class="news_content">
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