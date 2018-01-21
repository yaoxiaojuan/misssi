<?php get_header();?>
<div class="misssi">
  <div class="w">
    <?php get_template_part(('content-header')); ?>
    <div class="misssi_text vertical-middle">
      <p class="margin--bottom-20">你好，欢迎来到&nbsp;MissSi&nbsp;</p>
      <span class="text--typed font-xxxl">是放在灯台上，就照亮一家的人</span>
      <div class="margin--top-40">
        <a href="<?php echo home_url('/').'index.php/blog'; ?>"><button type="miss" size="large" class="font-18">阅读文章</button></a>
      </div>
    </div>
  </div>
</div>
<script src="https://rudrastyh.com/wp-content/themes/rm/new_a/typed.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
    Typed.new('.text--type', {
      strings: ["人点<strong>灯</strong>，不放在斗底下", "是放在灯台上，就照亮一家的人", "MissSi与你分享 · 微光"],
      loop: true,
      backDelay: 1500,
      startDelay: 100,
      typeSpeed: 100
    });
  });
</script>
<?php  get_footer(); ?>