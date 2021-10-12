$(document).ready(function () {
    // 1.INITIALIZATION PROCEDURE SLIDER START

    $('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
    });

    $('.slick-dots li:first-child').addClass('first-dots');
    $('.slick-dots li:last-child').addClass('last-dots');

    // 1.INITIALIZATION PROCEDURE SLIDER END


    // 2.COMMON LARGE SLIDER INITIALIZATION START

    $(".common-lg-slider").slick({
        infinite: false,
        slidesToScroll: 1,
        slidesToShow: 2.8,

        responsive: [
            {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 815,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    })

    // 2.COMMON LARGE SLIDER INITIALIZATION END

    // 3.TARIFFS SLIDER ON MOBILE START

    $('#price-1').slick({
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                }
            },
            {
                breakpoint: 673,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                }
            },
        ]
    });

    $('#price-2').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                }
            },
            {
                breakpoint: 673,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                }
            },
        ]
    });

    // 3.TARIFFS SLIDER ON MOBILE END

    // 4.LICENSES SLIDER ON MOBILE START

    $('.licenses__items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        responsive: [{
            breakpoint: 600,
            settings: {
                arrows: true,
                slidesToShow: 2,
            }
        }]
    });

    if (
        $(document).width() < 601
    ) {

        // 4.1.FIX SLICK + FANCYBOX START

        $(".slick-cloned a").removeAttr("data-fancybox");

        // 4.1.FIX SLICK + FANCYBOX END
    }


    // 4.LICENSES SLIDER ON MOBILE END




});