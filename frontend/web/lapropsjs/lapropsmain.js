$(document).ready(function () {
    function Utils() {
    }
    Utils.prototype = {
        constructor: Utils,
        isElementInView: function (element, fullyInView) {
            var pageTop = $(window).scrollTop();
            var pageBottom = pageTop + $(window).height();
            var elementTop = $(element).offset().top;
            var elementBottom = elementTop + $(element).height();
            if (fullyInView === true) {
                return ((pageTop < elementTop) && (pageBottom > elementBottom));
            } else {
                return ((elementBottom <= pageBottom) && (elementTop >= pageTop));
            }
        }
    };
    var Utils = new Utils();
    $(window).scroll(function () {
        var isElementInView = Utils.isElementInView($('#primushestva'), false);
        if (isElementInView) {
            $('#primushestva').addClass("active");
        };
        var isElementInView2 = Utils.isElementInView($('#neispravnost .container'), false);
        if (isElementInView2) {
            $('#neispravnost .container').addClass("active");
        };
        var isElementInView3 = Utils.isElementInView($('#brands'), false);
        if (isElementInView3) {
            $('#brands').addClass("active");
        };
        var isElementInView4 = Utils.isElementInView($('#skidka'), false);
        if (isElementInView4) {
            $('#skidka').addClass("active");
        };
        var isElementInView5 = Utils.isElementInView($('#text-block'), false);
        if (isElementInView5) {
            $('#text-block').addClass("active");
        };
        var isElementInView6 = Utils.isElementInView($('#otzvi'), false);
        if (isElementInView6) {
            $('#otzvi').addClass("active");
        };
        var isElementInView7 = Utils.isElementInView($('#ask-form'), false);
        if (isElementInView7) {
            $('#ask-form').addClass("active");
        };
    });

    /*http://digitalbush.com/projects/masked-input-plugin/*/

    $("").sticky({topSpacing: 0});

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    $("#show-services").click(function () {
        if ($('#services-table:visible').length) {
            $('#services-table').hide();
            $(this).text("Показать цены по прочим услугам");
        } else {
            $('#services-table').show();
            $(this).text("Цены по прочим услугам");
        }
    });
    $(".select-region").click(function () {
        $(".regions").toggleClass("active");
    });

    $(".punkt.forma").click(function () {
        $(".phone").toggleClass("active");
    });

    $("#primushestva .punkt").click(function () {
        $(".phone").toggleClass("active");
    });
    $(".zakrit").click(function () {
        $(".phone").toggleClass("active");
    });
    $(".close").click(function () {
        $(".popup").removeClass("active");
    });
    $('.mobile-menu').click(function () {
        $('.nav-icon2').toggleClass('open');
        $('.mobile-menu').toggleClass('active');
        $(".nav").toggleClass("active");
    });
    $(".active-bg").click(function () {
        $(".nav").toggleClass("active");
    });
    $("#banner .more").click(function () {
        $(".phone").toggleClass("active");
    });
    $("#skidka .more").click(function () {
        $(".phone").toggleClass("active");
    });
    $(".popup-zakaz").click(function () {
        $(".phone").toggleClass("active");
    });
    $("#text-block .more").click(function () {
        $("#text-block").toggleClass("active");
    });

    $(".v-msk").click(function () {
        $(".all-contact").removeClass("active");
        $(".msk-contact").addClass("active");
    });
    $(".v-spb").click(function () {
        $(".all-contact").removeClass("active");
        $(".spb-contact").addClass("active");
    });



    $('.owl-carousel.logos').owlCarousel({
        loop: true,
        dots: false,
        margin: 20,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 3,
                autoplay: false
            },
            600: {
                items: 5
            },
            1000: {
                items: 8
            }

        }
    });

    $('.owl-carousel.otziv').owlCarousel({
        loop: true,
        dots: false,
        margin: 80,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                autoHeight: true,
                autoplay: false
            },
            600: {
                items: 1
            },
            1000: {
                items: 2,
            }

        }
    });
});




