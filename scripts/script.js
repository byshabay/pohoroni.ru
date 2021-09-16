$(document).ready(function () {

    // 1.HEADER SCROLL START

    $(document).scroll(function () {
        $(window).scrollTop() > 0 ? $('.header__top-nav').addClass("header_scroll") : $('.header__top-nav').toggleClass("header_scroll")
    })

    // 1.HEADER SCROLL END



});