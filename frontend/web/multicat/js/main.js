$(document).ready(function () {
    $(".btn-for-contact").click(function () {
        $(".topcontactinfo").toggleClass("active");
        if ($(this).find(".fa").hasClass("fa-angle-down")) {
            $(this).find(".fa").addClass("fa-angle-up");
            $(this).find(".fa").removeClass("fa-angle-down");
        } else {
            $(this).find(".fa").removeClass("fa-angle-up");
            $(this).find(".fa").addClass("fa-angle-down");
        }
    });
    $(".bottom-btn").click(function () {
        $('#number-15').removeClass('active');
    });


    $('.owl-carousel.slider-center').owlCarousel({
        loop: true,
        center: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            540: {
                items: 2
            },
            680: {
                items: 2
            },
            830: {
                items: 3
            },
            1031: {
                items: 4
            },
            1450: {
                items: 6
            }
        }
    });
    $('#number-8 .container .item').each(function () {
        var $iphone = $(this).find(".frame");
        var $iphoneWrap = $iphone.parent();
        $iphone.sly({
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 0,
            scrollBar: $iphoneWrap.find('.scrollbar'),
            scrollBy: 1,
            pagesBar: $iphoneWrap.find('.pages'),
            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,
            prevPage: $iphoneWrap.find('.prevPage'),
            nextPage: $iphoneWrap.find('.nextPage')
        });
    });


    $('.bottons a').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.bottons a').removeClass('active');
        $('.tab-content').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });


    $("body").on("click", "#number-12 .item .head", function () {
        $("#number-12 .item").removeClass("active");
        $(this).parent().addClass("active");
    });

    $('.footer-map-menu li a').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.footer-map-menu li').removeClass('active');
        $('.footer-map').removeClass('active');

        $(this).parent().addClass('active');
        $("#" + tab_id).addClass('active');
    });

    $('.open-popup').click(function () {
        var tab_id = $(this).attr('data-tab');
        $('.popup').addClass('active');
        $("#" + tab_id).addClass('active');
        $('.popup .right').removeClass('active');
        $('.popup .start').addClass('active');
    });
    $('.close').click(function () {
        $('.popup, .popup .inner').removeClass('active');
    });
    $('.zakaz').click(function () {
        //$('.popup .start').removeClass('active');

    });

    $("#gotop").click(function () {
        $('html, body').animate({
            scrollTop: $("#header").offset().top
        }, 700);
    });
    $("#other, .other > ul > li > a").click(function () {
        $(".other").toggleClass("active");
    });

    $(".menu-toggle").click(function () {
        $(".menu-toggle").toggleClass("open");
        $("footer .bottom-menu .nav ul").toggleClass("active");
        $(".topmenu > ul > li > ul").toggleClass("active");
    });

    $('.contact-menu a').click(function () {
        var tab_id = $(this).attr('data-tab');

        $(this).parent().addClass('active');
        $("#" + tab_id).addClass('active');
    });
    $('.open-botton').click(function () {
        $('.content-services').removeClass('active');
        $(this).parent().addClass('active');
    });
    $(".fancybox").fancybox();

    $('.contact-menu a').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.contact-menu li').removeClass('active');
        $('#number-18 .item').removeClass('active');

        $(this).parent().addClass('active');
        $("#" + tab_id).addClass('active');
    });
});

$(".fancybox").fancybox();

$(".open-adress").click(function () {
    $('.open-foto, .content-foto').removeClass("active");
    if ($(".open-adress, .content-adress").hasClass("active"))
        $('.open-adress, .content-adress').removeClass("active");
    else {
        $('.open-adress, .content-adress').addClass("active");
    }
});
$(".open-foto").click(function () {
    $('.open-adress, .content-adress').removeClass("active");
    if ($(".open-foto, .content-foto").hasClass("active"))
        $('.open-foto, .content-foto').removeClass("active");
    else {
        $('.open-foto, .content-foto').addClass("active");
    }
});
$("#more-comments").click(function () {
    var lastId = $(this).data('last');
    console.log(lastId);
    var el = $(this);
    $.get('/reviews', {lastId: lastId}, function (response) {
        var obj = jQuery.parseJSON(response);
        var html = '';
        $.each(obj, function (i, item) {
            html += '<div class="item">' +
                    '<div class="stars">' +
                    '<span>' + obj[i].rating + '</span>' +
                    '<div class="n-rating-stars" data-bem="{}" data-rate="' + obj[i].rating + '">' +
                    '<i class="n-rating-stars__item"></i>' +
                    '<i class="n-rating-stars__item"></i>' +
                    '<i class="n-rating-stars__item"></i>' +
                    '<i class="n-rating-stars__item"></i>' +
                    '<i class="n-rating-stars__item"></i>' +
                    '</div>' +
                    '</div>' +
                    '<div class="info">' +
                    '<div class="name">' + obj[i].username + '</div>' +
                    '<p>' + obj[i].message + '</p>' +
                    '</div>' +
                    '<div class="clear"></div>' +
                    '</div>';
            lastId = obj[i].id;
        });
        $("#reviews-here").append(html);
        if (obj.length < 10)
            $("#more-comments").remove();
        el.attr('data-last', lastId);
    });
});

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 