<?php get_header();?>
<div class="w posts">
  <h1>search result for:<?php the_search_query(); ?></h1>
  <?php
    get_search_form();
    get_sidebar();
  ?>
  <div class="posts_content" style="width: 880px;">
    <?php if(have_posts()) :
      while(have_posts()): the_post();
        get_template_part(('content-article'));
      endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
<?php  get_footer(); ?>
