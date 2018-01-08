
$(window).on('load', function () {
    $('body').addClass('page_ready');
});

$(function () {
    $('.header__burger').on('click', function () {
        $('body').toggleClass('page_open');
        if ($('body').hasClass('page_open')) {
            $('.header__panel').height(69);
        } else {
            $('.header__panel').height(0);
            closeMenu();
        }
    });
    $(window).scroll(function () {
        var windscroll = $(window).scrollTop();
        var screenWidth = 108;
        if ($(window).width() > 599) {
            screenWidth = 108
        } else {
            screenWidth = 73
        }
        if (windscroll > screenWidth) {
            if (screenWidth == 108) {
                $('body').addClass('page_scrolled').removeClass('page_open');
                closeMenu();
            }
            $('.nav__item').removeClass('nav__item_active');
        } else {
            $('body').removeClass('page_scrolled');
        }
    }).scroll();
    $('.js-anchor').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
    $(".office-content.other-table h2").click(function () {
        $('.other-table').toggleClass("active");
    });
    $('.menu__tab').on('mouseover', function () {
        $(this).addClass('menu__tab_active').siblings().removeClass('menu__tab_active');
        $('.menu__section[data-menu-section=' + $(this).data('menu-tab') + ']').addClass('menu__section_active').siblings().removeClass('menu__section_active');
        $('.menu').addClass('menu_active');
        var headerHeight = $('.menu__content').height() + $('.menu__tabs').height();
        if ($(window).width() > 599) {
            $('.header__panel').height(headerHeight);
        } else {
            $('.header__panel').height(headerHeight + 49);
        }
    });
    $('.menu').on('mouseleave', function () {
        closeMenu();
    });
    function closeMenu() {
        $('.menu__tab').removeClass('menu__tab_active');
        $('.menu__section').removeClass('menu__section_active');
        $('.menu').removeClass('menu_active');
        var headerHeight = $('.menu__tabs').height();
        if ($(window).width() > 599) {
            $('.header__panel').height(headerHeight);
        } else {
            $('.header__panel').height(headerHeight + 49);
        }
    }
    $(window).click(function () {
        $('.nav__item_location').removeClass('nav__item_active');
    });
    $('.nav__item_location').click(function (e) {
        e.stopImmediatePropagation();
    });
    $('.nav__link').click(function (e) {
        $('.menu__item').removeClass('menu__item_active');
        var navNow = $(this).closest('.nav__item');
        if (navNow.children('.nav__subnav').length > 0) {
            e.preventDefault();
            navNow.toggleClass('nav__item_active').siblings().removeClass('nav__item_active');
        }
    });
    $('.nav__sublink').click(function (e) {
        e.preventDefault();
        var subNavNow = $(this);
        $.cookie('city', subNavNow.text(), {expires: 365, path: '/'});
        $('.nav__item_location .nav__label').text(subNavNow.text());
        subNavNow.closest('.nav__item').removeClass('nav__item_active');
        $.cookie('cityNow', subNavNow.parent().data('city'), {expires: 365, path: '/'});
        $('.connect__phone[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
        var n = $(this).attr("id");
        $.cookie('city-text', n, {expires: 365, path: '/'});
        $.ajax({
            type: "POST",
            url: "/geoip/",
            data: {"sity_change_btn": n},
            success: function (msg) {
                location.reload();
            }
        });
    });
    if ($.cookie('city-text') == "city-moscow" || $.cookie('city-text') == null) {
        $(".city-chek-msk").show();
        $(".city-chek-spb").hide();
    }
    if ($.cookie('city-text') == "city-spb") {
        $(".city-chek-msk").hide();
        $(".city-chek-spb").show();
    }
    if ($.cookie('city') != null) {
        $('.nav__item_location .nav__label').text($.cookie('city'));
    }
    if ($.cookie('cityNow') != '') {
        $('.connect__phone[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
    }

});
$(function () {
    $('.post__play').on('click', function (ev) {
        var currentVideo = $(this).closest('.post__video');
        currentVideo.addClass('post__video_active');
        currentVideo.find('.post__movie')[0].src += "&autoplay=1";
        ev.preventDefault();
    });
});
$(function () {
    $('.breaking__list_accordion .breaking__name').on('click', function (e) {
        e.preventDefault();
        var currentBreaking = $(this).parent();
        var currentBreakingData = currentBreaking.data('breaking');
        if (currentBreaking.hasClass('breaking__item_active')) {
            currentBreaking.removeClass('breaking__item_active');
            $('.breaking__point[data-breaking-point="' + currentBreakingData + '"]').removeClass('breaking__point_active');
        } else {
            currentBreaking.addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
            $('.breaking__point[data-breaking-point="' + currentBreakingData + '"]').addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
        }
    });
    $('.breaking__point').on('click', function (e) {
        e.preventDefault();
        var currentBreaking = $(this);
        var currentBreakingData = currentBreaking.data('breaking-point');
        if (currentBreaking.hasClass('breaking__point_active')) {
            currentBreaking.removeClass('breaking__point_active');
            $('.breaking__item[data-breaking="' + currentBreakingData + '"]').removeClass('breaking__item_active');
        } else {
            currentBreaking.addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
            $('.breaking__item[data-breaking="' + currentBreakingData + '"]').addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
        }
    });
});
$(function () {
    $('.faq__head').on('click', function () {
        $(this).parent().toggleClass('faq__item_active').siblings().removeClass('faq__item_active');
    });
});
$(function () {
    var swiper = new Swiper('.reviews__slider', {
        loop: true,
        slidesPerView: 3,
        slidesPerGroup: 3,
        breakpoints: {
            1000: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: '.reviews__next',
        prevButton: '.reviews__prev'
    });
    var swiper = new Swiper('.breaking__slider', {
        loop: true,
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 10,
        breakpoints: {
            1000: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        paginationClickable: true,
        pagination: '.breaking__pagination'
    });
    var swiper = new Swiper('.consultation__slider', {
        loop: true,
        slidesPerView: 4,
        slidesPerGroup: 4,
        breakpoints: {
            1200: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1000: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: '.consultation__next',
        prevButton: '.consultation__prev'
    });
    var swiper = new Swiper('.articles__slider', {
        loop: true,
        slidesPerView: 4,
        slidesPerGroup: 4,
        breakpoints: {
            1200: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1000: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: '.articles__next',
        prevButton: '.articles__prev'
    });
    var swiper = new Swiper('.brands__slider', {
        loop: true,
        slidesPerView: 7,
        slidesPerGroup: 7,
        paginationClickable: true,
        breakpoints: {
            1260: {
                slidesPerView: 6,
                slidesPerGroup: 6
            },
            1000: {
                slidesPerView: 5,
                slidesPerGroup: 5
            },
            900: {
                slidesPerView: 4,
                slidesPerGroup: 4
            },
            800: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            560: {
                slidesPerView: 2,
                slidesPerGroup: 2
            }
        },
        pagination: '.brands__pagination',
        nextButton: '.brands__next',
        prevButton: '.brands__prev'
    });
    var swiper2 = new Swiper('.brands__slider2', {
        loop: true,
        slidesPerView: 7,
        slidesPerGroup: 7,
        paginationClickable: true,
        breakpoints: {
            1260: {
                slidesPerView: 6,
                slidesPerGroup: 6
            },
            1000: {
                slidesPerView: 5,
                slidesPerGroup: 5
            },
            900: {
                slidesPerView: 4,
                slidesPerGroup: 4
            },
            800: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            560: {
                slidesPerView: 2,
                slidesPerGroup: 2
            }
        },
        pagination: '.brands__pagination2',
        nextButton: '.brands__next',
        prevButton: '.brands__prev'
    });
});
$(window).on('load resize', function () {
    $('.js-popup').on('click', function (e) {
        e.preventDefault();
        $('.popup').removeClass('popup_active');
        $('body').addClass('popup-open');
        var title = $(this).find(".menu__action-text").text();
        var popupNow = '.popup_' + $(this).data('popup');
        if (title == "")
            title = $(this).text();
        $(popupNow).find("h3").text(title);
        $(popupNow).addClass('popup_active');
        if (title == "Статус ремонта")
            $(popupNow).find("input[type=hidden]").val(title);
        switch (title) {
            case 'Перезвоните мне':
                yaCounter45675441.reachGoal("call_me");
                break;
            case 'Вызвать курьера':
                yaCounter45675441.reachGoal("call_courier");
                break;
            case 'Вызвать мастера':
                yaCounter45675441.reachGoal("summon_master");
                break;
            case 'Заказать звонок':
                yaCounter45675441.reachGoal("request_call");
                break;
            case 'Статус ремонта':
                yaCounter45675441.reachGoal("repair_status");
                break;
            case 'Заказать':
                yaCounter45675441.reachGoal("request");
                break;
            default:
                yaCounter45675441.reachGoal("call_me");
        }
    });
    $('.popup__close, .popup__bg').on('click', function () {
        $('body').removeClass('popup-open');
        $('.popup').removeClass('popup_active');
    });
});
$(function () {
    if ($('.feeds2').length) {
        $('.popup_request_full').addClass('popup_active');
    }
    if ($('.feeds3').length) {
        $('.popup_request_success').addClass('popup_active');
    }
});
$(document).ready(function () {
    $('.spoiler-form-title').click(function () {
        $(this).parent().children('.spoiler-form-body').slideToggle();
        return false;
    });
});
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput-Brend');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myBrend");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
        } else {
            li[i].style.display = "none";
        }
    }
}
