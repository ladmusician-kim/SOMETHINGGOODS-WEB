/**
 * Created by ladmusician on 15. 7. 29..
 */
var window_height = $(window).height();
var footer_height = $('footer').outerHeight();

var main_height = window_height - footer_height;

$('.sg-body-container').css('min-height', main_height + 'px');