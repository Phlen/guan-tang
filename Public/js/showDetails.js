

  $(document).ready(function() {
    /*$(".case-study-wrapper").onepage_scroll({
      sectionContainer: "section",
      responsiveFallback: false,
      *//*responsiveFallback: true,*//*
      loop: true
    });*/

    if($(".case-study-page").container='') {
      alert('ie');
      $(this).css({display:"none"})
    }
    servicesImageLoaded = false;
    var height = $(window).height();
    var width = $(window).width();
    var body;
    if(navigator.userAgent.indexOf("Firefox")>0 || navigator.userAgent.indexOf("MSIE")>0){
      body = document.documentElement;
    }else{
      body = document.body;
    };
    window.onload=function() {
      /*resizeCaseStudyCover();
       if ($('#case-study-wrapper').length >= 1) {
       resizeCaseStudyImage();
       positionServicesItems();
       }*/
      loadPage(1);
      //给页面绑定滑轮滚动事件
      if(navigator.userAgent.indexOf("Firefox")>0){
        if(document.addEventListener){
          document.addEventListener('DOMMouseScroll',scrollFunc,false);
        }
      }else{
        document.onmousewheel = scrollFunc;
      }

      resizeCaseStudyCover();
      /*resizeCaseStudyHImages();
       resizeCaseStudyVImages();*/
    }

    $(window).resize(function() {
      resizeCaseStudyCover();
      resizeCaseStudyHImages();
      resizeCaseStudyImages();
    });
    /* 加载页面*/
    function loadPage(i) {
      hidePage();
      $('.pagination').removeClass('active');
      $(".page-" + i).show().addClass('current_page');
      if ($('#case-study-wrapper').length >= 1) {
        resizeCaseStudyImage();
        positionServicesItems(i);
        resizeCaseStudyHImages();
        resizeCaseStudyImages();
      }
      $('.pagination-'+i).addClass('active');
    }

    /*隐藏页面*/
    function hidePage() {
      $(".page").hide().removeClass('current_page').animate({

      },1000,'linear')
    }

    /*设置一个中断，防止鼠标下滑幅度过大，导致页面翻转执行几次*/
    var isFinish = true;
    var scrollFunc = function(e) {
      var direct = 0;
      var i = $(".current_page").data('id');
      /*alert(i);*/
      if(isFinish){
        e = e || window.event;
        if((e.wheelDelta<0|| e.detail>0)&&i<5){ //向下
          var k = i+1;
          loadPage(k);
          scroll(height);
          /*alert('moveDown');*/
        }else if((e.wheelDelta>0 || e.detail<0)&&i>1){ //向上
          var k = i-1;
          loadPage(k);
          scroll(0);
          /*alert('moveUp');*/
        }
        /*ScrollText(direct);*/
      }
    }

    var scroll = function(height){
      isFinish = false;
      $(body).animate({scrollTop:height},1000,"easeInOutExpo",function(){
        isFinish = true;
      });
      /*$('.page').slideUp(1000,'linear',function(){
       isFinish = true;
       })*/
    };


    $(document).keydown(function(e) {
      var tag = e.target.tagName.toLowerCase();

      if (!$("body").hasClass("disabled-onepage-scroll")) {
        var i = $('.current_page').data('id');
        switch(e.which) {
          case 38:
            if (tag != 'input' && tag != 'textarea' && i>1){
              var k = i-1;
              loadPage(k);
            }
            break;
          case 40:
            if (tag != 'input' && tag != 'textarea' && i<5){
              var k = i+1;
              loadPage(k);
            }
            break;
          case 32: //spacebar
            if (tag != 'input' && tag != 'textarea' && i<5){
              var k = i+1;
              loadPage(k);
            }
            break;
          case 33: //pageg up
            if (tag != 'input' && tag != 'textarea' && i>1){
              var k = i-1;
              loadPage(k);
            }
            break;
          case 34: //page dwn
            if (tag != 'input' && tag != 'textarea' && i<5){
              var k = i+1;
              loadPage(k);
            }
            break;
          case 36: //home
            loadPage(1)
            break;
          /*case 35: //end
           el.moveTo(total);
           break;*/
          default: return;
        }
      }
    })

    /*手机滑动：*/

    /*var scrollstart = $(document).scrollTop();
    var scrollstop_top
    $(document).on("pageinit",".page",function(){
      $(document).on("scrollstart",function(){
        alert(scrollstart);
        scrollstop_top = $(document).scrollTop();
        alert(scrollstop_top);
        if(scrollstop_top > scrollstart){
          alert('move down')
        }else {
          alert('move up')
        }
      });
    });*/
    $("a.pagination").click(function(){
      var i = $(this).data('id');
      loadPage(i);
    })
    $("#case-study-cover-title").click(function(){
     /* var i = $(this).data('id');
      var k = i+1;*/
      loadPage(2);
    })
  $(window).resize(function() {
    resizeCaseStudyVImages();
    resizeCaseStudyHImages();
    resizeCaseStudyCover();
  });
  function resizeCaseStudyCover() {
    var i = 2000;
    var j = 1250;
    if ($(window).height() > $('img#case-study-cover-bg').height() || $(window).width() <
        $('img#case-study-cover-bg').width()) {
      $('img#case-study-cover-bg').height($(window).height());
      var k = $('img#case-study-cover-bg').height() / j * 100;
      k = i / 100 * k;
      $('img#case-study-cover-bg').width(k);
    }
    if ($(window).width() > $('img#case-study-cover-bg').width() || $(window).height() <
        $('img#case-study-cover-bg').height()) {
      $('img#case-study-cover-bg').width($(window).width());
      k = $('img#case-study-cover-bg').width() / i * 100;
      k = j / 100 * k;
      $('img#case-study-cover-bg').height(k);
    }
    var l = $(window).width() - $('img#case-study-cover-bg').width();
    l = Math.round(l / 2);
    k = $(window).height() - $('img#case-study-cover-bg').height();
    k = Math.round(k / 2);
    $('img#case-study-cover-bg').css({top: k + 'px', left: l + 'px'});
    $('img#case-study-cover-bg').show().addClass('animate-fade-in-1');
    $('#case-study-cover-title').css({
      marginBottom:0
    })
  }


  /*调节图片显示大小*/
  function resizeCaseStudyImage() {
    var i = 1200;
    var j = 1500;
    if ($('.case-study-v-image-container').height() > $('.case-study-v-image-container img').height() || $('.case-study-v-image-container').width() < $('#services-image-container img').width()) {
      $('.case-study-v-image-container img').height($('.case-study-v-image-container').height());
      var k = $('.case-study-v-image-container img').height() / j * 100;
      k = i / 100 * k;
      $('.case-study-v-image-container img').width(k);
    }
    if ($('.case-study-v-image-container').width() > $('.case-study-v-image-container img').width() || $('.case-study-v-image-container').height() < $('.case-study-v-image-container img').height()) {
      $('.case-study-v-image-container img').width($('.case-study-v-image-container').width());
      k = $('.case-study-v-image-container img').width() / i * 100;
      k = j / 100 * k;
      $('.case-study-v-image-container img').height(k);
    }
    var l = $('.case-study-v-image-container').width() - $('.case-study-v-image-container img').width();
    l = Math.round(l / 2);
    k = $('.case-study-v-image-container').height() - $('.case-study-v-image-container img').height();
    k = Math.round(k / 2);
    $('.case-study-v-image-container img').css({top: k + 'px', left: l + 'px'});
  }

  /*移动端调整*/
  function positionServicesItems(i) {
    if ($(window).width() < 768) {
      $('.case-study-v-image-container').css({ width: '50%'});
      $('.case-study-v-text-container').css({left: '50%', width: '50%'});
      loadCaseStudyImage(i);
    } else {
      if (servicesImageLoaded == false) {
        loadCaseStudyImage(i);
      }
      $('.case-study-v-text-container, .case-study-v-image-container').css({left: '', width: ''});
    }
  }


  /*加载图片*/
    function loadCaseStudyImage(i) {
      if ($('#loader-flashing').is(':visible') == false) {
        toggleLoader();
      }
      $('.case-study-v-image-container' + 'img').imagesLoaded(function () {
        $(this).unbind('load');
        if ($('#loader-flashing').is(':visible') == true) {
          toggleLoader();
        }
        $('.page'+i).show();
        /*resizeCaseStudyHImages();
         resizeCaseStudyImage();*/
      });
      servicesImageLoaded = true;
    }


   function resizeCaseStudyVImages() {
   var i = 1200;
   var j = 1500;
   if ($('.case-study-v-image-container').height() > $('img.case-study-page-image-v').height() || $('.case-study-v-image-container').width() < $('img.case-study-page-image-v').width()) {
   $('img.case-study-page-image-v').height($('.case-study-v-image-container').height());
   var k = $('img.case-study-page-image-v').height() / j * 100;
   k = i / 100 * k;
   $('img.case-study-page-image-v').width(k);
   }
   if ($('.case-study-v-image-container').width() > $('img.case-study-page-image-v').width() || $('.case-study-v-image-container').height() < $('img.case-study-page-image-v').height()) {
   $('img.case-study-page-image-v').width($('.case-study-v-image-container').width());
   k = $('img.case-study-page-image-v').width() / i * 100;
   k = j / 100 * k;
   $('img.case-study-page-image-v').height(k);
   }
   var l = $('.case-study-v-image-container').width() - $('img.case-study-page-image-v').width();
   l = Math.round(l / 2);
   k = $('.case-study-v-image-container').height() - $('img.case-study-page-image-v').height();
   k = Math.round(k / 2);
   $('img.case-study-page-image-v').css({top: k + 'px', left: l + 'px'});
   }

  function resizeCaseStudyHImages() {
    var i = 2000;
    var j = 1250;
    if ($('.case-study-h-image-container').height() > $('img.case-study-h-page-image-h').height() || $('.case-study-h-image-container').width() < $('img.case-study-h-page-image-h').width()) {
      $('img.case-study-h-page-image-h').height($('.case-study-h-image-container').height());
      var k = $('img.case-study-h-page-image-h').height() / j * 100;
      k = i / 100 * k;
      $('img.case-study-h-page-image-h').width(k);
    }
    if ($('.case-study-h-image-container').width() > $('img.case-study-h-page-image-h').width() || $('.case-study-h-image-container').height() < $('img.case-study-h-page-image-h').height()) {
      $('img.case-study-h-page-image-h').width($('.case-study-h-image-container').width());
      k = $('img.case-study-h-page-image-h').width() / i * 100;
      k = j / 100 * k;
      $('img.case-study-h-page-image-h').height(k);
    }
    var l = $('.case-study-h-image-container').width() - $('img.case-study-h-page-image-h').width();
    l = Math.round(l / 2);
    k = $('.case-study-h-image-container').height() - $('img.case-study-h-page-image-h').height();
    k = Math.round(k / 2);
    $('img.case-study-h-page-image-h').css({top: k + 'px', left: l + 'px'});
  }
    function resizeCaseStudyImages() {
      var i = 2000;
      var j = 1250;
      if ($('.case-study-image-container').height() > $('img.case-study-page-image-h').height() || $('.case-study-image-container').width() < $('img.case-study-page-image-h').width()) {
        $('img.case-study-page-image-h').height($('.case-study-image-container').height());
        var k = $('img.case-study-page-image-h').height() / j * 100;
        k = i / 100 * k;
        $('img.case-study-page-image-h').width(k);
      }
      if ($('.case-study-image-container').width() > $('img.case-study-page-image-h').width() || $('.case-study-image-container').height() < $('img.case-study-page-image-h').height()) {
        $('img.case-study-page-image-h').width($('.case-study-image-container').width());
        k = $('img.case-study-page-image-h').width() / i * 100;
        k = j / 100 * k;
        $('img.case-study-page-image-h').height(k);
      }
      var l = $('.case-study-image-container').width() - $('img.case-study-page-image-h').width();
      l = Math.round(l / 2);
      k = $('.case-study-image-container').height() - $('img.case-study-page-image-h').height();
      k = Math.round(k / 2);
      $('img.case-study-page-image-h').css({top: k + 'px', left: l + 'px'});
    }
})


