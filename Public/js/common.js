$.ajaxSetup({
  cache: false
});

// Set-up

$(document).ready(function () {
  /* browser=navigator.appName
  b_version=navigator.appVersion
   version=b_version.split(";");
  trim_Version=version[1].replace(/[ ]/g,"");*/
  if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="8.0"){

   /* $('#logo').css({
      backgroundImage:'url(../images/guantang.png)'
    });*/

    /*$("#sub-header-container").css({opacity:0.05});*/
  /*  $("a#nav-link,a#contact-link,a#contact-link:link, a#contact-link:visited").css({opacity:0.25});*/
    $("#nav-bg,span.contact-divider span,ul#main-nav a span ,span.contact-mobile-divider span ,.slideshow-item h2, #slideshow-click-item h2").css({opacity:0.5});
    $("#slideshow-controls a span").css({opacity:0.75});
    $("#contact-container,#showcase-loader #case-studies-container a#case-studies-jump-arrow,").css({opacity:0.9})
    $("a#nav-link span,a#contact-link span").css({opacity:1})
  }
  else{

  };

// Global variables
  touchScreen = false;
  deviceWidth = 0;
  deviceHeight = 0;
// Detect mobile
  if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i))) {
    deviceWidth = $(window).width();
    deviceHeight = $(window).height();
    touchScreen = true;
  }
// Mouse events
  $('ul#main-nav a').hover(function () {
    $('span', this).css({width: $(this).width() + 'px', marginLeft: Math.floor(0 - $(this).width()) + 'px'});
    var i = $(this).attr('id');
    $('img#nav-image-' + i).removeClass('animate-fade-out-1')
        .addClass('animate-fade-in-1')
        .css({opacity: 1});
  }, function () {
    $('span', this).css({width: '', marginLeft: Math.floor(0 - ($(this).width() / 2)) + 'px'});
    var i = $(this).attr('id');
    $('img#nav-image-' + i).removeClass('animate-fade-in-1')
        .addClass('animate-fade-out-1')
        .css({opacity: 0});
  });
// Set-up

    /*var header_width = $("header").width()/2;
    *//*alert(header_width);*//*
    $('a#logo').css({left:header_width-65});*/

  $(window).resize(function () {
/*    var header_width = $("header").width()/2;
    *//*alert(header_width);*//*
    $('a#logo').css({left:header_width-65});*/
    if ($('nav').is(':visible') == true) {
      loadNav();
    }
    if ($('#contact-container').is(':visible') == true) {
      loadContact();
    }
    calcReplacement();
    toggleResponsiveItems();
  });
  calcReplacement();
  toggleResponsiveItems();
// Mobile set-up
  if (touchScreen) {

  }
});

function deactivateLink(i) {
  $(i).bind('click.deactivateLink', function (event) {
    event.preventDefault();
  })
      .css({cursor: 'default'});
}

function activateLink(i) {
  $(i).unbind('.deactivateLink')
      .css({cursor: 'pointer'});
}

/* Calc replacement */

function calcReplacement() {
  if (!Modernizr.csscalc) {
    $('#contact-map iframe').css({height: '100%'}).css({height: '-=300px'});
  }
}

/* Template */

function toggleLoader() {
  if ($('#loader-flashing').is(':visible') == true) {
    $('#loader-flashing').hide();
  } else {
    $('#loader-flashing').show();
  }
}

function toggleResponsiveItems() {
  if ($(window).width() < 768) {
    $('span#contact-link-icon').show();
    $('span#contact-link-text').hide();
  } else {
    $('span#contact-link-icon').hide();
    $('span#contact-link-text').show();
  }
}

/* Nav */

function loadNav() {
  if ($('nav').is(':visible') == true) {
    if ($('#slideshow').length == 0 && $('#contact-container').is(':visible') != true) {
      $('a#nav-link span, a#logo').css({backgroundPosition: ''});
      $('a#contact-link').css({color: ''});
      $('span#contact-link-icon').css({backgroundPosition: ''});
    }
    $('nav').removeClass('animate-fade-in-1')
        .hide();
    $('span.main-nav-divider span').css({height: '', marginTop: ''});
    $('span.main-nav-mobile-divider span').css({width: ''});
  } else {
    if ($('#contact-container').is(':visible') == true) {
      loadContact();
    }
    if ($(window).width() < 960) {
      $('ul#main-nav-mobile').show();
      $('ul#main-nav').hide();
    } else {
      $('ul#main-nav-mobile').hide();
      $('ul#main-nav').show();
    }
    resizeNavImages();
    $('nav').show()
        .addClass('animate-fade-in-1');
    setTimeout(function () {
      if ($('nav').is(':visible') == true && $('ul#main-nav').is(':visible') == true) {
        $('ul#main-nav a').each(function (i, obj) {
          $('span', this).css({marginLeft: Math.floor(0 - ($(this).width() / 2)) + 'px'});
        });
        $('span.main-nav-divider span').css({height: '150px', marginTop: '0'});
      } else if ($('nav').is(':visible') == true && $('ul#main-nav-mobile').is(':visible') == true) {
        $('span.main-nav-mobile-divider span').css({width: '160px'});
      }
    }, 500);
    if ($('#slideshow').length == 0) {
      $('a#nav-link span, a#logo').css({backgroundPosition: 'center bottom'});
      $('a#contact-link').css({color: '#FFF'});
      $('span#contact-link-icon').css({backgroundPosition: 'left bottom'});
    }
  }
}

function resizeNavImages() {
  var i = 1440;
  var j = 900;
  if ($(window).height() > $('nav img').height() || $(window).width() < $('nav img').width()) {
    $('nav img').height($(window).height());
    var k = $('nav img').height() / j * 100;
    k = i / 100 * k;
    $('nav img').width(k);
  }
  if ($(window).width() > $('nav img').width() || $(window).height() < $('nav img').height()) {
    $('nav img').width($(window).width());
    k = $('nav img').width() / i * 100;
    k = j / 100 * k;
    $('nav img').height(k);
  }
  var l = $(window).width() - $('nav img').width();
  l = Math.round(l / 2);
  k = $(window).height() - $('nav img').height();
  k = Math.round(k / 2);
  $('nav img').css({top: k + 'px', left: l + 'px'});
}

/* Contact */

function loadContact() {
  if ($('#contact-container').is(':visible') == true) {
    hideMap();
    toggleResponsiveItems();
    $('span#contact-close-icon').hide();
    if ($('#slideshow').length >= 1) {
      $('a#contact-link, a#nav-link').css({backgroundColor: '', borderColor: ''});
    } else if ($('nav').is(':visible') != true) {
      $('a#nav-link span, a#logo').css({backgroundPosition: ''});
      $('a#contact-link').css({color: ''});
      $('span#contact-link-icon').css({backgroundPosition: ''});
    }
    $('#contact-container').removeClass('animate-fade-in-1')
        .hide();
    $('span.contact-divider span').css({height: '', marginTop: ''});
    $('span.contact-mobile-divider span').css({width: ''});
    $('#contact-container').css({overflow: '', '-webkit-overflow-scrolling': ''});
  } else {
    $('span#contact-close-icon').show();
    $('span#contact-link-text, span#contact-link-icon').hide();
    $('a#contact-link, a#nav-link').css({backgroundColor: 'rgba(0, 0, 0, 0)', borderColor: 'rgba(0, 0, 0, 0)'});
    if ($('nav').is(':visible') == true) {
      loadNav();
    }
    if ($(window).width() < 960) {
      $('ul#contact-mobile').show();
      if ($(window).height() < 600) {
        $('#contact-wrapper-mobile').css({height: '600px'});
        $('#contact-container').css({overflow: 'scroll', '-webkit-overflow-scrolling': 'touch'});
      } else {
        $('#contact-wrapper-mobile').css({height: $(window).height() + 'px'});
      }
      $('ul#contact').hide();
    } else {
      $('ul#contact-mobile').hide();
      $('ul#contact').show();
    }
    $('#contact-container').show()
        .addClass('animate-fade-in-1');
    setTimeout(function () {
      if ($('#contact-container').is(':visible') == true && $('ul#contact').is(':visible') == true) {
        $('span.contact-divider span').css({height: '200px', marginTop: '0'});
      } else if ($('#contact-container').is(':visible') == true && $('ul#contact-mobile').is(':visible') == true) {
        $('span.contact-mobile-divider span').css({width: '290px'});
      }
    }, 500);
    if ($('#slideshow').length == 0) {
      $('a#nav-link span, a#logo').css({backgroundPosition: 'center bottom'});
      $('a#contact-link').css({color: '#FFF'});
      $('span#contact-link-icon').css({backgroundPosition: 'left bottom'});
    }
  }
}

function hideMap() {
  $('#contact-map').removeClass('animate-left-1')
      .css({left: '100%', opacity: 0});
}
