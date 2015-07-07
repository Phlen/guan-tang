$(document).ready(function () {
// Global variables
  homeImage = 1;
  slideShow = true;
  fade = false;

  $('#slideshow-click-item').click(function () {
    var j = window['homeImage' + homeImage + 'Link'];
    var k = window['homeImage' + homeImage + 'LinkTarget'];
    if (k == '_blank' && j != '') {
      window.open(j);
    } else if (j != '') {
      window.location = j;
    }
  });
  $('#slideshow-controls a').hover(function () {
    var i = $(this).attr('id');
    i = i.replace('slideshow-control-', '');
    if (slideShow == true || slideShow == false && homeImage != i) {
      $(this).css({backgroundColor: '#000'});
    }
  }, function () {
    var i = $(this).attr('id');
    i = i.replace('slideshow-control-', '');
    if (slideShow == true || slideShow == false && homeImage != i) {
      $(this).css({backgroundColor: ''});
    }
  });

//入口函数：
  resizeSplashImages();
  $(window).resize(function () {
    resizeSplashImages();
    calcReplacementHome();
    if ($('#splash').css('opacity') != 0) {
     /* resizeSplash();*/
    }
    if ($('#slideshow').is(':visible') == true) {
      resizeHomeImages();
    }
  });
  calcReplacementHome();
  $('#splash img').imagesLoaded(function () {
    $(this).unbind('load');
    /*resizeSplash();*/
    $('#splash').css({opacity: 1});
    if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="8.0"){
      /*alert('ie8')*/
      ie_loadSlideshowImage(1)
    }else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="9.0")
    {/*alert('ie9')*/
      ie_loadSlideshowImage(1)
    }else{
      loadSlideshowImage(1)
    }
    /*loadSlideshowImage(1);*/
    setTimeout(function () {
      loadSlideshow();
    }, 3000);
  });
// Mobile set-up
  if (touchScreen) {

  }
});

/* Calc replacement */

function calcReplacementHome() {
  if (!Modernizr.csscalc) {
    $('#splash img').css({width: '100%'}).css({width: '-=30px'});
    $('#slideshow-controls a').css({width: '20%'}).css({width: '-=2px'});
  }
}

/* Splash */

/*function resizeSplash() {
  var i = Math.floor(($(window).width() - $('#splash img').width()) / 2);
  var j = Math.floor(($(window).height() - $('#splash img').height()) / 2);
  $('#splash img').css({left: i + 'px', top: j + 'px'});
}*/

function loadSlideshow() {
  if ($('#loader-flashing').is(':visible') == false) {
    toggleLoader();
  }
  $('#slideshow-item-1 img').imagesLoaded(function () {
    $(this).unbind('load');
    setTimeout(function () {
      resizeHomeImages();
      $('header').show();
      $('#slideshow, #slideshow-item-1').css({left: '0'})
          .show();
      calcReplacementHome();
      $('#splash').css({opacity: 0});
      if ($('#loader-flashing').is(':visible') == true) {
        toggleLoader();
      }
    }, 1000);
    setTimeout(function () {
      /*loadSlideshowImage(2); //获取下一幅图*/
      if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="8.0"){
        ie_loadSlideshowImage(2)
      }else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="9.0")
      {
        ie_loadSlideshowImage(2)
      }
      else{
        loadSlideshowImage(2)
      }

      setSlideIndicator(1);
      $('#splash').hide();
    }, 3000);
  });
}

/* Slideshow */
function loadSlideshowImage(i) {
  /*var j = window['homeImage' + i + 'File'];
   $('#slideshow-item-' + i + ' img').attr({src: 'images/' + j});*/
  if ($('#slideshow').is(':visible') == true) {
    $('#slideshow-item-' + i + ' img').imagesLoaded(function () {
      $(this).unbind('load');
      resizeHomeImages();
      $('#slideshow-item-' + i).show();
      if (window['homeImage' + i + 'Loaded'] == false && i != 6) {
        window['homeImage' + i + 'Loaded'] = true;
      }
      setTimeout(function () {
        if (slideShow) {
          if (fade == true) {
            $('#slideshow-item-' + i).show()
                .addClass('animate-fade-in-1')
                .css({left: '0'});
          } else {
            $('#slideshow-item-' + i).show()
                .addClass('animate-left-1')
                .css({left: '0'});
          }
          if (i == 6) {
            $('#slideshow-controls a span').removeClass('animate-width-5')
                .css({width: '0'});
            setSlideIndicator(1);
          } else {
            setSlideIndicator(i);
          }
          if (homeImage == 1) {
            var k = 6;
          } else {
            k = homeImage - 1;
          }
          setTimeout(function () {
            hideSlide(k);
            if (k == 5) {
              $('#slideshow-item-1').show()
                  .css({left: '0'});
              hideSlide(6);
            }
          }, 1000);
          if (slideShow) {
            if (homeImage == 6) {
              var l = 2;
            } else {
              l = homeImage + 1;
            }
            loadSlideshowImage(l);
          }
        }
      }, 5000);
    });
  }
  homeImage = i;
}
function ie_loadSlideshowImage(i) {
  /*var j = window['homeImage' + i + 'File'];
   $('#slideshow-item-' + i + ' img').attr({src: 'images/' + j});*/
  if ($('#slideshow').is(':visible') == true) {
    $('#slideshow-item-' + i + ' img').imagesLoaded(function () {
      $(this).unbind('load');
      resizeHomeImages();
      $('#slideshow-item-' + i).show();
      if (window['homeImage' + i + 'Loaded'] == false && i != 6) {
        window['homeImage' + i + 'Loaded'] = true;
      }
      setTimeout(function () {
        if (slideShow) {
          if (fade == true) {
            $('#slideshow-item-' + i).show().fadeIn(1000).css({left:0})
            /*.addClass('animate-fade-in-1')
             .css({left: '0'});*/
          } else {
            $('#slideshow-item-' + i).show().animate({
              left:'0'
            },1000);
            /*addClass('animate-left-1')
             .css({left: '0',transition:'left 1s'});*/
          }
          if (i == 6) {
            $('#slideshow-controls a span')
                .css({width: '0'});
            ie_setSlideIndicator(1);
          } else {
            ie_setSlideIndicator(i);
          }
          if (homeImage == 1) {
            var k = 6;
          } else {
            k = homeImage - 1;
          }
          setTimeout(function () {
            ie_hideSlide(k);
            if (k == 5) {
              $('#slideshow-item-1').show()
                  .css({left: '0'});
              ie_hideSlide(6);
            }
          }, 1000);
          if (slideShow) {
            if (homeImage == 6) {
              var l = 2;
            } else {
              l = homeImage + 1;
            }
            ie_loadSlideshowImage(l);
          }
        }
      }, 5000);
    });
  }
  homeImage = i;
}
function hideSlide(i) {
  if (fade == true) {
    $('#slideshow-item-' + i).removeClass('animate-left-1')
        .css({left: '100%'})
        .hide();
  } else {
    $('#slideshow-item-' + i).removeClass('animate-left-1')
        .css({left: '100%'})
        .hide();
    /*setTimeout(function(){
      $('#slideshow-item-' + i).removeClass('animate-left-1')
          .css({left: '100%'})
          .hide();
    },1000)*/
  }
}

/*for ie8.9*/
function ie_hideSlide(i) {
  if (fade == true) {
    $('#slideshow-item-' + i).removeClass('animate-left-1')
        .css({left: '100%'})
        .hide();
  } else {
    $('#slideshow-item-' + i).removeClass('animate-left-1')
        .css({left: '100%'})
        .hide();
    /*setTimeout(function(){
     $('#slideshow-item-' + i).removeClass('animate-left-1')
     .css({left: '100%'})
     .hide();
     },1000)*/
  }
}

function setSlideIndicator(i) {
    $('a#slideshow-control-' + i + ' span').addClass('animate-width-5')
        .css({width: '100%'});
}

/*for ie8,9*/
function ie_setSlideIndicator(i) {
  /*$('a#slideshow-control-' + i + ' span').addClass('animate-width-5')*/
  $('a#slideshow-control-' + i + ' span').animate({
    width:'100%'
  },5000)
  /*.css({width: '100%'});*/
}

function resizeSplashImages() {
  var i = 1440;
  var j = 900;
  if ($(window).height() > $('#splash img').height() || $(window).width() < $('#splash img').width()) {
    $('#splash img').height($(window).height());
    var k = $('#splash img').height() / j * 100;
    k = i / 100 * k;
    $('#splash img').width(k);
  }
  if ($(window).width() > $('#splash img').width() || $(window).height() < $('#splash img').height()) {
    $('#splash img').width($(window).width());
    k = $('#splash img').width() / i * 100;
    k = j / 100 * k;
    $('#splash img').height(k);
  }
  var l = $(window).width() - $('#splash img').width();
  l = Math.round(l);
  k = $(window).height() - $('#splash img').height();
  k = Math.round(k / 2);
  $('#splash img').css({top: -k + 'px', left: l + 'px'});
}
function resizeHomeImages() {
  var i = 1440;
  var j = 900;
  if ($(window).height() > $('.slideshow-item img, #slideshow-click-item img').height() || $(window).width() < $('.slideshow-item img, #slideshow-click-item img').width()) {
    $('.slideshow-item img, #slideshow-click-item img').height($(window).height());
    var k = $('.slideshow-item img, #slideshow-click-item img').height() / j * 100;
    k = i / 100 * k;
    $('.slideshow-item img, #slideshow-click-item img').width(k);
  }
  if ($(window).width() > $('.slideshow-item img, #slideshow-click-item img').width() || $(window).height() < $('.slideshow-item img, #slideshow-click-item img').height()) {
    $('.slideshow-item img, #slideshow-click-item img').width($(window).width());
    k = $('.slideshow-item img, #slideshow-click-item img').width() / i * 100;
    k = j / 100 * k;
    $('.slideshow-item img, #slideshow-click-item img').height(k);
  }
  var l = $(window).width() - $('.slideshow-item img, #slideshow-click-item img').width();
  l = Math.round(l / 2);
  k = $(window).height() - $('.slideshow-item img, #slideshow-click-item img').height();
  k = Math.round(k / 2);
  $('.slideshow-item img, #slideshow-click-item img').css({top: k + 'px', left: l + 'px'});
}


function slideShowControlClick(i) {
  $('.slideshow-item').hide();
  $('.slideshow-control').css({backgroundColor: '#000',opacity:0.5});
  $('.slideshow-control span').css({background:'none'});
  $('#slideshow-click-item').removeClass('animate-fade-in-1')
      .hide();
  $("#slideshow-item-"+ i).show().fadeIn(1000).css({left:0});
  console.log($('#slideshow-control-' + i + ' span'));
  $('#slideshow-control-'+i +' span').css({background: '#FFFFFF',width:'100%',opacity:1});
  slideShow = false;

}
