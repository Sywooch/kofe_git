var typed = new Typed('.print .text', {
    strings: ["Починим за 24 часа.", "Проведём бесплатную диагностику.", "Дадим РЕАЛЬНУЮ гарантию.", "Проведём контроль качества ремонта.", "На время ремонта дадим подменную кофемашину"],
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


$("#content-grid .choose__grid").hide();
$("#content-grid .choose__grid:first").show();

$("#kofe .list__item").click(function() {
    
  $("#content-grid .choose__grid").hide();
  var activeTab = $(this).attr("rel"); 
  $("#"+activeTab).fadeIn();        
    
  $("#kofe .list__item").removeClass("active");
  $(this).addClass("active");
  
});
var titles = {
    service_4: {title: "Кофемашина не включается?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости:<br> * Восстановим компоненты<br> * Отремонтируем силовую плату<br>* Заменим двигатель и трансформатор<br> * Отремонтируем блок управления. <span>Закажите бесплатную диагностику и узнайте стоимость ремонта это не обязывает вас к ремонту</span>"},
    service_5: {title: "Кофемашина не подает воду", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости:  <br>* Прочистим систему подачи воды  <br>* Отремонтируем насос и гидросистему  <br>* Заменим уплотнительные кольца и датчик воды <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_6: {title: "Кофемашина не делает пар?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим бойлер и пароблок <br>* Очистим трубки и удалим кальциевые пробки <br>* Отремонтируем гидросистему <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_7: {title: "Кофемашина не делает пену?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим капучинатор <br>* Очистим систему подачи воды <br>* Заменим фильтр и клапан пара <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_8: {title: "Кофемашина протекает?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим бак воды <br>* Отремонтируем бойлер <br>* Заменим уплотнительные кольца <br>* Починим термоблок<span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_9: {title: "Кофемашина не греет воду?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим датчик термоблок <br>* Проведём декальцинацию <br>* Заменим блок управления <br>* Отремонтируем термоблок <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_10: {title: "Кофемашина не наливает кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Отремонтируем блок управления <br>* Очистим от кофейных масел <br>* Почистим диспансер <br>* Отремонтируем гидросистему <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_11: {title: "Кофемашина не мелет кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим жернова <br>* Отремонтируем кофемолку <br>* Заменим электродвигатель <br>* Отремонтируем плату управления <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_12: {title: "Кофемашина не делает кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Отремонтируем насос <br>* Заменим термоблок <br>* Почистим диспансер, систему подачи кофе <br>* Отремонтируем заварочный блок <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_13: {title: "Кофемашина выдает ошибку?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Почистим кофемашину <br>* Настроем и запрограммируем <br>* Заменим модуль управления <br>* Заменим датчик термоблока и пароблока <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_14: {title: "Кофемашина плохо подает кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим клапан дренажа <br>* Почистим систему подачи кофе <br>* Почистим от кофейных пасел <br>* Отремонтируем насос <br>* Отремонтируем заварочный блок   <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_17: {title: "Кофемашина подаёт холодный или горячий кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Заменим термостат <br>* Заменим температурный датчик <br>* Заменим пароблок <br>* Настроим кофемашину <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},
    service_18: {title: "Кофемашина подаёт слабый и невкусный кофе?", subtitle: "Проведём БЕСПЛАТНУЮ ДИАГНОСТИКУ и при необходимости: <br>* Почистим кофемашину (с разбором) <br>* Отремонтируем заварочный механизм <br>* Заменим трубки <br>* Заменим и установим новый фильтр <span>Закажите бесплатную диагностику и узнайте стоимость ремонта. Это не обязывает вас к ремонту</span>"},

    brend_13292: {title: "Узнайте стоимость ремонта кофемашины Delonghi", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13332: {title: "Узнайте стоимость ремонта кофемашины Saeco", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13238: {title: "Узнайте стоимость ремонта кофемашины Philips", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13202: {title: "Узнайте стоимость ремонта кофемашины Jura", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13182: {title: "Узнайте стоимость ремонта кофемашины Bosch", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13368: {title: "Узнайте стоимость ремонта кофемашины Bork", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13169: {title: "Узнайте стоимость ремонта кофемашины Krups", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13231: {title: "Узнайте стоимость ремонта кофемашины Melitta", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13650: {title: "Узнайте стоимость ремонта кофемашины Miele", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13682: {title: "Узнайте стоимость ремонта кофемашины Nivona", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13746: {title: "Узнайте стоимость ремонта кофемашины Schaerer", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13777: {title: "Узнайте стоимость ремонта кофемашины Siemens", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13499: {title: "Узнайте стоимость ремонта кофемашины Faema", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13527: {title: "Узнайте стоимость ремонта кофемашины Gaggia", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13868: {title: "Узнайте стоимость ремонта кофемашины WMF", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13687: {title: "Узнайте стоимость ремонта кофемашины Promac", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13607: {title: "Узнайте стоимость ремонта кофемашины La-Cimbali", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13670: {title: "Узнайте стоимость ремонта кофемашины Nuova Simonelli", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13694: {title: "Узнайте стоимость ремонта кофемашины Rancilio", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
    brend_13537: {title: "Узнайте стоимость ремонта кофемашины Franke", subtitle: "Закажите бесплатную диагностику прямо сейчас!"},
};
$('#neispravnost .item').click(function () {
    var serviceId = $(this).data("id");
    var title = "";
    var subtitle = "";
    if (typeof titles["service_" + serviceId] !== 'undefined') {
       title = titles["service_" + serviceId].title;
       subtitle = titles["service_" + serviceId].subtitle;
    } else {
        title = $(this).find(".titlecopy").html();
        subtitle = "xsvf dsfdfg dfg";
    }
    $("#newModal .form__title").html(title);
    $("#newModal .form__subtitle").html(subtitle);
});
$('#photo .item').click(function () {
    var serviceId = $(this).data("id");
    var title = "";
    var subtitle = "";
    if (typeof titles["brend_" + serviceId] !== 'undefined') {
       title = titles["brend_" + serviceId].title;
       subtitle = titles["brend_" + serviceId].subtitle;
    } else {
        title = $(this).find(".titlecopy").html();
        subtitle = "xsvf dsfdfg dfg";
    }
    $("#newModal .form__title").html(title);
    $("#newModal .form__subtitle").html(subtitle);
});