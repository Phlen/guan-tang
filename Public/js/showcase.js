
$(document).ready(function (){

  $("#case-studies-jump-arrow").click(function(){
    var i = $(window).width();
    if (i >= 1920) {
      var j = 6;
    } else if (i >= 1600) {
      j = 5;
    } else if (i >= 1280) {
      j = 4;
    } else if (i >= 960) {
      j = 3;
    } else if (i >= 640) {
      j = 2;
    } else {
      j = 1;
    }
    var k = $('#case-studies-container').scrollLeft();
    k = Math.floor(k + $('.case-studies-item').width());
    $('#case-studies-container').animate({scrollLeft: k}, 500);
  });

  /*加载、刷新页面是触发*/
  /*入口函数*/
  window.onload = function(){
    calcReplacementShowcase();
    toggleShowcaseResponsiveItems();   //移动端显示
    loadImages();
    /*if ($('#archive-overlay').is(':visible') == true) {
     resizeArchiveImage();
     }*/
    if ($('#case-studies-container').length >= 1) {
      resizeCaseStudies();
    }
    if ($('#case-study-container').length >= 1) {

      resizeCaseStudyCover();
      if (caseStudyPage) {
        resizeCaseStudyVImages();
        resizeCaseStudyHImages();
        var i = $(window).width();
        var j = $(window).height();
        $('#case-study-page-' + caseStudyPage).removeClass('animate-clip-1')
            .css({clip: 'rect(0, ' + i + 'px, ' + j + 'px, 0)'});
      }
      if ($(window).width() < 768 && $('#case-study-wrapper').is(':visible') == true) {
        loadMobileImages();
        $('#case-study-wrapper-mobile').show();
        $('#case-study-wrapper').hide();
      } else if ($(window).width() >= 768 && $('#case-study-wrapper-mobile').is(':visible') == true) {
        $('#case-study-wrapper-mobile').hide();
        $('#case-study-wrapper').show();
      }
    }
    if ($('#archive-container-1').length >= 1) {
      resizeArchiveThumbs();
    }
  }

  /*页面计算大小发生改变的时候触发*/
  $(window).resize(function () {
    resizeCaseStudies();
  });
})
  /* Calc replacement */


  function calcReplacementShowcase() {
    if (!Modernizr.csscalc) {
      $('#showcase-loader, .case-study-v-image-container, .case-study-v-text-container, #archive-container-1').css({height: '100%'}).css({height: '-=90px'});
      $('.case-study-h-image-container, .case-study-h-text-container').css({height: '50%'}).css({height: '-=45px'});
    }
  }

  /*Template*/


  function toggleShowcaseResponsiveItems() {
    if ($(window).width() < 768) {
      $('ul#sub-header-mobile').show();
      $('ul#sub-header').hide();
      $('#case-study-dot-nav').hide();
    } else {
      $('ul#sub-header-mobile').hide();
      $('ul#sub-header').show();
      /*if (caseStudyPage) {
        $('#case-study-dot-nav').show();
      }*/
    }
    if ($('#sub-header-container').css('height') != '40px') {
      $('#sub-header-container').css({height: ''});
    }
  }
  $('#sub-header-mobile-current a').click(function(){
    if ($('#sub-header-container').css('height') == '165px') {
      $('#sub-header-container').css({height: ''});
      $('ul#sub-header-mobile li#sub-header-mobile-current span').css({backgroundPosition: ''});
    } else {
      $('#sub-header-container').css({height: '165px'});
      $('ul#sub-header-mobile li#sub-header-mobile-current span').css({backgroundPosition: 'left top'});
    }
  })

  function resizeCaseStudies() {
    $("#case-studies-jump-arrow").css({
      marginRight:0
    });
    $('.case-studies-item').css({
      left:'100%'
    });
    var i = $(window).width();
    if (i >= 1920) {
      var j = 16.6;
    } else if (i >= 1600) {
      j = 20;
    } else if (i >= 1280) {
      j = 25;
    } else if (i >= 960) {
      j = 33.3;
    } else if (i >= 640) {
      j = 50;
    } else {
      j = 100;
    }
    $('.case-studies-item').css({width: j + '%'});
    $('.case-studies-item-text p').css({width: ($('.case-studies-item').width() - 30) + 'px', height: (($('.case-studies-item').height() / 4) - 30) + 'px'});
    $('.case-studies-item').each(function(ii, obj) {  //ii从0开始，表示case-studies-item的数量
      var k = ii * j;

      $(this).css({left: k + '%'});
      if ($(this).is(':visible') == true) {

        var jj = Math.floor(0 - ($('img', this).width() / 2));

        $('img', this).css({marginLeft: jj + 'px'})
      }
    });
  }

  /*load images*/

  function loadImages( ) {
    $('.case-studies-item').each(function(i,obj) {
      setTimeout(function() {
        $('#case-studies-item-' + i).show().addClass('animate-left-1');
        resizeCaseStudies();
      },500*(i))
/*      setTimeout(function() {
        $('#case-studies-item-' + i).show().animate({
          left:$(this).offsetLeft
        },1000);
        resizeCaseStudies();
      },500*(i))*/
    })

  }
