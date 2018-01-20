<?php get_header();?>
<div class="w posts">
  <div class="post_info">
    <h1><?php single_cat_title(); ?></h1>
    <?php get_search_form(); ?>
  </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="post_content">
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