$(document).ready(function () {
// Global variables
  aboutSection = '';
  leadershipProfile = 0;
  servicesImageLoaded = false;
// Mouse events
// Set-up

  /*入口函数*/
  window.onload = function() {
    calcReplacementAbout();
    toggleAboutResponsiveItems();
    if ($('#leadership-container').length >= 1) {
      if (leadershipProfile) {
        hideLeadershipProfile();
      } else {
        positionLeadershipItems();
      }
      resizeLeadershipImages();
    }
    if ($('#services-container').length >= 1) {
      resizeServicesImage();
      positionServicesItems();
    }
  }

  calcReplacementAbout();
  toggleAboutResponsiveItems();
  $('#sub-header-container').css({top: '50px'});
// Mobile set-up
  if (touchScreen) {

  }
  $(window).resize(function () {
    window.onload();
  });

  /*$.address.change(function (event) {
   address(event.value);
   });*/
});

/* Calc replacement */

function calcReplacementAbout() {
  if (!Modernizr.csscalc) {
    $('#about-loader').css({height: '100%'}).css({height: '-=90px'});
  }
}

/* Template */

function toggleAboutResponsiveItems() {
  /*if ($(window).width() < 768) {
   $('ul#sub-header-mobile').show();
   $('ul#sub-header').hide();
   } else {
   $('ul#sub-header-mobile').hide();
   $('ul#sub-header').show();
   }
   if ($('#sub-header-container').css('height') != '40px') {
   $('#sub-header-container').css({height: ''});
   }*/
}

function openAboutMobileNav() {
  if (leadershipProfile) {
    hideLeadershipProfile();
  }
  if ($('#sub-header-container').css('height') == '65px') {
    $('#sub-header-container').css({height: ''});
    $('ul#sub-header-mobile li#sub-header-mobile-current span').css({backgroundPosition: ''});
  } else {
    $('#sub-header-container').css({height: '65px'});
    $('ul#sub-header-mobile li#sub-header-mobile-current span').css({backgroundPosition: 'left top'});
  }
}

/* Address */

/*function address(i) {
 if ($('nav').is(':visible') == true) {
 loadNav();
 }
 // Variables
 var j = i;
 if (j != '/') {
 var k = j.replace('/', '');
 } else {
 k = 'leadership';
 }
 if (k == 'leadership') {
 k = 'leadership-2';
 }
 // var l = /^\d+$/.test(k); // Check if number
 // Load page
 var m = k + '.html';
 loadAboutPage(m);
 if ($('#case-study-title-container').css('height') != '0px') {
 $('#case-study-title-container').css({height: '0'});
 }
 if (k == 'leadership-2') {
 k = 'leadership';
 }
 // Sub nav
 if (aboutSection) {
 $('li#sub-header-' + aboutSection + ' a').css({color: ''});
 activateLink('li#sub-header-' + aboutSection + ' a');
 $('li#sub-header-mobile-' + aboutSection + ' a').show();
 }
 $('li#sub-header-' + k + ' a').css({color: '#33F'});
 if (k != 'leadership') {
 deactivateLink('li#sub-header-' + k + ' a');
 }
 var n = $('li#sub-header-mobile-' + k + ' a').text();
 $('li#sub-header-mobile-' + k + ' a').hide();
 $('li#sub-header-mobile-current a').empty()
 .append(n);
 $('#sub-header-container').css({height: ''});
 aboutSection = k;
 }*/

/*function loadAboutPage(i) {
 $('#about-loader').load('pages/about_' + i);
 }*/
/*

 function aboutMainNavClick() {
 if (leadershipProfile) {
 if ($('nav').is(':visible') == true) {
 loadNav();
 }
 hideLeadershipProfile();
 }
 window.location = '#/';
 }
 */

/* Leadership */

/*function resizeLeadershipImages() {
 var i = 1200;
 var j = 1500;
 if ($('.leadership-item').height() > $('.leadership-item img.leadership-img').height() || $('.leadership-item').width() < $('.leadership-item img.leadership-img').width()) {
 $('.leadership-item img.leadership-img').height($('.leadership-item').height());
 var k = $('.leadership-item img.leadership-img').height() / j * 100;
 k = i / 100 * k;
 $('.leadership-item img.leadership-img').width(k);
 }
 if ($('.leadership-item').width() > $('.leadership-item img.leadership-img').width() || $('.leadership-item').height() < $('.leadership-item img.leadership-img').height()) {
 $('.leadership-item img.leadership-img').width($('.leadership-item').width());
 k = $('.leadership-item img.leadership-img').width() / i * 100;
 k = j / 100 * k;
 $('.leadership-item img.leadership-img').height(k);
 }
 var l = $('.leadership-item').width() - $('.leadership-item img.leadership-img').width();
 l = Math.round(l / 2);
 k = $('.leadership-item').height() - $('.leadership-item img.leadership-img').height();
 k = Math.round(k / 2);
 $('.leadership-item img.leadership-img').css({top: k + 'px', left: l + 'px'});
 }

 function loadLeadershipItem(i) {
 if ($('#loader-flashing').is(':visible') == false) {
 toggleLoader();
 }
 $('#leadership-item-' + i + ' img.leadership-img').imagesLoaded(function () {
 $(this).unbind('load');
 if ($('#loader-flashing').is(':visible') == true) {
 toggleLoader();
 }
 setTimeout(function () {
 $('#leadership-item-' + i).show()
 .addClass('animate-fade-in-1');
 if (i != leadershipCount) {
 var j = i + 1;
 loadLeadershipItem(j);
 }
 }, 500);
 resizeLeadershipImages();
 });
 }

 function positionLeadershipItems() {
 $('.leadership-item-text').css({marginLeft: '0', marginTop: '0'})
 .hide();
 $('.leadership-item-back-link').hide()
 .removeClass('animate-fade-in-1');
 $('#leadership-container').css({overflow: ''});
 $('.leadership-item').css({marginTop: '0'})
 .each(function (i, obj) {
 var j = $(this).attr('id');
 j = j.replace('leadership-item-', '');
 if (j == '4' && $(window).width() < 768) {
 $(this).css({width: '100%', top: '300%', left: '0'});
 $('.leadership-item-divider', this).hide();
 } else if (j == '4') {
 $('.leadership-item-divider', this).show();
 $(this).css({width: '25%', left: '75%', top: '0'});
 } else if (j == '3' && $(window).width() < 768) {
 $(this).css({width: '100%', top: '200%', left: '0'});
 $('.leadership-item-divider', this).hide();
 } else if (j == '3') {
 $('.leadership-item-divider', this).show();
 if (leadershipCount == 4) {
 $(this).css({width: '25%', left: '50%', top: '0'});
 } else {
 $(this).css({width: '33.3%', left: '66.6%', top: '0'});
 }
 } else if (j == '2' && $(window).width() < 768) {
 $(this).css({width: '100%', top: '100%', left: '0'});
 $('.leadership-item-divider', this).hide();
 } else if (j == '2') {
 $('.leadership-item-divider', this).show();
 if (leadershipCount == 4) {
 $(this).css({width: '25%', left: '25%', top: '0'});
 } else if (leadershipCount == 3) {
 $(this).css({width: '33.3%', left: '33.3%', top: '0'});
 } else {
 $(this).css({width: '50%', left: '50%', top: '0'});
 }
 } else if (j == '1' && $(window).width() < 768) {
 $(this).css({width: '100%', top: '0', left: '0'});
 } else if (j == '1') {
 if (leadershipCount == 4) {
 $(this).css({width: '25%', left: '0', top: '0'});
 } else if (leadershipCount == 3) {
 $(this).css({width: '33.3%', left: '0', top: '0'});
 } else {
 $(this).css({width: '50%', left: '0', top: '0'});
 }
 }
 });
 }

 function loadLeadershipProfile(i) {
 if (leadershipProfile) {
 hideLeadershipProfile();
 } else {
 $('.leadership-item-divider').hide();
 $('#leadership-item-' + i + ' img.leadership-img').css({opacity: 1});
 $('#leadership-item-' + i + ' .leadership-item-rollover-text').css({opacity: 0});

 if ($(window).width() < 768) {
 if (i == 1) {
 var j = 0;
 } else {
 j = $(window).height();
 }
 if ($('#sub-header-container').css('height') == '65px') {
 $('#sub-header-container').css({height: ''});
 $('ul#sub-header-mobile li#sub-header-mobile-current span').css({backgroundPosition: ''});
 }
 $('#leadership-container').scrollTop(j, 0);
 }


 if (i == 1 && $(window).width() < 768) { // Change if more profiles added
 $('#leadership-item-' + i).css({marginTop: '-100%'});
 $('#leadership-item-2').css({top: '100%'});
 $('#leadership-item-' + i + ' .leadership-item-text').css({marginTop: '100%'})
 .show();
 $('#leadership-container').css({overflow: 'hidden'});
 } else if (i == 1) {
 $('#leadership-item-' + i).css({left: '50%'});
 $('#leadership-item-2').css({left: '100%'});
 $('#leadership-item-' + i + ' .leadership-item-text').css({marginLeft: '-100%'})
 .show();
 $('#leadership-item-' + i + ' .leadership-item-back-link').show()
 .addClass('animate-fade-in-1');
 } else if (i == 2 && $(window).width() < 768) {
 $('#leadership-item-' + i).css({marginTop: '-200%'});
 $('#leadership-item-1').css({marginTop: '-100%'});
 $('#leadership-item-' + i + ' .leadership-item-text').css({marginTop: '100%'})
 .show();
 $('#leadership-container').css({overflow: 'hidden'});
 } else if (i == 2) {
 $('#leadership-item-' + i).css({left: '0'});
 $('#leadership-item-1').css({left: '-50%'});
 $('#leadership-item-' + i + ' .leadership-item-text').css({marginLeft: '100%'})
 .show();
 $('#leadership-item-' + i + ' .leadership-item-back-link').show()
 .addClass('animate-fade-in-1');
 }
 leadershipProfile = i;
 }
 }

 function hideLeadershipProfile() {
 $('#leadership-item-' + leadershipProfile + ' .leadership-item-rollover-text').css({opacity: 1});
 positionLeadershipItems();
 leadershipProfile = 0;
 }*/


/*调节图片显示大小*/
function resizeServicesImage() {
  var i = 1200;
  var j = 1500;
  if ($('#services-image-container').height() > $('#services-image-container img').height() || $('#services-image-container').width() < $('#services-image-container img').width()) {
    $('#services-image-container img').height($('#services-image-container').height());
    var k = $('#services-image-container img').height() / j * 100;
    k = i / 100 * k;
    $('#services-image-container img').width(k);
  }
  if ($('#services-image-container').width() > $('#services-image-container img').width() || $('#services-image-container').height() < $('#services-image-container img').height()) {
    $('#services-image-container img').width($('#services-image-container').width());
    k = $('#services-image-container img').width() / i * 100;
    k = j / 100 * k;
    $('#services-image-container img').height(k);
  }
  var l = $('#services-image-container').width() - $('#services-image-container img').width();
  l = Math.round(l / 2);
  k = $('#services-image-container').height() - $('#services-image-container img').height();
  k = Math.round(k / 2);
  $('#services-image-container img').css({top: k + 'px', left: l + 'px'});
}

/*移动端调整*/
function positionServicesItems() {
  if ($(window).width() < 768) {
    $('#services-image-container').css({ width: '50%'});
    $('#services-text').css({ width: '50%'});
    loadServicesImage();
  } else {
    if (servicesImageLoaded == false) {
      loadServicesImage();
    }
    $('#services-text, #services-image-container').css({left: '', width: ''});
  }
}


/*加载图片*/
function loadServicesImage() {
  if ($('#loader-flashing').is(':visible') == false) {
    toggleLoader();
  }
  $('#services-image-container img').imagesLoaded(function () {
    $(this).unbind('load');
    if ($('#loader-flashing').is(':visible') == true) {
      toggleLoader();
    }
    setTimeout(function () {
      $('#services-image-container').show()
          .addClass('animate-fade-in-1');
      if ($('#services-text').is(':visible') == false) {
        loadServicesText();
      }
    }, 500);
    resizeServicesImage();
  });
  servicesImageLoaded = true;
}

function loadServicesText() {
  setTimeout(function () {
    $('#services-text').show()
        .addClass('animate-fade-in-1');
  }, 500);
}