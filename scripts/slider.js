$(document).ready(function () {
    // 1.INITIALIZATION PROCEDURE SLIDER START

    $('.slider-for').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.slider-for',

    });

    /** 
     * Код ниже удаляет свойство слайдера у .slider-for. Сначала я добавляю
     * этому элементу свойства и настройки слайдера, синхронизированного 
     * с основным слайдером. Но свойство пролистывания быть не должно.
     * 
     */

    $('.slider-for').slick('unslick');

    // 1.INITIALIZATION PROCEDURE SLIDER END

    // 2.PROCEDURE SLIDER NUMBER START

    $(".common-sm-slider .slick-arrow").click(function () {
        $(".common-sm-slider .slider__item").each(function (i, elem) {
            if (
                $(this).hasClass('slick-current')
            ) {
                $('.common-sm-slider .slider_current').removeClass('slider_current');
                $(this).addClass("slider_current");
                $('.slider_active-tab').removeClass('slider_active-tab');
                $('a[href = "#' + $(".slider_current").attr("id") + '"]').addClass("slider_active-tab");
            }
        })
    });

    $(".slider__tab a").click(function () {
        return false;
    });

    // 2.PROCEDURE SLIDER NUMBER END

    // 3.COMMON LARGE SLIDER INITIALIZATION START

    $(".common-lg-slider").slick({
        slidesToShow: 2.8,
        slidesToScroll: 1,
        infinite: false,
        cssEase: false,
        useCSS: false,
    });

    // 3.COMMON LARGE SLIDER INITIALIZATION END

});