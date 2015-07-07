<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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


  <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具"/>
  <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图"/>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" href="/work/guan-tang/Public/css/font-awesome.css">
  <link rel="stylesheet" href="/work/guan-tang/Public/css/loadMap.css">
  <link rel="stylesheet" href="/work/guan-tang/Public/css/font/fonts.css">
  <title>Map</title>
  <!--引用百度地图API-->
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=22aC5HLAP07yU1aA2OexQWG5"></script>
</head>

<body>
<!--百度地图容器-->
<div id="main">
  <div style="width:50%;height:100%;border:#ccc solid 1px;font-size:12px" id="map">

  </div>

  <!--地图缩放：-->
  <a href="javascript:;" class="zoom" id="zoom"><span class="full"></span></a>
  <div id="map-text-container">
    <div id="map-text-wrapper">
      <span id="map-text-ny">
      <h3>深圳</h3>
        <p>
          深圳市龙岗区布澜路31号李朗国际珠宝文化产业园A4栋1305室<br/><br/><br/>T&mdash;0755-28245576<br/><br/><br/>E&mdash;<a
            href="mailto:1158391188@guan-tang.com" class="contact-email-ny">1158391188@guan-tang.com</a><br/><br/><br/>QQ&mdash;1158391188
        </p>
      </span>
    </div>
  </div>
</div>
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
</body>
<script type="text/javascript">
  //创建和初始化地图函数：
  function initMap() {
    createMap();//创建地图
    setMapEvent();//设置地图事件
    addMapControl();//向地图添加控件
    addMapOverlay();//向地图添加覆盖物
  }
  function createMap() {
    map = new BMap.Map("map");
    map.centerAndZoom(new BMap.Point(114.133327, 22.651349), 18);
  }
  function setMapEvent() {
    map.enableScrollWheelZoom();
    map.enableKeyboard();
    map.enableDragging();
    map.enableDoubleClickZoom()
  }
  function addClickHandler(target, window) {
    target.addEventListener("click", function () {
      target.openInfoWindow(window);
    });
  }
  function addMapOverlay() {
    var markers = [
      {content: "我的备注", title: "我的标记", imageOffset: {width: 0, height: 3}, position: {lat: 22.650415, lng: 114.133075}}
    ];
    for (var index = 0; index < markers.length; index++) {
      var point = new BMap.Point(markers[index].position.lng, markers[index].position.lat);
      var marker = new BMap.Marker(point, {icon: new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png", new BMap.Size(20, 25), {
        imageOffset: new BMap.Size(markers[index].imageOffset.width, markers[index].imageOffset.height)
      })});
      var label = new BMap.Label(markers[index].title, {offset: new BMap.Size(25, 5)});
      var opts = {
        width: 200,
        title: markers[index].title,
        enableMessage: false
      };
      var infoWindow = new BMap.InfoWindow(markers[index].content, opts);
      marker.setLabel(label);
      addClickHandler(marker, infoWindow);
      map.addOverlay(marker);
    }
    ;
  }
  //向地图添加控件
  function addMapControl() {
    var scaleControl = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
    scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
    map.addControl(scaleControl);
    var navControl = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(navControl);
    var overviewControl = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: true});
    map.addControl(overviewControl);
  }
  var map;
  initMap();

  setTimeout(function () {
    $('#main').show().addClass('animate-left-1').css({left: 0});
  }, 1000)

    var test=1;
    $("a#zoom").click(function() {
      if(test == 1) {
        $('#map-text-container').fadeOut(1000).hide();
        setTimeout(function() {
          $("#map").animate({
            width:'100%'
          },1500);
          $('#zoom').animate({
            right:'0'
          },1500)
          $("#zoom span").removeClass('full').addClass('half')
        },2000);
        test = 0

      }else {
          $("#map").animate({
            width:'50%'
          },1500)
          $('#zoom').animate({
            right:'50%'
          },1500);
          $("#zoom span").removeClass('half').addClass('full');
          setTimeout(function() {
            $('#map-text-container').fadeIn(1000).show();

          },2500)
        test = 1;
      }

 });

</script>
</html>