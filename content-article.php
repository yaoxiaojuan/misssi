<article class="post page">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><?php the_category(',') ?> | <?php the_date() ?></p>
  <?php the_excerpt(); ?>
</article>