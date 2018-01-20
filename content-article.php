<article class="margin--top-80">
  <h2 class="font-xxl post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="font-m margin--vertical-20 font--weight-300">
    <span class="font-miss"><?php the_category(', ') ?> </span>
    <span class="font-gray">&nbsp;/&nbsp;<?php the_date() ?></span>
  </p>
  <div class="font-m w600 font--weight-300"><?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>"><button class="margin--top-40" type="default" size='small'>Learn More&nbsp;→</button></a>
</article>