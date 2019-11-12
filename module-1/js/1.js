$(document).ready(function() {
    $('.navbar-default .dmenu').hover(function() {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(250);
    }, function() {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(200);
    });
});
var lastScrollTop = 0;
$(window).scroll(function() {
    var st = $(this).scrollTop();
    var header = $('.top-header');
    setTimeout(function() {
        if (st > lastScrollTop) {
            header.addClass('hides');
        } else {
            header.removeClass('hides');
        }
        lastScrollTop = st;
    }, 100);
});