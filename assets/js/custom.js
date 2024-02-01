$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var box = $('.header-text').height()-150;
    var header = $('header').height();

    if (scroll >= box - header) {
        $("header").addClass("background-header");
    } else {
        $("header").removeClass("background-header");
    }
});