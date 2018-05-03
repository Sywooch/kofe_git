var typed = new Typed('.print .text', {
    strings: ["Починим за 24 часа.", "Проведём бесплатную диагностику.", "Дадим РЕАЛЬНУЮ гарантию.", "Проведём контроль качества ремонта.", "РЕАЛЬНО качественный ремонт кофемашин в Москве"],
    typeSpeed: 100,
    backSpeed: 70,
    loop: true,
});
$(document).ready(function () {

    $(".header__menu, .footer__menu .anchor, .up-wrap").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
                top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });
});
$(document).scroll(function () {
    var headerHeight = $('.header').height();
    var top = $(document).scrollTop();
    if (top > headerHeight) {
        $('.up').addClass('active');
    } else {
        $('.up').removeClass('active');
    }
});
$('.humburger__wrap').on('click', function () {
    $(this).toggleClass('active');
    $('.header__menu').toggleClass('active');
});
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
    dots: true
});
(function light() {
    $('.illustrate .light').toggle();
    setTimeout(light, 7000);
}());
$('.choose .tabs__item').on('click', function () {
    $('.choose .tabs__item').removeClass('active');
    $(this).addClass('active');
    var val = $(this).attr('data-val');
    $('.choose .lists .list').hide();
    $('.choose .choose__grids .choose__grid').hide();
    $('.choose .choose__forms .form').hide();
    $('.choose .lists .list#' + val).fadeIn(600);
    $('.choose .choose__grids .choose__grid#' + val + '1').fadeIn(600);
    $('.choose .choose__forms .form#' + val + '2').fadeIn(600);
});
$('.choose .lists .list#iphone .list__item').on('click', function () {
    $('.choose .choose__grid#iphone1 .item').removeClass('active');
    $(".choose__forms .form#iphone2 .price__total").html('0 руб.');
    $(".choose__forms .form#iphone2 .form__subtitle span").html('0 минут ');
    $("select#phone-repair").val('').trigger("change");
    $('.choose .choose__grid#iphone1 .item').removeClass('active');
    $('.choose .lists .list#iphone .list__item').removeClass('active');
    $(this).addClass('active');
    var attr = $(this).data('attr');
    var value = $(this).attr('data-val');
    $("select#phone-model").val(value).trigger("change");
    for (key in gadgets) {
        for (key1 in gadgets[key]) {
            if (key1 == attr) {
                for (key2 in gadgets[key][key1]) {
                    $('.choose__grid#iphone1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
                }
            }
        }
    }
});
$('.choose .lists .list#ipad .list__item').on('click', function () {
    $('.choose .lists .list#ipad .list__item').removeClass('active');
    $(this).addClass('active');
    var attr = $(this).data('attr');
    var value = $(this).attr('data-val');
    $("select#ipad-model").val(value).trigger("change");
    for (key in gadgets) {
        for (key1 in gadgets[key]) {
            if (key1 == attr) {
                for (key2 in gadgets[key][key1]) {
                    $('.choose__grid#ipad1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
                }
            }
        }
    }
});
$('.choose .lists .list#ipad .list__item').on('click', function () {
    $('.choose .lists .list#ipad .list__item').removeClass('active');
    $(this).addClass('active');
    var value = $(this).attr('data-val');
    $("select#ipad-model").val(value).trigger("change");
    $('.choose .choose__grid#ipad1 .item').removeClass('active');
    $(".choose__forms .form#ipad2 .price__total").html('0 руб.');
    $(".choose__forms .form#ipad2 .form__subtitle span").html('0 минут ');
    $("select#ipad-repair").val('').trigger("change");
    $('.choose .choose__grid#ipad1 .item').removeClass('active');
});
$('.choose .choose__grid#iphone1 .item__wrap').on('click', function () {
    $('.choose .choose__grid#iphone1 .item').removeClass('active');
    $(this).parent().addClass('active');
    var title = $(this).attr('data-title');
    var time = $(this).attr('data-time');
    var price = $(this).find('.price').html();
    $("select#phone-repair").val(title).trigger("change");
    $(".choose__forms .form#iphone2 .price__total").html(price);
    $(".choose__forms .form#iphone2 .input-price").val(price);
    $(".choose__forms .form#iphone2 .form__subtitle span").html(time + ' ');
});
$('.choose .choose__grid#ipad1 .item__wrap').on('click', function () {
    $('.choose .choose__grid#ipad1 .item').removeClass('active');
    $(this).parent().addClass('active');
    var title = $(this).attr('data-title');
    var time = $(this).attr('data-time');
    var price = $(this).find('.price').html();
    $("select#ipad-repair").val(title).trigger("change");
    $(".choose__forms .form#ipad2 .price__total").html(price);
    $(".choose__forms .form#ipad2 .input-price").val(price);
    $(".choose__forms .form#ipad2 .form__subtitle span").html(time + ' ');
});
$('select').select2({
    placeholder: function () {
        $(this).data('placeholder');
    },
    minimumResultsForSearch: -1,
    width: '100%',
});
$(window).ready(function () {
    $("select#phone-model").val('iPhone X').trigger("change");
    $("select#ipad-model").val('iPad Pro 12.9').trigger("change");
});
$("select#phone-model").on("select2:select", function (e) {
    $('.choose .choose__grid#iphone1 .item').removeClass('active');
    $(".choose__forms .form#iphone2 .price__total").html('0 руб.');
    $(".choose__forms .form#iphone2 .form__subtitle span").html('0 минут ');
    $("select#phone-repair").val('').trigger("change");
    $('.choose .choose__grid#iphone1 .item').removeClass('active');
    $('.choose .lists .list#iphone .list__item').removeClass('active');
    var val = $(e.currentTarget).find("option:selected").val();
    $('.choose .lists .list#iphone .list__item[data-val="' + val + '"]').addClass('active');
    for (key in gadgets) {
        for (key1 in gadgets[key]) {
            var text = phoneNr(val);
            console.log(text);
            if (key1 == text) {
                for (key2 in gadgets[key][key1]) {
                    $('.choose__grid#iphone1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
                }
            }
        }
    }
});
$("select#ipad-model").on("select2:select", function (e) {
    $('.choose .choose__grid#ipad1 .item').removeClass('active');
    $(".choose__forms .form#ipad2 .price__total").html('0 руб.');
    $(".choose__forms .form#ipad2 .form__subtitle span").html('0 минут ');
    $("select#phone-repair").val('').trigger("change");
    $('.choose .choose__grid#ipad1 .item').removeClass('active');
    $('.choose .lists .list#ipad .list__item').removeClass('active');
    var val = $(e.currentTarget).find("option:selected").val();
    $('.choose .lists .list#ipad .list__item[data-val="' + val + '"]').addClass('active');
    for (key in gadgets) {
        for (key1 in gadgets[key]) {
            var text = ipadNr(val);
            console.log(text);
            if (key1 == text) {
                for (key2 in gadgets[key][key1]) {
                    $('.choose__grid#ipad1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
                }
            }
        }
    }
});
$("select#phone-repair").on("select2:select", function (e) {
    var val = $(e.currentTarget).find("option:selected").val();
    var price = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"] .price').html();
    var time = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').data('time');
    $('.choose__grid#iphone1 .item').removeClass('active');
    $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').parent().addClass('active');
    $(".choose__forms .form#iphone2 .price__total").html(price);
    $(".choose__forms .form#iphone2 .input-price").val(price);
    $(".choose__forms .form#iphone2 .form__subtitle span").html(time + ' ');
});
$("select#ipad-repair").on("select2:select", function (e) {
    var val = $(e.currentTarget).find("option:selected").val();
    var price = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"] .price').html();
    var time = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').data('time');
    $('.choose__grid#iphone1 .item').removeClass('active');
    $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').parent().addClass('active');
    $(".choose__forms .form#iphone2 .price__total").html(price);
    $(".choose__forms .form#ipad2 .input-price").val(price);
    $(".choose__forms .form#iphone2 .form__subtitle span").html(time + ' ');
});
$(document).ready(function () {
    $(".select2-results__options, .post .body").mCustomScrollbar();
});
$('select').on('select2:open', function (e) {
    $('.select2-results__options').mCustomScrollbar('destroy');
    setTimeout(function () {
        $('.select2-results__options').mCustomScrollbar();
    }, 0);
});
$('.how__tabs .tab').on('click', function () {
    $('.how__tabs .tab').removeClass('active');
    $(this).addClass('active');
    $('.how__blocks .block').hide();
    var val = $(this).data('tab');
    $('.how__blocks .block#' + val).fadeIn(600);
});
jQuery(document).ready(function () {
    jQuery('.cashback__img').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight delay',
        offset: 100
    });
});
$('.clients .tabs__item').on('click', function () {
    var val = $(this).data('tab');
    $('.clients .tabs__item').removeClass('active');
    $(this).addClass('active');
    $('.clients .block').hide();
    $('.clients .block#' + val).fadeIn(600);
});
$('.faq__grid .item__wrap').on('click', function () {
    $(this).parent().toggleClass('active');
    $(this).find('.item__text').slideToggle(600);
});
(function light1() {
    $('.news__form .form__field--input > span').toggle();
    setTimeout(light1, 7000);
}());
$('.form__input--white').on('keyup', function () {
    $(this).removeClass('error');
});
$('.form__input--white').focusin(function () {
    $('.news__form .form__field--input > span').css('opacity', '0');
});
$('.form__input--white').focusout(function () {
    if ($(this).val() == '') {
        $('.news__form .form__field--input > span').css('opacity', '1');
    }
});
var stock = 3;
shownews = 'Ещё статьи';
$(".news__more .more-btn").html(shownews);
$(".news__grid .item:not(:lt(" + stock + "))").hide();

$(".news__more .more-btn").click(function (e) {
    e.preventDefault();
    var items = $(".news__grid .item:hidden").length;
    if (items > 3) {
        $(".news__grid .item:hidden:lt(" + stock + ")").fadeIn('slow');
    } else if (items <= 3) {
        $(".news__grid .item:hidden:lt(" + stock + ")").fadeIn('slow');
        $(".news__more .more-btn").hide();
    }
});
window.onload = function () {
    var parallaxBox = document.getElementById('top');
    var parBoxLeft = document.getElementById('parBox').offsetLeft,
            parBoxTop = document.getElementById('parBox').offsetTop;
    var winWidth = $(window).width();
    if (winWidth > 991) {
        parallaxBox.onmousemove = function (event) {
            event = event || window.event;
            var x = event.clientX - parallaxBox.offsetLeft,
                    y = event.clientY - parallaxBox.offsetTop;

            mouseParallax('parBox', parBoxLeft, parBoxTop, x, y, 20);
        }
        $('.gallery .thumbnails .item').hover(function () {
            var val = $(this).index();
            $('.gallery .big a').hide();
            $('.gallery .big a').eq(val).show();
        });
    } else {
        $('.gallery .thumbnails .item').click(function () {
            var val = $(this).index();
            $('.gallery .big a').hide();
            $('.gallery .big a').eq(val).show();
        });
    }
}
function mouseParallax(id, left, top, mouseX, mouseY, speed) {
    var obj = document.getElementById(id);
    var parentObj = obj.parentNode,
            containerWidth = parseInt(parentObj.offsetWidth),
            containerHeight = parseInt(parentObj.offsetHeight);
    obj.style.left = left - (((mouseX - (parseInt(obj.offsetWidth) / 2 + left)) / containerWidth) * speed) + 'px';
    obj.style.top = top - (((mouseY - (parseInt(obj.offsetHeight) / 2 + top)) / containerHeight) * 10) + 'px';
}
$('input[type="tel"]').on("keyup", function () {
    var amount = $(this).val().length;
    if (amount > 17) {
        $(this).css('border', '2px solid #d80101');
    } else if (amount == 17) {
        $(this).css('border', '2px solid #0cdc43');
    } else {
        $(this).css('border', '0px solid #0cdc43');
    }
});
var windowWidth = $(window).width();
$(document).resize(function () {
    windowWidth = $(window).width();
});
$('.choose__grid .item__wrap').on('click', function () {
    var elementClick = $(this).parents('.choose__grid').attr("id");
    var actionEl;
    if (elementClick == 'iphone1') {
        actionEl = '#iphone2';
    } else if (elementClick == 'ipad1') {
        actionEl = '#ipad2';
    }
    var destination = $(actionEl).offset().top;

    if (windowWidth < 992) {
        $('body,html').animate({scrollTop: destination}, 1100);
    }
});