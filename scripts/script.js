$(document).ready(function () {

    // 1.HEADER SCROLL START

    $(document).scroll(function () {
        $(window).scrollTop() > 0 ? $('.header__top-nav').addClass("header_scroll") : $('.header__top-nav').toggleClass("header_scroll")
    })

    // 1.HEADER SCROLL END

    // 2.TARIFFS TABS START

    $('.prices__tab a').click(function () {

        $('.prices__active-tab').removeClass('prices__active-tab');
        $(this).addClass('prices__active-tab');

        $(this).siblings('hr').addClass('prices__active-tab');

        let href = $(this).attr('href');
        $('.active-tariff').removeClass('active-tariff');
        $(href).addClass('active-tariff');


        /**
         * Код ниже нужен для того, чтобы страница не пролистовалась
         * при нажатии на ссылку-якорь
         * 
         */

        return false;
    });

    // 2.TARIFFS TABS END

    // 3.BURGER START


    $('.burger').click(function () {
        $(this).toggleClass('mobile-header_active');
        $('.header, .main, .blackout').toggleClass('mobile-header_active');
        if (
            $(this).hasClass('submenu-mobile-active')
        ) {
            $('.submenu-mobile-active').removeClass('submenu-mobile-active');
            $('.sub-submenu-mobile-active').removeClass('sub-submenu-mobile-active');
            $('.header, .main, .blackout').toggleClass('mobile-header_active');
            $(this).toggleClass('mobile-header_active');
        }
    });

    $(".blackout").click(function () {
        $('.mobile-header_active').removeClass('mobile-header_active');
        $('.submenu-mobile-active').removeClass('submenu-mobile-active');
    })

    // 3.BURGER END

    // 4.SUBMENU MOBILE START

    $('.menu__item_parent').click(function () {
        $(this).addClass('submenu-mobile-active');
        $(this).children('.menu__sub-menu').addClass("submenu-mobile-active");
        $(".burger").addClass("submenu-mobile-active");
        $(".menu-wrapper").addClass("submenu-mobile-active");
    });

    // 4.SUBMENU MOBILE END

    // 5.SUB-SUBMENU MOBILE START
    $('.menu__sub-menu-parent').click(function(){
        $(this).addClass('sub-submenu-mobile-active');
        $(this).parent().addClass('sub-submenu-mobile-active');
        $(this).children('.menu__sub-sub-menu').addClass("sub-submenu-mobile-active");
    })
    // 5.SUB-SUBMENU MOBILE END
});