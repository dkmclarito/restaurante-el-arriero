/*Scroll*/
$(document).ready(function () {
    var altura = $('.fixed-top2').offset().top;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $('.fixed-top2').addClass('top-det');
        } else {
            $('.fixed-top2').removeClass('top-det');
        }
    });

});
