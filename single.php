<?php get_header();?>
<div class="w posts">
  <div class="post_content">
    <?php if(have_posts()) :
      while(have_posts()): the_post();?>
        <article class="margin--top-80">
          <h2 class="font-xxl post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="font-m margin--vertical-20 font--weight-300">
            <span class="font-miss"><?php the_category(', ') ?> </span>
            <span class="font-gray">&nbsp;/&nbsp;<?php the_date() ?></span>
          </p>
          <div class="font-m markdown">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile;
    else :
      echo '<p> No content found</p>';
    endif;?>
  </div>
</div>
<script>
  (function() {
    var doc_ols = document.getElementsByTagName("ol");
    for ( i=0; i<doc_ols.length; i++) {
    var ol_start = doc_ols[i].getAttribute("start") - 1;
    doc_ols[i].setAttribute("style", "counter-reset:ol " + ol_start + ";");
    }
  })();
</script>
<?php  get_footer(); ?>