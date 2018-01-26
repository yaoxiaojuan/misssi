<?php get_header();?>
<div class="w posts">
  <div class="post_info">
    <h1>Welcome to the Blog</h1>
    <p>Neither do people light a lamp and put it under a bowl. <br>Instead they put it on its stand, and it gives light to everyone in the house. </p>
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