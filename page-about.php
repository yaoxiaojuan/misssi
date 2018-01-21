<?php get_header();?>
<div class="w posts">
  <?php get_template_part(('content-header')); ?>
  <div class="post_content">
    <?php if(have_posts()) :
      while(have_posts()): the_post();?>
        <article class="margin--top-80">
          <h2 class="font-xxl post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="font-m margin--vertical-20 font--weight-300">
            <span class="font-miss"><?php the_category(', ') ?> </span>
            <span class="font-gray">&nbsp;/&nbsp;<?php the_date() ?></span>
          </p>
          <div class="font-m font--weight-300">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
</div>
<?php  get_footer(); ?>