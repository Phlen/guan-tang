<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <title> 观堂</title>
  <link rel="shortcut icon" href="/work/guan-tang/Public/images/logo.png" />
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
  <link rel="stylesheet" href="/work/guan-tang/Public/css/font/fonts.css">
  <link rel="stylesheet" href="/work/guan-tang/Public/css/style.css">
  <script src="/work/guan-tang/Public/js/lib/jquery-latest.min.js"></script>
   <!--[if IE]>
   <script src="/work/guan-tang/Public/js/lib/html5.js"></script>
   <script src="/work/guan-tang/Public/js/lib/jquery-1.7.2.min.js"></script>
   <![endif] -->
  <script src="/work/guan-tang/Public/js/lib/jquery.mousewheel.min.js"></script>
  <script src="/work/guan-tang/Public/js/lib/jquery.touchSwipe.min.js"></script>
  <!--<script src="js/lib/jquery.easing.1.3.js"></script>-->
  <script src="/work/guan-tang/Public/js/lib/gistfile1.js"></script>
  <script src="/work/guan-tang/Public/js/lib/modernizr.custom.33755.js"></script>
  <script src="/work/guan-tang/Public/js/common.js"></script>


  <link rel="stylesheet" href="/work/guan-tang/Public/css/gallery.css">
  <link rel="stylesheet" href="/work/guan-tang/Public/js/fancybox/jquery.fancybox.css">
  <script src="/work/guan-tang/Public/js/lib/jquery.onepage-scroll.js"></script>
  <script src="/work/guan-tang/Public/js/lib/jquery.easing.1.3.js"></script>
  <script src="/work/guan-tang/Public/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
  <script src="/work/guan-tang/Public/js/gallery.js"></script>
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
  <script>

  </script>
  <div id="archive-container-1">
    <div id="archive-container-2">
      <div id="archive-container-bg"></div>
      <div id="archive-wrapper">
        <?php if(is_array($title)): foreach($title as $key=>$vo): ?><div id="archive-projects" class="archive-projects">
            <input type="hidden" name="p_id" data-id="<?php echo ($vo["parent"]); ?>" id="getPid">
            <div class="project-title project-title-3">
            <span>
              <h3><?php echo ($vo["description"]); ?></h3>
            </span>
            </div>
            <?php if(is_array($img)): foreach($img as $k=>$data): if(($data["post_excerpt"]) == $vo["description"]): $a = mt_rand(1,6)?>
                <a href="<?php echo ($data["guid"]); ?>" class="archive-thumb archive-thumb-<?php echo ($a); ?>" rel="fancybox">
                  <img src="<?php echo ($data["guid"]); ?>">
                </a><?php endif; endforeach; endif; ?>
          </div><?php endforeach; endif; ?>

      </div>
    </div>
  </div>
  <div id="archive-nav">
    <div id="archive-nav-wrapper">
      <a href="javascript:;" id="archive-filter-link">
        FILTER BY DATE
        <span></span>
      </a>

      <div id="archive-nav-options">
        <div id="archive-filter-divider"></div>
        </br>
          <?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if(($k == 1)): ?><a href="<?php echo U('Gallery/gallery', array(), '');?>/id/<?php echo ($vo["parent"]); ?>" class="date" value="0">View All</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <span class="archive-link-divider"></span>

          <?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if(($k == 1)): if(is_array($date)): $i = 0; $__LIST__ = $date;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Gallery/getGalleryByDate', array(), '');?>/id/<?php echo ($vo["parent"]); ?>/date/<?php echo ($data["description"]); ?>" class="date" data-role="<?php echo ($data["description"]); ?>"><?php echo ($data["description"]); ?></a>
                <span class="archive-link-divider"></span><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>

      </div>
    </div>
  </div>
</div>
<!-- Sub header -->
<div id="sub-header-container">
  <ul id="sub-header" class="menu">
    <li id="sub-header-casestudies"><a href="<?php echo U('showCase/showcase');?>">CASE STUDIES</a></li>
    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Gallery/gallery', array(), '');?>/id/<?php echo ($data["term_id"]); ?>"><?php echo ($data["description"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <ul id="sub-header-mobile">
    <li id="sub-header-mobile-current"><a href="javascript:;">CASE STUDIES</a><span></span></li>
    <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Gallery/gallery', array(), '');?>/id/<?php echo ($data["term_id"]); ?>"><?php echo ($data["description"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
<!-- END Sub header -->
<div id="header-bg"></div>
<!-- Nav -->
<nav>

  <img src="/work/guan-tang/Public/images/showcase.jpg" alt="" id="nav-image-showcase"/>

  <img src="/work/guan-tang/Public/images/company.jpg" alt="" id="nav-image-about"/>

  <div id="nav-bg"></div>
  <ul id="main-nav">
    <div id="main-nav-wrapper">
      <li id="main-nav-showcase"><a href="<?php echo U('showCase/showcase');?>" id="showcase">SHOWCASE<span></span></a></li>
      <span class="main-nav-divider"><span></span></span>
      <li id="main-nav-about"><a href="<?php echo U('About/about');?>" id="about">ABOUT<span></span></a></li>

    </div>
  </ul>
  <ul id="main-nav-mobile">
    <div id="main-nav-wrapper-mobile">
      <li id="main-nav-mobile-showcase"><a href="<?php echo U('showCase/showcase');?>">SHOWCASE</a></li>
      <span class="main-nav-mobile-divider"><span></span></span>
      <li id="main-nav-mobile-about"><a href="<?php echo U('About/about');?>">ABOUT</a></li>

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
            href="<?php echo U('LoadMap/index');?>" class="map-link"><img src="/work/guan-tang/Public/images/icon_map.png" alt=""/>MORE</a></p>
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
            href="<?php echo U('LoadMap/index');?>" class="map-link"><img src="/work/guan-tang/Public/images/icon_map.png" alt=""/>MORE</a></p>
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
      $('.menu li a').each(function(){
        if($($(this))[0].href==String(window.location))
          $(this).css({color:'#33f'});
      });

    })
  </script>
</html>