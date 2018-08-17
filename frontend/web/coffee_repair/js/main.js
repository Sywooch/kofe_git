$(document).ready(function () {
    $(".zayavka").submit(function () {
        var form = $(this);
        var error = false;
        form.find('.phone').each(function () {
            if ($(this).val() == '') {
                $('.phone').addClass("form_red");
                error = true;
            }
        });
        form.find('.name').each(function () {
            if ($(this).val() == '') {
                $('.name').addClass("form_red");
                error = true;
            }
        });
        $('input').click(function () {
            $(this).removeClass('form_red')
        });
        if (!error) {
            return true;
        }
        return false;
    });
    $('.lightSlider').owlCarousel({
        loop: false,
        margin: 100,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 2
            }
        }
    });
    $('.slider').owlCarousel({
        loop: false,
        margin: 23,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('.slider2').owlCarousel({
        loop: false,
        margin: 40,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });
    $('.menu_link').click(function () {
        $(this).toggleClass('open');
        $('.menu').slideToggle();
    });
    $("a.inline").fancybox({
        'hideOnContentClick': true,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
    $('.zvonok').fancybox({
        src: '#zvonok',
        type: 'inline'
    });
    $('.content5 .video > span').click(function () {
        $(this).hide();
        $('.content5 .video > img').hide();
        $('.content5 .video > iframe').show();
    });
    $(document).on('click', '.content5 .video > span', function () {
        var $video = $(this).next('iframe'),
                src = $video.attr('src');
        $video.show();
        $(this).addClass('watch');
        $('.content5 .video > img').hide();
        $video.attr('src', src + '?autoplay=1');
    });
});
$(document).on('click', '.js-show-more', function () {
    var list = $(this).siblings('.js-list'),
            min = list.height(),
            max = list.height("auto").height();
    $(this).hide();
    list.height(min).animate({
        height: max
    }, 300)
});
setInterval(function () {
    $('.on_line > span.line i').animate({
        opacity: 0
    }, 500);
    setTimeout(function () {
        $('.on_line > span.line i').animate({
            opacity: 1
        }, 500);
    }, 500);
}, 1800);
$(document).on('af_complete', function (event, response) {
    if (response.success) {
        $.fancybox.close();
        $('.overlay').click();
    }
});
if ($('.series_select').length > 0) {
    $('.series_select').click(function () {
        $('.series_select').removeClass('active');
        $(this).addClass('active');
        var request = {
            action: 'getModels',
            series: $(this).data('series'),
            parent: $(this).parents('.content8').data('parent')
        };
        $.post(document.location.href, request, function (data) {
            $('.result .models').html(data);
        });
    });
    $('#model_input').keyup(function () {
        if ($(this).val()) {
            $('.series_select').removeClass('active');
            var request = {
                action: 'findModels',
                q: $(this).val(),
                parent: $(this).parents('.content8').data('parent')
            };
            $.post(document.location.href, request, function (data) {
                $('.result .models').html(data);
            });
        }
    });
}

function hideTitles() {
    $('.parent-title').css({
        opacity: 0
    });
    $('.content8 .item').css({
        'margin-bottom': '45px'
    });
    $('.parent-title').each(function () {
        $('.item.' + $(this).data('pid')).first().find('h3').css({
            opacity: 1
        });
        if ($('.item.' + $(this).data('pid')).length > 2) {
            $('.item.' + $(this).data('pid')).last().next().addClass('clr');
        }
    });
}
if ($('#all_models').length > 0) {
    hideTitles();
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}
function setCookies(time) {
    setCookie("time", time);
    setCookie("masters", randomIntFromInterval(1, 6));
    setCookie("mastersgo", randomIntFromInterval(1, 10));
    setCookie("linya", randomIntFromInterval(2, 5));
}
function setValues() {
    $(".masters").text(getCookie("masters"));
    $(".mastersgo").text(getCookie("mastersgo"));
    $(".linya").text(getCookie("linya"));
}
function setRandom() {
    var time;
    if (getCookie("time") == "") {
        time = new Date().toISOString();
        setCookies(time)
    } else {
        time = getCookie("time");
    }
    if (diff_hours(new Date(), new Date(time)) > 3) {
        time = new Date().toISOString();
        setCookies(time)
    }
    setValues();
}
function diff_hours(dt2, dt1) {
    var diff = (dt2.getTime() - dt1.getTime()) / 1000;
    diff /= (60);
    return Math.abs(Math.round(diff));
}
setRandom();
window.setInterval(function () {
    setRandom()
}, 3000);