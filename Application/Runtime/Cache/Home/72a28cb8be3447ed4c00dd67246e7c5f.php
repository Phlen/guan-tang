<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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


  <link rel="stylesheet" href="/git/guan-tang/Public/css/showcase.css">
  <script src="/git/guan-tang/Public/js/showcase.js"></script>
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
  <div id="case-studies-container">
    <?php if(is_array($case)): $k = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><div id="case-studies-item-<?php echo ($k -1); ?>" class="case-studies-item">
        <a href="/git/guan-tang/index.php/caseDetail/<?php echo ($data["post_title"]); ?>">
        <!--<a href="<?php echo U('showDetail/index', array(), '');?>/excerpt/<?php echo ($data["post_title"]); ?>">-->
          <img src="<?php echo ($data["guid"]); ?>">

          <div class="case-studies-item-shadow"></div>
          <div class="case-studies-item-text">
            <!--<p><?php echo ($data["post_title"]); ?></p>-->
          </div>
        </a>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <a href="javascript:;" id="case-studies-jump-arrow">
      <img src="/git/guan-tang/Public/images/icon_left_arrow.png">
    </a>
  </div>
</div>
<!-- Sub header -->
<div id="sub-header-container">
  <ul id="sub-header" class="menu">
    <li id="sub-header-casestudies"><a href="javascript:;" class="current">CASE STUDIES</a></li>
    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
        <a href="/git/guan-tang/index.php/gallery/<?php echo ($data["term_id"]); ?>"><?php echo ($data["description"]); ?></a>
       <!-- <a href="<?php echo U('Gallery/gallery', array(), '');?>/id/<?php echo ($data["term_id"]); ?>"><?php echo ($data["description"]); ?></a>-->
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <ul id="sub-header-mobile" class="menu">
    <li id="sub-header-mobile-current"><a href="javascript:;">CASE STUDIES</a><span></span></li>
    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><a href="/git/guan-tang/index.php/gallery/<?php echo ($data["term_id"]); ?>"><?php echo ($data["description"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
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
  $(function() {
    $('ul.menu li a').each(function(){
      if($($(this))[0].href==String(window.location))
        $(this).parent().addClass('active');
    });

    if($(window).width() < 768) {

    }
  })
</script>
</html>