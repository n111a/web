$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
    });
    $('.bars').on('click', function (e) {
        e.preventDefault();
        var selector = $(this).attr('href');
        $(selector).slideToggle(200);
    });
    $('.menu-link').on('click', function (e) {
        e.preventDefault();
        $('.menu-link').not(this).removeClass('active-bar');
        $('.menu').addClass('hid');
        var selector = $(this).attr('href');
        $('.menu').not(selector).slideUp(200)
        $(this).toggleClass('active-bar');
        $(selector).slideToggle(200);
    });

    $('.btn-scroll-top').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    window.addEventListener('resize', function (e) {
        if ($('body').innerWidth() >= 992) {
            $('#burger-top').removeAttr('style');
        } else {
            $('#burger-top').css('display', 'none');
        }
    });
});

