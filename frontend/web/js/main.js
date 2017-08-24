$(document).ready(function () {

    /*http://digitalbush.com/projects/masked-input-plugin/*/

    $("#header").sticky({topSpacing: 0});



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




    $('.owl-carousel.logos').owlCarousel({
        loop: true,
        dots: false,
        margin: 20,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 2,
                autoplay: false
            },
            600: {
                items: 4
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
                autoHeight:true,
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




