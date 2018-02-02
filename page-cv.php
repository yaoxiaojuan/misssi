<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>要笑娟的简历</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/dist/css/cv.css'?>">
</head>
<body>
<section class="cv">
  <div class="info">
    <div class="info__basic">
      <img class="photo" src="http://ovjyf065b.bkt.clouddn.com/wechat.png" alt="头像">
      <h1 class="name">要笑娟</h1>
      <a class="intro" href="http://misssi.net">http://misssi.net</a>
    </div>
    <div class="padding--bottom-20 info--line">
      <h2 class="info__title">PROFILE</h2>
      <p class="margin--bottom-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit aut deserunt sit, laudantium aliquam quia enim </p>
    </div>
    <div class="info__connect padding--bottom-20 info--line">
      <h2 class="info__title">CONTACT ME</h2>
      <a href="tel:18230273602">182-3027-3602</a>
      <a href="mailto:lucky.yaoxiaojuan@gmail.com">lucky.yaoxiaojuan@gmail.com</a>
      <br>
      <a href="http://misssi.net">http://misssi.net</a>
      <a href="https://github.com/luckyYao">https://github.com/luckyyao</a>
    </div>
    <div class="padding--bottom-20 info--line">
      <h2 class="info__title">SKILLS</h2>
      <ul class="skill">
        <li>
          <p class="font--size-small">HTML</p>
          <div class="progress" value="80"><span class="progress__dragbar"></span></div>
        </li>
        <li>
          <p class="font--size-small">CSS</p>
          <div class="progress" value="70"><span class="progress__dragbar"></span></div>
        </li>
        <li>
          <p class="font--size-small">JavaScript</p>
          <div class="progress" value="75"><span class="progress__dragbar"></span></div>
        </li>
        <li>
          <p class="font--size-small">Git</p>
          <div class="progress" value="70"><span class="progress__dragbar"></span></div>
        </li>
        <li>
          <p class="font--size-small">Gulp</p>
          <div class="progress" value="60"><span class="progress__dragbar"></span></div>
        </li>
      </ul>
    </div>
    <div class="info--line">
      <h2 class="info__title">THANK YOU</h2>
    </div>
  </div>
  <div class="content">
    <div class="content__projects">
      <h2 class="content__title">项目经验</h2>
      <ul class="content__list table">
        <li class="row">
          <span class="list__label cell">公有云</span>
          <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
        </li>
        <li class="row">
          <span class="list__label cell">公有云</span>
          <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
        </li>
      </ul>
    </div>
    <div class="content__jobs">
      <h2 class="content__title">工作经验</h2>
      <div class="content__list table">
        <h3 class="row">
          <span class="list__label cell">Feb 2016-Feb 2018</span>
          <a class="cell" href="http://cloudin.cn/">Cloudin云英</a>
        </h3>
        <ul>
          <li class="row">
            <span class="list__label cell">公有云</span>
            <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
          </li>
          <li class="row">
            <span class="list__label cell">公有云</span>
            <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
          </li>
        </ul>
      </div>
      <div class="job">
        <h3 class="job__title">
          <span class="inline-block margin--right-20">Feb 2016-Feb 2018</span>
          <a class="inline-block" href="http://cloudin.cn/">大学生创业</a>
        </h3>
        <ul class="job__info table">
          <li class="row">
            <span class="list__label cell">公有云</span>
            <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
          </li>
          <li class="row">
            <span class="list__label cell">公有云</span>
            <p class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam, eveniet! Sint mollitia, quo tempora laudantium officia facere ipsam corporis quisquam excepturi, magnam corrupti distinctio qui sapiente dolore ullam voluptate?</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="content__edu">
      <p>燕山大学</p>
      <p>软件工程学院·信息安全</p>
      <p>2012-2016</p>
      <p>英语6级</p>
    </div>
  </div>
</section>
<script>
  (function() {
    var progress = document.getElementsByClassName('progress');
    var progressArray = Array.prototype.slice.call(progress);
    progressArray.map(function(item) {
      var value = item.getAttribute('value');
      var dragbar = item.querySelector('.progress__dragbar');
      dragbar.style.left = value + '%';
    });
  })();
</script>
</body>
</html>