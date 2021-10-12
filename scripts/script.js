$(document).ready(function () {

    // 1.HEADER SCROLL START

    $(document).scroll(function () {
        $(window).scrollTop() > 0 ? $('.header__top-nav').addClass("header_scroll") : $('.header__top-nav').removeClass("header_scroll")
    })

    $(window).scrollTop() > 0 ? $('.header__top-nav').addClass("header_scroll") : $('.header__top-nav').removeClass("header_scroll")


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
        $('.header, .main, .blackout, body').toggleClass('mobile-header_active');
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

    $('.menu__item_parent > a').on("click touchstart", function (e) {
        if (e.offsetX > 200) {
            e.preventDefault();
            $(this).parent('.menu__item_parent').addClass('submenu-mobile-active');
            $(this).siblings('.menu__sub-menu').addClass("submenu-mobile-active");
            $(".burger").addClass("submenu-mobile-active");
            $(".menu-wrapper").addClass("submenu-mobile-active");
        }

    });

    // 4.SUBMENU MOBILE END

    // 5.SUB-SUBMENU MOBILE START

    $('.menu__sub-menu-parent > a').on("click touchstart", function (e) {
        if (e.offsetX > 200) {
            e.preventDefault();
            $(this).parent('.menu__sub-menu-parent').addClass('sub-submenu-mobile-active');
            $(".menu-wrapper").addClass("sub-submenu-mobile-active");
            $(this).parents('.menu__item').addClass('sub-submenu-mobile-active');
            $(this).siblings('.menu__sub-sub-menu').addClass("sub-submenu-mobile-active");
        }
    })

    // 5.SUB-SUBMENU MOBILE END


    // 6.FORM VALIDATION START

    $('#order-call').submit(function (e) {

        if (validationForm()) {
            e.preventDefault();

        } else {
            e.preventDefault();
            $('.common-popup-form .common-h2').text('Спасибо за вашу заявку!');
            $('.common-popup-form .order-popup-p').text('Наш менеджер свяжется с вами в течении двух чаcов');
            $('.common-popup-form').addClass('common-succes-popup-form');
            $('.common-popup-error, .common-popup-input, .common-popup-mini-text, .popup-btn').hide();
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

        if (error) {
            $('#order-call').addClass('form-error');
            setTimeout(function () {
                $('#order-call').removeClass('form-error');
            }, 2000)
        }

        return error;
    }

    // 6.FORM VALIDATION END

    // 7.CATALOG TABS START

    $('.catalog__sidebar-item a').on('click', function (e) {
        e.preventDefault();

        let href = $(this).attr('href');

        $('.catalog__products_active').removeClass('catalog__products_active');

        $(href).addClass('catalog__products_active');

        $(this).siblings('.catalog__sidebar-submenu').toggleClass('catalog__sidebar-submenu-active');

        /**
         * Строка ниже нужна для того, чтобы не срабатовала якорная ссылка
         */

        return false;
    });

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

    // 13.ERROR 404 BODY CLASS START

    $('.error-404').parent('body').addClass('error-404-page');

    // 13.ERROR 404 BODY CLASS END 

    // 14.PAYMENTS METHOD TABS START

    $('.common-square-tab a').click(function (e) {
        e.preventDefault();
        $('.common-square-tab__active-tab').removeClass('common-square-tab__active-tab');

        let href = $(this).attr('href');
        $(this).parent('li').addClass('common-square-tab__active-tab');
        $(href).addClass('common-square-tab__active-tab');

        return false;

    })

    // 14.PAYMENTS METHOD TABS END

    // 15.REVIEWS CATALOG SHOW MORE START

    var reviewsAmount = $('.reviews-catalog__list').find('li').length;

    if (
        $(document).width() < 980 &&
        $(document).width() > 770

    ) {
        var difference = 4;
    } else if (
        $(document).width() < 770
    ) {
        var difference = 2;

    } else {
        var difference = 6;
    }

    var currentReviewsCount = difference;

    $('.reviews-catalog__btn').click(function () {
        let reviewsRemainder = reviewsAmount - currentReviewsCount;
        if (
            reviewsRemainder > currentReviewsCount
        ) {
            currentReviewsCount += difference;
        } else {
            currentReviewsCount += reviewsRemainder;
        }

        reviewsCatalogItemsShow(currentReviewsCount, reviewsAmount)
        return false;
    })

    function reviewsCatalogItemsShow(count, amount) {
        $('.reviews-catalog__p').text(count + ' из ' + amount);
        $('.reviews-catalog__list li').hide();
        $('.reviews-catalog__list li:lt(' + count + ')').show();
    }

    reviewsCatalogItemsShow(currentReviewsCount, reviewsAmount)

    // 15.REVIEWS CATALOG SHOW MORE END

    // 16.FORM REVIEW VALIDATION START

    $('#review-popup').submit(function (e) {

        if (validationReviewForm()) {
            e.preventDefault();

        } else {
            e.preventDefault();
            $('.common-popup-form .common-h2').text('Спасибо за ваш отзыв!');
            $('.common-popup-form').addClass('common-succes-popup-form');
            $('.common-popup-error, .common-popup-input, .common-popup-mini-text, .popup-btn, .order-popup-p').hide();
        }
    })

    function validationReviewForm() {

        let name = $('#review-popup-name');
        let phone = $('#review-popup-phone');
        let textarea = $('#review-popup-text');
        let regExp = /^\d{6}?/;

        if (
            name.val().length < 4 ||
            textarea.val().length < 4 ||
            !regExp.test(phone.val())

        ) {
            var error = true;
        }

        if (error) {
            $('#review-popup').addClass('form-error');
            setTimeout(function () {
                $('#review-popup').removeClass('form-error');
            }, 2000)
        }

        return error;
    }

    // 16.REVIEW VALIDATION END

});