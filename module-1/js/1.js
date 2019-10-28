$(document).ready(function() {
    $('.navbar-default .dmenu').hover(function() {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(250);
    }, function() {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(200);
    });
});