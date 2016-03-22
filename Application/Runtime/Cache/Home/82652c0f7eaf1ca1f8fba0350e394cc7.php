<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <title> 观堂</title>
  <link rel="shortcut icon" href="/git/guan-tang/Public/images/logo.png" />
  <meta name="description" content=""/>
  <meta name="keywords" content="观堂"/>
  <meta charset="utf-8"/>
  <meta name="renderer" content="webkit">
  <meta name="author" content="Monolith"/>
  <meta property="og:title" content="观堂"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://guan-tang.com"/>
  <meta property="og:image" content=""/>
  <meta property="og:site_name" content="观堂"/>
  <meta property="og:description" content="观堂装饰设计公司"/>
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/git/guan-tang/Public/css/font/fonts.css">
  <link rel="stylesheet" href="/git/guan-tang/Public/css/style.css">
  <script src="/git/guan-tang/Public/js/lib/jquery-latest.min.js"></script>
   <!--[if IE]>
   <script src="/git/guan-tang/Public/js/lib/html5.js"></script>
   <script src="/git/guan-tang/Public/js/lib/jquery-1.7.2.min.js"></script>
   <![endif] -->
  <script src="/git/guan-tang/Public/js/lib/jquery.mousewheel.min.js"></script>
  <script src="/git/guan-tang/Public/js/lib/jquery.touchSwipe.min.js"></script>
  <!--<script src="js/lib/jquery.easing.1.3.js"></script>-->
  <script src="/git/guan-tang/Public/js/lib/gistfile1.js"></script>
  <script src="/git/guan-tang/Public/js/lib/modernizr.custom.33755.js"></script>
  <script src="/git/guan-tang/Public/js/common.js"></script>


  <link rel="stylesheet" href="/git/guan-tang/Public/css/showDetails.css">
  <!--<link rel="stylesheet" href="/git/guan-tang/Public/css/onepage-scroll.css">-->
  <!--<script src="/git/guan-tang/Public/js/lib/jquery.onepage-scroll.js"></script>-->
  <link rel="stylesheet" href="/git/guan-tang/Public/js/fancybox/jquery.fancybox.css">
  <!--<script src="/git/guan-tang/Public/js/lib/jquery.onepage-scroll.js"></script>-->
  <script src="/git/guan-tang/Public/js/lib/jquery.easing.1.3.js"></script>
  <script src="/git/guan-tang/Public/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
  <!--<script src="/git/guan-tang/Public/js/lib/jquery.mobile-1.4.5.min.js"></script>-->
  <script src="/git/guan-tang/Public/js/showDetails.js"></script>
</head>

<script>
  $(document).ready(function () {
// Global variables
// Mouse events
// Set-up
// Mobile set-up
    if (touchScreen) {
    }
  });
</script>

<body>
<div id="showcase-loader">
<div id="case-study-container">

<div id="case-study-wrapper" class="case-study-wrapper">
<section class="page page-1" data-id="1">
  <?php if(is_array($caseImage)): $i = 0; $__LIST__ = $caseImage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div id="case-study-cover">
      <img src="<?php echo ($data["guid"]); ?>" alt="<?php echo ($data["post_title"]); ?>" id="case-study-cover-bg">
    </div>
    <div id="case-study-cover-title" data-id="1">
      <h3><?php echo ($data["post_title"]); ?></h3>
      <img src="/git/guan-tang/Public/images/icon_scroll_arrow.png">
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</section>

<?php if(is_array($detail)): $k = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k; if(($k == 1)): ?><section class="page page-2 case-study-page case-study-v-text-right" data-id="2">
      <div class="case-study-v-image-container case-study-v-text-right-image-1">
        <a href="<?php echo ($data["guid"]); ?>" class="detailImage" rel="page2"><img src="<?php echo ($data["guid"]); ?>" class="case-study-page-image case-study-page-image-v"></a>
      </div>
      <div class="case-study-v-text-container case-study-v-text-right-text-1">
        <div class="case-study-text-wrapper-top">
              <span>
                <p><?php echo ($data["post_content"]); ?></p>
              </span>
        </div>
      </div>
    </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
<?php if(is_array($detail)): $k = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k; if(($k == 2)): ?><section class="page page-3 case-study-page case-study-double-h" data-id="3">
    <?php if(is_array($detail)): $k = 0; $__LIST__ = array_slice($detail,1,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><div class="case-study-h-image-container case-study-double-h-image-<?php echo ($k); ?>">
        <a href="<?php echo ($data["guid"]); ?>" class="detailImage" rel="page3"><img src="<?php echo ($data["guid"]); ?>" class="case-study-page-image case-study-h-page-image-h"></a>
      </div>
      <div class="case-study-h-text-container case-study-double-h-text-<?php echo ($k); ?>">
        <div class="case-study-text-wrapper-top">
            <span>
              <p><?php echo ($data["post_content"]); ?></p>
            </span>
        </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>

<?php if(is_array($detail)): $k = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k; if(($k == 2)): ?><section class="page page-4 case-study-page case-study-double-h" data-id="4">
      <?php if(is_array($detail)): $k = 0; $__LIST__ = array_slice($detail,3,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><div class="case-study-image-container case-study-double-image-<?php echo ($k); ?>">
          <a href="<?php echo ($data["guid"]); ?>" class="detailImage" rel="page4"><img src="<?php echo ($data["guid"]); ?>" class="case-study-page-image case-study-page-image-h"></a>
        </div>
        <div class="case-study-text-container case-study-double-text-<?php echo ($k); ?>">
          <div class="case-study-text-wrapper-top">
            <span>
              <p><?php echo ($data["post_content"]); ?></p>
            </span>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>

<section class="page page-5" id="case-study-last-page" data-id="5">
  <div id="case-study-more-projects">
    <h5>MORE PROJECTS</h5>
    <?php if(is_array($case)): $k = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><a href="<?php echo U('showDetail/getDetailByExcerpt', array(), '');?>/excerpt/<?php echo ($data["post_title"]); ?>" id="case-study-more-projects-item-<?php echo ($k-1); ?>" class="case-study-more-projects-item">
        <img src="<?php echo ($data["guid"]); ?>" alt="<?php echo ($data["post_title"]); ?>">

        <div class="case-study-more-projects-text">
          <h6>
            <span><?php echo ($data["post_title"]); ?></span>
          </h6>
        </div>
      </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <a href="javascript:;" id="case-studies-jump-arrow">
      <img src="/git/guan-tang/Public/images/icon_left_arrow.png">
    </a>
  </div>
</section>
</div>
  <div class="navigation">
    <ul>
      <li><a data-id="1" href="#1" class="pagination pagination-1 active"></a></li>
      <li><a data-id="2" href="#2" class="pagination pagination-2"></a></li>
      <li><a data-id="3" href="#3" class="pagination pagination-3"></a></li>
      <li><a data-id="4" href="#4" class="pagination pagination-4"></a></li>
      <li><a data-id="5" href="#5" class="pagination pagination-5"></a></li>
    </ul>
  </div>
</div>
</div>
<!-- END Sub header -->
<?php if(is_array($caseImage)): $k = 0; $__LIST__ = $caseImage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><div id="case-study-title-container">

    <h3><?php echo ($data["post_title"]); ?></h3>

  </div><?php endforeach; endif; else: echo "" ;endif; ?>

<div id="header-bg"></div>
<!-- Nav -->
<nav>

  <img src="/git/guan-tang/Public/images/showcase.jpg" alt="" id="nav-image-showcase"/>

  <img src="/git/guan-tang/Public/images/company.jpg" alt="" id="nav-image-about"/>

  <div id="nav-bg"></div>
  <ul id="main-nav">
    <div id="main-nav-wrapper">
      <li id="main-nav-showcase"><a href="/git/guan-tang/index.php/case" id="showcase">SHOWCASE<span></span></a></li>
      <span class="main-nav-divider"><span></span></span>
      <li id="main-nav-about"><a href="/git/guan-tang/index.php/about" id="about">ABOUT<span></span></a></li>

    </div>
  </ul>
  <ul id="main-nav-mobile">
    <div id="main-nav-wrapper-mobile">
      <li id="main-nav-mobile-showcase"><a href="/git/guan-tang/index.php/case">SHOWCASE</a></li>
      <span class="main-nav-mobile-divider"><span></span></span>
      <li id="main-nav-mobile-about"><a href="/git/guan-tang/index.php/about">ABOUT</a></li>

    </div>
  </ul>
</nav>
<!-- END Nav -->

<!-- Contact -->
<div id="contact-container">
  <ul id="contact">
    <div id="contact-wrapper">
      <li id="contact-new-york"><h3>深圳</h3>

        <p>深圳市龙岗区布澜路31号李朗国际珠宝文化产业园A4栋1305室<br/>T&mdash;0755-28245576<br/>E&mdash;<a href="mailto:1158391188@guan-tang.com" class="contact-email-ny">1158391188@guan-tang.com</a><br/><a
            href="<?php echo U('LoadMap/index');?>" class="map-link"><img src="/git/guan-tang/Public/images/icon_map.png" alt=""/>MORE</a></p>
      </li>

      <span class="contact-divider"><span></span></span>
      <li id="contact-connect"><h3>CONNECT</h3>

        <p><span>QQ:1158391188</span><br/></br>
          <span>Tel:0755-28245576</span>
          <br/><br/><br/>
        </p>
      </li>
    </div>
  </ul>

  <ul id="contact-mobile">
    <div id="contact-wrapper-mobile">
      <li id="contact-mobile-new-york"><h3>深圳</h3>

        <p>深圳市龙岗区布澜路31号李朗国际珠宝文化产业园A4栋1305室<br/>T&mdash;0755-28245576<br/>E&mdash;<a href="mailto:1158391188@guan-tang.com" class="contact-email-ny">1158391188@guan-tang.com</a><br/><a
            href="<?php echo U('LoadMap/index');?>" class="map-link"><img src="/git/guan-tang/Public/images/icon_map.png" alt=""/>MORE</a></p>
      </li>

      <span class="contact-mobile-divider"><span></span></span>
      <li id="contact-mobile-connect"><h3>CONNECT</h3>

        <p><span>QQ:1158391188</span><br/></br>
          <span>Tel:0755-28245576</span>
          <br/><br/><br/>
        </p>
      </li>
    </div>
  </ul>
</div>

<!-- Header -->
<header>
  <a href="<?php echo U('Index/index');?>" id="logo"></a>
  <a href="javascript:loadContact();" id="contact-link"><span id="contact-link-text">CONTACT</span><span
      id="contact-link-icon"></span><span id="contact-close-icon"></span></a>
  <a href="javascript:loadNav();" id="nav-link"><span></span></a>
</header>
<!-- END Header -->

<div id="loader">
  <div id="loader-bar"></div>
  <div id="loader-flashing" class="animate-flashing"></div>
</div>



<!--网站页脚，添加备案号-->

<div class="footer">
      <span>版权所有 &copy;观堂装饰设计</span>
      <span><a href="http://www.miibeian.gov.cn/">粤ICP备14019295号</a> </span>
</div>

    <style>
      .footer{
        position: absolute;
        bottom: 15px;
        width: 100%;
        height: 20px;
        /*background-color: #ededed;
        background-color:rgba(237, 237, 237, 0.5);*/
      }

      .footer span {
        float: right;
        line-height: 20px;
        padding-right: 100px;
        color: #ccc;
      }
      .footer span a {
        color: #cccccc;
      }

      .footer span a:hover {
        color: #0044cc;
      }
    </style>

    <script>
      if($(window).width() < 760){
        $('.footer span').css({
          paddingRight:'10px'
        })
      }
    </script>
</body>
<script>
  $('.detailImage').fancybox();
</script>
</html>