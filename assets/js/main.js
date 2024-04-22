jQuery(document).ready(function( $ ) {
  // Click on LINE button
  $(".btn-line").on("click", function() {
    let text = $(this).attr('text');
    gtag('event', 'click', {'event_category': 'start_on_LINE','event_label': text});
    location.href = 'http://nav.cx/ABUoGT';
  });
  // Click on FACEBOOK button
  $(".btn-facebook").on("click", function() {
    let text = $(this).attr('text');
    gtag('event', 'click', {'event_category': 'start_on_FACEBOOK','event_label': text});
    location.href = 'http://m.me/103079777722494';
  });
  // Click on WEB button
  $(".btn-web").on("click", function() {
    let text = $(this).attr('text');
    gtag('event', 'click', {'event_category': 'start_on_WEB','event_label': text});
    location.href = '/jorge/web-jorge';
  });
  // Language switcher
  $(".header-language__img").on("click", function() {
    $('.header-language__item').toggleClass('open');
  });
});
