$(document).ready(function () {
    // 1.INITIALIZATION PROCEDURE SLIDER START

    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
    });

    // 1.INITIALIZATION PROCEDURE SLIDER END


    // 2.COMMON LARGE SLIDER INITIALIZATION START
    if (
        $(document).width() > 1140
    ) {
        $(".common-lg-slider").slick({
            slidesToShow: 2.8,
            slidesToScroll: 1,
            infinite: false,
            cssEase: false,
            useCSS: false,
        });
    } else if (
        $(document).width() < 815
    ) {
        $(".common-lg-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            cssEase: false,
            useCSS: false,
        });
    } else {
        $(".common-lg-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            cssEase: false,
            useCSS: false,
        });
    }

    // 2.COMMON LARGE SLIDER INITIALIZATION END

    // 3.TARIFFS SLIDER ON MOBILE START
    if (
        $(document).width() < 1140
    ) {
        $('#price-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            infinite: false,
        });

        $('#price-2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            infinite: false,
        });
    }


    // 3.TARIFFS SLIDER ON MOBILE END




});