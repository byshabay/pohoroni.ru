$(document).ready(function () {
    // 1.INITIALIZATION START

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

    // 1.INITIALIZATION END

    // 2.SLIDER NUMBER START

    $(".slick-arrow").click(function () {
        $(".slider__item").each(function (i, elem) {
            if (
                $(this).hasClass('slick-current')
            ) {
                $('.slider_current').removeClass('slider_current');
                $(this).addClass("slider_current");
                $('.slider_active-tab').removeClass('slider_active-tab');
                $('a[href = "#' + $(".slider_current").attr("id") + '"]').addClass("slider_active-tab");
            }
        })
    });

    $(".slider__tab a").click(function () {
        return false;
    });

    // 2.SLIDER NUMBER END

});