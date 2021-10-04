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

    $('.menu__item_parent').click(function (e) {
        if (e.offsetX > 100) {
            e.preventDefault();
            $(this).addClass('submenu-mobile-active');
            $(this).children('.menu__sub-menu').addClass("submenu-mobile-active");
            $(".burger").addClass("submenu-mobile-active");
            $(".menu-wrapper").addClass("submenu-mobile-active");
        }

    });

    // 4.SUBMENU MOBILE END

    // 5.SUB-SUBMENU MOBILE START
    $('.menu__sub-menu-parent').click(function (e) {
        if (e.offsetX > 100) {
            e.preventDefault();
            $(this).addClass('sub-submenu-mobile-active');
            $(this).parent().addClass('sub-submenu-mobile-active');
            $(this).children('.menu__sub-sub-menu').addClass("sub-submenu-mobile-active");
        }
    })
    // 5.SUB-SUBMENU MOBILE END


    // 6.FORM VALIDATION START

    $('#order-call').submit(function (e) {

        if (validationForm()) {
            e.preventDefault();
        }
    })

    function validationForm() {

        let name = $('#popup-name');
        let phone = $('#popup-phone');
        let address = $('#popup-address');
        let regExp = /^\d{6}?/;
        if (
            name.val().length < 4 ||
            address.val().length < 4 ||
            !regExp.test(phone.val())

        ) {
            var error = true;
        }

        $('#order-call').toggleClass('form-error', error);
        return error;
    }

    // 6.FORM VALIDATION END

    // 7.CATALOG TABS START

    $('.catalog__sidebar-item a').click(function (e) {
        e.preventDefault();

        let href = $(this).attr('href');

        $('.catalog__products_active').removeClass('catalog__products_active');

        $(href).addClass('catalog__products_active');

        /**
         * Строка ниже нужна для того, чтобы не срабатовала якорная ссылка
         */

        return false;
    })

    // 7.CATALOG TABS END

    // 8.ADD THE RIBBON START

    $('.catalog__ribbon-box .catalog__add-ribbon-btn').click(function (e) {
        e.preventDefault();
        let val = $(this).val();
        $(this).parents('.catalog__ribbon-box').siblings('.' + val).addClass('catalog__ribbon-box_visible');
    })

    // 8.ADD THE RIBBON END

    // 9.DELETE THE RIBBON START

    $('.catalog__ribbon-box .catalog__delete-ribbon-btn').click(function (e) {
        e.preventDefault();
        let val = $(this).val();
        $(this).parents('.' + val).removeClass('catalog__ribbon-box_visible');
    })

    // 9.DELETE THE RIBBON END

    // 10.SELECT THE RIBBON START

    $('.catalog__product-option-ribbon').change(function () {

        $(this).siblings('.catalog_type-ribbon-visible').removeClass('catalog_type-ribbon-visible');

        if (
            $(this).val() == "1"
        ) {
            $(this).siblings('.insctiption').addClass('catalog_type-ribbon-visible');
        } else if (
            $(this).val() == "2"
        ) {
            $(this).siblings('.yourInscription').addClass('catalog_type-ribbon-visible')
        }
    })

    // 10.SELECT THE RIBBON END

    // 11.CATALOG CATEGORY FOR MOBILE START

    $('.catalog__h2').click(function () {
        $('.catalog__sidebar').toggleClass('catalog__sidebar_visible')
    })

    // 11.CATALOG CATEGORY FOR MOBILE END

    // 12.AUTO MARGIN OF PRODUCT DARD H1 START 

    if (
        $(document).width() < 1140
    ) {
        let height = $('.card__top-block').height() + 20;
        $('.card img').css('margin-top', height);
    }

    // 12.AUTO MARGIN OF PRODUCT DARD H1 END

    // 13.ERROR 404 MAIN HEIGHT START

    var headerHeight = $('.error-404').parent('body').addClass('error-404-page');


    // 13.ERROR 404 MAIN HEIGHT END 
});