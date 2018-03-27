
$(window).on('load', function () {
    $('body').addClass('page_ready');
});

$(function () {
    $('.header__burger').on('click', function () {
        $('body').toggleClass('page_open');
        if ($('body').hasClass('page_open')) {
            $('.head-p').height(69);
        } else {
            $('.head-p').height(0);
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
    $('.menyu-tab').on('mouseover', function () {
        $(this).addClass('menu__tab_active').siblings().removeClass('menu__tab_active');
        $('.menyu_sec[data-menu-section=' + $(this).data('menu-tab') + ']').addClass('menu__section_active').siblings().removeClass('menu__section_active');
        $('.menyu').addClass('menu_active');
        var headerHeight = $('.menyu_cont').height() + $('.menyu_taby').height();
        if ($(window).width() > 599) {
            $('.head-p').height(headerHeight);
        } else {
            $('.head-p').height(headerHeight + 49);
        }
    });
    $('.menyu').on('mouseleave', function () {
        closeMenu();
    });
    function closeMenu() {
        $('.menyu-tab').removeClass('menu__tab_active');
        $('.menyu_sec').removeClass('menu__section_active');
        $('.menyu').removeClass('menu_active');
        var headerHeight = $('.menyu_taby').height();
        if ($(window).width() > 599) {
            $('.head-p').height(headerHeight);
        } else {
            $('.head-p').height(headerHeight + 49);
        }
    }
    $(window).click(function () {
        $('.nav__item_location').removeClass('nav__item_active');
    });
    $('.nav__item_location').click(function (e) {
        e.stopImmediatePropagation();
    });
    $('.navigation_link').click(function (e) {
        $('.Menyu-itm').removeClass('menu__item_active');
        var navNow = $(this).closest('.navigation_i');
        if (navNow.children('.navigation_sub').length > 0) {
            e.preventDefault();
            navNow.toggleClass('nav__item_active').siblings().removeClass('nav__item_active');
        }
    });
    $('.navigation_sub_link').click(function (e) {
        e.preventDefault();
        var subNavNow = $(this);
        $.cookie('city', subNavNow.text(), {expires: 365, path: '/'});
        $('.nav__item_location .navigation_label').text(subNavNow.text());
        subNavNow.closest('.navigation_i').removeClass('nav__item_active');
        $.cookie('cityNow', subNavNow.parent().data('city'), {expires: 365, path: '/'});
        $('.cnct_ph[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
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
        $('.nav__item_location .navigation_label').text($.cookie('city'));
    }
    if ($.cookie('cityNow') != '') {
        $('.cnct_ph[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
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
    $('.Brkg-lst-acc .Brkg-name').on('click', function (e) {
        e.preventDefault();
        var currentBreaking = $(this).parent();
        var currentBreakingData = currentBreaking.data('breaking');
        //console.log(currentBreakingData);
        if (currentBreaking.hasClass('breaking__item_active')) {
            currentBreaking.removeClass('breaking__item_active');
            $('.Brkg-point[data-breaking-point="' + currentBreakingData + '"]').removeClass('breaking__point_active');
        } else {
            currentBreaking.addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
            $('.Brkg-point[data-breaking-point="' + currentBreakingData + '"]').addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
        }
    });
    $('.Brkg-point').on('click', function (e) {
        e.preventDefault();
        var currentBreaking = $(this);
        var currentBreakingData = currentBreaking.data('breaking-point');
        if (currentBreaking.hasClass('breaking__point_active')) {
            currentBreaking.removeClass('breaking__point_active');
            $('.Brkg-it[data-breaking="' + currentBreakingData + '"]').removeClass('breaking__item_active');
        } else {
            currentBreaking.addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
            $('.Brkg-it[data-breaking="' + currentBreakingData + '"]').addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
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
    $('.popup_js').on('click', function (e) {
        e.preventDefault();
        $('.popup').removeClass('popup_active');
        $('body').addClass('popup-open');
        var title = $(this).find(".Menyu-harakat-txt").text();
        var popupNow = '.popup_' + $(this).data('popup');
        if (title == "")
            title = $(this).text();
        $(popupNow).find("h3").text(title);
        $(popupNow).addClass('popup_active');
        if (title == "Статус ремонта")
            $(popupNow).find("input[type=hidden]").val(title);
        if (typeof yaCounter47134782 !== 'undefined') {
            switch (title) {
                case 'Перезвоните мне':
                    yaCounter47134782.reachGoal("call_me");
                    break;
                case 'Вызвать курьера':
                    yaCounter47134782.reachGoal("call_courier");
                    break;
                case 'Вызвать мастера':
                    yaCounter47134782.reachGoal("summon_master");
                    break;
                case 'Заказать звонок':
                    yaCounter47134782.reachGoal("request_call");
                    break;
                case 'Статус ремонта':
                    yaCounter47134782.reachGoal("repair_status");
                    break;
                case 'Заказать':
                    yaCounter47134782.reachGoal("request");
                    break;
                default:
                    yaCounter47134782.reachGoal("call_me");
            }
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
    $('.show-model').click(function () {
        $('.search-brends').removeClass('hide');
        $(this).addClass('hide');
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


$(function () {
            var swiper2 = new Swiper('.garantya__slider', {
                loop: true,
                slidesPerView: 6,
                slidesPerGroup: 6,
                paginationClickable: true,
                breakpoints: {
                    1260: {
                        slidesPerView: 5,
                        slidesPerGroup: 5
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
                pagination: '.garantya__pagination',
                nextButton: '.garantya__next',
                prevButton: '.garantya__prev'
            });
            $(".fancybox-button").fancybox({
                prevEffect: 'none',
                nextEffect: 'none',
                closeBtn: false,
                helpers: {
                    title: {type: 'inside'},
                    buttons: {}
                }
            });
        });
        $(function () {
            var swiper2 = new Swiper('.foto__slider', {
                loop: true,
                slidesPerView: 6,
                slidesPerGroup: 6,
                paginationClickable: true,
                breakpoints: {
                    1260: {
                        slidesPerView: 5,
                        slidesPerGroup: 5
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
                pagination: '.foto__pagination',
                nextButton: '.foto__next',
                prevButton: '.foto__prev'
            });
            $(".fancybox-button").fancybox({
                prevEffect: 'none',
                nextEffect: 'none',
                closeBtn: false,
                helpers: {
                    title: {type: 'inside'},
                    buttons: {}
                }
            });
        });
        $(function () {
            var swiper2 = new Swiper('.services__slider', {
                loop: true,
                slidesPerView: 6,
                slidesPerGroup: 6,
                margin: 10,
                paginationClickable: true,
                breakpoints: {
                    1600: {
                        slidesPerView: 5,
                        slidesPerGroup: 5
                    },
                    1400: {
                        slidesPerView: 4,
                        slidesPerGroup: 4
                    },
                    1100: {
                        slidesPerView: 3,
                        slidesPerGroup: 3
                    },
                    970: {
                        slidesPerView: 2,
                        slidesPerGroup: 2
                    },
                    800: {
                        slidesPerView: 2,
                        slidesPerGroup: 2
                    },
                    560: {
                        slidesPerView: 1,
                        slidesPerGroup: 1
                    }
                },
                pagination: '.garantya__pagination',
                nextButton: '.services-slider_next',
                prevButton: '.services-slider_prev'
            });
            $(".fancybox-button").fancybox({
                prevEffect: 'none',
                nextEffect: 'none',
                closeBtn: false,
                helpers: {
                    title: {type: 'inside'},
                    buttons: {}
                }
            });
        });
        $(function () {
            var swiper2 = new Swiper('.models__slider', {
                loop: true,
                slidesPerView: 6,
                slidesPerGroup: 6,
                paginationClickable: true,
                breakpoints: {
                    1260: {
                        slidesPerView: 5,
                        slidesPerGroup: 5
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
                pagination: '.models__pagination',
                nextButton: '.models__next',
                prevButton: '.models__prev'
            });
            $(".fancybox-button").fancybox({
                prevEffect: 'none',
                nextEffect: 'none',
                closeBtn: false,
                helpers: {
                    title: {type: 'inside'},
                    buttons: {}
                }
            });
        });