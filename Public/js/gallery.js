/**
 * Created by Administrator on 15-5-11.
 */

$(function() {

  archiveFilter = 'all';
  /*加载、刷新页面是触发*/
  /*入口函数*/

  $('.archive-thumb').fancybox({
    openEffect	: 'none',
    closeEffect	: 'none'
  });
  window.onload = function(){
    calcReplacementShowcase();
    toggleShowcaseResponsiveItems();
    resizeArchiveThumbs();
    checkThumb();

  }

  /*页面计算大小发生改变的时候触发*/
  $(window).resize(function () {
   /* resizeCaseStudies();*/
    resizeArchiveThumbs();
    toggleShowcaseResponsiveItems();
    checkThumb();
  });

  /* Calc replacement */


  function calcReplacementShowcase() {
    if (!Modernizr.csscalc) {
      $('#showcase-loader').css({height: '100%'}).css({height: '-=90px'});
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

  function resizeArchiveThumbs() {
    $('#archive-container-2').css({width: '100000px'});
    var i = $('#archive-wrapper').height();
    var j = (i / 2);
    var k = (j * 3);
    var l = (j * 2);
    $('a.archive-thumb-1, a.archive-thumb-1 span').css({width: k + 'px', height: i + 'px'});
    $('a.archive-thumb-2').css({width: l + 'px', height: j + 'px', marginBottom: j + 'px'});
    $('a.archive-thumb-2 span').css({width: l + 'px', height: j + 'px'});
    $('a.archive-thumb-3').css({width: l + 'px', height: j + 'px', marginTop: j + 'px'});
    $('a.archive-thumb-3 span').css({width: l + 'px', height: j + 'px'});
    $('a.archive-thumb-4').css({width: j + 'px', height: j + 'px', marginBottom: j + 'px'});
    $('a.archive-thumb-4 span').css({width: j + 'px', height: j + 'px'});
    $('a.archive-thumb-5').css({width: j + 'px', height: j + 'px', marginTop: j + 'px'});
    $('a.archive-thumb-5 span').css({width: j + 'px', height: j + 'px'});
    $('a.archive-thumb-6, a.archive-thumb-6 span').css({width: l + 'px', height: l + 'px'});
    $('.project-title-1').css({width: l + 'px', height: j + 'px', marginBottom: j + 'px', marginLeft: Math.floor(0 - l) + 'px'});
    $('.project-title-2').css({width: l + 'px', height: j + 'px', marginTop: j + 'px', marginLeft: Math.floor(0 - l) + 'px'});
    $('.project-title-3').css({width: l + 'px', height: l + 'px'});
    $('.project-end').css({width: '0px', height: l + 'px'})
    archiveThumbMargin = Math.floor(j);
    /*checkShowProjects();*/
    loadImage()
  }

  function loadImage() {
    $("a.archive-thumb-1 img").slideDown(1000).css({opacity:1});
    $("a.archive-thumb-2 img").delay(500).slideDown(1500).css({opacity:1});
    $("a.archive-thumb-3 img").slideDown(2000).css({opacity:1});
    $("a.archive-thumb-4 img").delay(1000).slideDown(1000).css({opacity:1});
    $("a.archive-thumb-5 img").delay(1500).slideDown(1000).css({opacity:1});
    $("a.archive-thumb-6 img").delay(1000).slideDown(1000).css({opacity:1});
    /*$("a.archive-thumb img").slideDown(1000).css({opacity:1})*/
  }

  filterNavOpen = false;
  $("#archive-filter-link").click(function() {
    if (!filterNavOpen) {
      $('#archive-wrapper').css({top: '50%'});
      $('#archive-nav').css({height: '40%'});
      $('#archive-nav-options').addClass('animate-fade-in-1')
          .show();
      $('a#archive-filter-link').css({color: '#33F'});
      $('a#archive-filter-link span').css({backgroundPosition: 'left top'});
      setTimeout(function () {
        $('#archive-filter-divider').css({width: '250px'});
      }, 500);
      filterNavOpen = true;
    } else {
      $('#archive-wrapper').css({top: ''});
      $('#archive-nav').css({height: ''});
      $('#archive-nav-options').removeClass('animate-fade-in-1')
          .hide();
      $('a#archive-filter-link').css({color: ''});
      $('a#archive-filter-link span').css({backgroundPosition: ''});
      $('#archive-filter-divider').css({width: ''});
      filterNavOpen = false;
    }
  })

  /*if($('.archive-thumb img')){

  }else{
    $(this).sibling('project-title').hide();
  }*/
  function checkThumb() {
    var list = $('project-title');  //将每一个project压到一个数组里
    /*console.log(list);*/
    for(var i=0;i<=list.length;i++) {
      var p = list[i].parentNode;     //找到每一个project的父节点
      if(p.getElementsByTagName('a').length==0){    //如果父节点没有a标签，即没有图片内容，则将其隐藏
        /*alert('hello')*/
        p.style.display = 'none'
      }
    }
  }

})