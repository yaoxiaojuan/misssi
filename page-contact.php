<?php get_header();?>
<div class="contact">
  <?php get_template_part(('content-header')); ?>
  [contact-form-7 id="29" title="contact"]
  <form action="" class="contact_content">
    <h1 class="margin--bottom-40" style="font-weight: 300">GET IN TOUCH</h1>
    <p class="font-m">WHAT IS ON YOUR MIND?</p>
    <textarea class="margin--bottom-40" name="content" id="" cols="30" rows="5"></textarea>
    <div class="user_info">
      <div class="inline-block">
        <p class="font-m">NAME</p>
        <input name="name" type="text">
      </div>
      <div class="inline-block">
        <p class="font-m">EMAIL</p>
        <input name="email" type="text">
      </div>
    </div>
    <div class="margin--top-40 text-center"><button class="contact_submit" type='miss'>SEND&nbsp;→</button></div>
  </form>
  <a href="<?php echo home_url('/'); ?>" class="contact_logo">MissSi</a>
</div>
<?php  get_footer(); ?>