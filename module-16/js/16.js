$(document).ready(function() {
    $('a[role=button]').click(function() {
        setTimeout(() => {
            if ($('.panel-default > .panel-heading > .panel-title > a').hasClass('')) {

                $(this).parent().parent().css('background', '#fff');
            } else {
                $('.panel-heading').css('background', '#1768fe');
            }
        }, 10);
        if (!$('.panel-default > .panel-heading > .panel-title > a').hasClass('')) {

            $(this).parent().parent().css('background', '#fff');
        } else {
            $('.panel-heading').css('background', '#1768fe');
        }
    });
})