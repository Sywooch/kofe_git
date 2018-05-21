$(document).ready(function () {
    $(window).scroll(function () {
        if ($("body").hasClass("popup-form-active")) {
            $('.Forma-ong').addClass('scrol-popup');
        } else {
            if ($(this).scrollTop() > 400) {
                $('.Forma-ong').addClass('scrol-popup');
            } else {
                $('.Forma-ong').removeClass('scrol-popup');
            }
        }
    });
    $('.price .knopkacha, .pricelist .knopkacha').click( function(){
        $('body').addClass('popup-form-active');    
    });
    $('.Forma-yop').click( function(){
        $('body').removeClass('popup-form-active');    
    });
    var popups = [
    {visitorName: 'Ефремова Эллада', serviceName: 'Чистка от кофейных масел'},
    {visitorName: 'Матвеев Владимир', serviceName: 'Ремонт кофемолки'},
    {visitorName: 'Ефимов Георгий', serviceName: 'Декофенация'},
    {visitorName: 'Никонова Лида', serviceName: 'Замена уплотнительного кольца группы'},
    {visitorName: 'Виноградова Анна', serviceName: 'Ремонт насоса'},
    {visitorName: 'Агафонова Нигина', serviceName: 'Комплексная профилактика'},
    {visitorName: 'Жукова Катерина', serviceName: 'Декофенация'},
    {visitorName: 'Миронова Ольга', serviceName: 'Ремонт насоса'},
    {visitorName: 'Суханов Вениамин', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Цветкова Настя', serviceName: 'Ремонт капучинатора'},
    {visitorName: 'Гаврилов Альберт', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Кириллова Людмила', serviceName: 'Декофенация'},
    {visitorName: 'Зуев Георгий', serviceName: 'Забор кофемашины в сервис'},
    {visitorName: 'Сафонов Денис', serviceName: 'Чистка от кофейных масел'},
    {visitorName: 'Колобов Николая', serviceName: 'Чистка от кофейных масел'},
    {visitorName: 'Мясникова Элла', serviceName: 'Доставка кофемашины'},
    {visitorName: 'Лукина Василиса', serviceName: 'Забор кофемашины в сервис'},
    {visitorName: 'Мартынова Анжела', serviceName: 'Декальцинация'},
    {visitorName: 'Комиссарова Алеся', serviceName: 'Комплексная профилактика'},
    {visitorName: 'Корнилов Артур', serviceName: 'Диагностика'},
    {visitorName: 'Цветков Аркадий', serviceName: 'Замена микровыключателей'},
    {visitorName: 'Горбунов Константи', serviceName: 'Ремонт кофемолки'},
    {visitorName: 'Рожков Владимир', serviceName: 'Комплексная профилактика'},
    {visitorName: 'Мухин Толя', serviceName: 'Ремонт капучинатора'},
    {visitorName: 'Романов Андрей', serviceName: 'Забор кофемашины в сервис'},
    {visitorName: 'Игнатьев Мартын', serviceName: 'Замена тена'},
    {visitorName: 'Громов Тимур', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Носова Аня', serviceName: 'Ремонт насоса'},
    {visitorName: 'Титов Олег', serviceName: 'Замена жерновов'},
    {visitorName: 'Терентьева Ольга', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Гущина Динара', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Лукьянов Давид', serviceName: 'Доставка кофемашины'},
    {visitorName: 'Князева Света', serviceName: 'Замена тена'},
    {visitorName: 'Гордеева Станислава', serviceName: 'Ремонт кофемолки'},
    {visitorName: 'Афанасьева Кристина', serviceName: 'Замена жерновов'},
    {visitorName: 'Абрамова Ирина', serviceName: 'Замена микровыключателей'},
    {visitorName: 'Доронин Василий', serviceName: 'Ремонт гидросистемы'},
    {visitorName: 'Фролов Генадий', serviceName: 'Ремонт насоса'},
    {visitorName: 'Павлов Якуб', serviceName: 'Замена тена'},
    {visitorName: 'Тимофеева Влада', serviceName: 'Ремонт капучинатора'},
    {visitorName: 'Кононов Радик', serviceName: 'Замена жерновов'},
    {visitorName: 'Баранова Алия', serviceName: 'Замена уплотнительного кольца группы'},
    {visitorName: 'Коновалов Андрей', serviceName: 'Декальцинация'},
    {visitorName: 'Исаков Генадий', serviceName: 'Замена тена'},
    {visitorName: 'Федосеев Евгений', serviceName: 'Замена микровыключателей'},
    {visitorName: 'Фролов Константи', serviceName: 'Замена модуля управления'},
    {visitorName: 'Белоусов Женя', serviceName: 'Ремонт кофемолки'},
    {visitorName: 'Дьячков Владимир', serviceName: 'Комплексная профилактика'},
    {visitorName: 'Носков Радион', serviceName: 'Доставка кофемашины'},
    {visitorName: 'Кулаков Михаил', serviceName: 'Ремонт насоса'}
    ];
    var userRandServicesCount = localStorage.getItem("userRandServicesCount");
    var d = new Date();
    var hour = d.getHours();
    if (!userRandServicesCount || userRandServicesCount === null || hour == 24) {
        localStorage.setItem("userRandServicesCount", randomIntFromInterval(12, 18));
        userRandServicesCount = localStorage.getItem("userRandServicesCount");
    }    
    var minimum = 3;
    var timeOut = 10 * 1000;
    var fadeInTimeOut = 15 * 1000;
    var count = popups.length - 1;
    $("#services-count").text((parseInt(userRandServicesCount) < minimum ? minimum : userRandServicesCount));
    setTimeout(function onTimeout() {
        userRandServicesCount = localStorage.getItem("userRandServicesCount");
        if (parseInt(userRandServicesCount) >= minimum) {
            localStorage.setItem("userRandServicesCount", parseInt(userRandServicesCount) - 1);
            var it = localStorage.getItem("userRandServicesCount");
            if (parseInt(it) >= minimum) {
                $("#visitor-name").text(popups[count].visitorName + " оставил(а) заявку на услугу ");
                $("#service-name").text("'" + popups[count].serviceName + "'");
                $("#services-count").text(it);
                $('.aksiya-popupic').fadeIn('slow').delay(fadeInTimeOut).fadeOut('slow', function () {
                    if (count > 0) {
                        count--;
                        setTimeout(onTimeout, timeOut);
                    }
                });
            }
        }
    }, timeOut);
    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    var $iphone = $('#my-modelas');
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

    var $iphone = $('#my-nav');
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
        scrollBy: 1,
        activatePageOn: 'click',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
    });



    $('.main > .right').sticky({topSpacing: 20, bottomSpacing: 500});

    if ($('.gl-contact123').length == 1) {
        gl_contact = $('.gl-contact');
        gl_contact_init_top = gl_contact.offset().top;
        gl_contact_init_height = gl_contact.height();
        gl_contact_padding = 20;
        gl_footer = $('.gl-footer');
        gl_footer_init_height = gl_footer.height();
        console.log(gl_footer_init_height);
        $(window).on('resize scroll', function (event) {
            if ($(window).width() >= 1000 && ($(window).height() - gl_contact_init_height - gl_contact_padding) > 0) {

                gl_contact_current_top = gl_contact.offset().top;
                if ($(window).scrollTop() > gl_contact_init_top) {
                    gl_contact.stop().animate({
                        top: '+=' + ($(window).scrollTop() - gl_contact_current_top + gl_contact_padding),
                    }, 'slow', function () {
                    });
                } else {
                    gl_contact.stop().animate({
                        top: 0,
                    }, 'slow', function () {
                    });
                }
            } else {
                gl_contact.stop();
                gl_contact.css({'top': 0});
            }
        });
    }

    if ($('.bl-text .toggle').length == 1) {
        $('.bl-text .fixed').after('<div class="expand"><a>Читать дальше</a></div>');
        $('.bl-text .expand').click(function (event) {
            $('.bl-text .toggle').slideToggle('slow', function () {
                if ($('.bl-text .toggle').is(':visible')) {
                    $('.bl-text .expand a').text('Свернуть описание');
                } else {
                    $('.bl-text .expand a').text('Читать дальше');
                }
            });
        });
    }



    if ($('#job-form').length) {

        $('#job-form input[type=submit]').on('click', function (e) {
            e.preventDefault();
            var form = $('#job-form form');
            var phone_ok = validate('#phone', form);
            if (phone_ok === true)
            {
                $.ajax({
                    type: "POST",
                    url: "/job-form-handler.php",
                    data: form.serialize(),
                    beforeSend: function () {
                        $('#job-form input[type=submit]').prop('disabled', true); // disable button
                    },
                    success: function (msg) {
                        $('#job-form').find('.text').html(msg);
                        $('#job-form input[type=submit]').prop('disabled', false); // disable button
                        form.trigger('reset');
                    },
                    error: function (request, status, error) {
                        console.log(request.responseText);
                    }
                });
            }
        });

        function validate(field, form) {
            if (!$(field, form).val()) {
                $(field, form).css('border', '1px solid red');
                return false;
            } else {
                $(field, form).css('border', '1px solid green');
                return true;
            }
        }

    }

    $(".navigation_open").click(function () {
        $(".gl-header .navigation").slideToggle("fast");
    });
    $(".prices .knopkacha a").click(function () {
        $(".pricelist").addClass("active");
        $(this).parent(".knopkacha").hide();
        return false;
    });
    $(".opan-all-models").click(function () {
        $(".model-brand").addClass("active");
        $(".button-section").hide();
        return false;
    });
    $('.Owl-carousel.Brend-c').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 3,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            600: {
                items: 4,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            1000: {
                items: 10
            }
        }
    });

    $('.Owl-carousel.model-c').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            600: {
                items: 4,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            1000: {
                items: 6
            }
        }
    });

    $('.Owl-carousel.metro-c').owlCarousel({
        loop: true,
        margin: 25,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            600: {
                items: 2,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            1000: {
                items: 3
            }
        }
    });

    $('.Owl-carousel.coment-c').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            600: {
                items: 1,
                autoHeight: true,
                mouseDrag: false,
                touchDrag: true
            },
            1000: {
                items: 1
            }
        }
    });

    $(".brend-tabs .tab_content").hide();
    $(".brend-tabs .tab_content:first").show();

    $("div.tab-b").click(function() {
        
      $(".brend-tabs .tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();        
        
      $("div.tab-b").removeClass("active");
      $(this).addClass("active");
      
    });


//Сокрытие seo ссылок



if ($('.seo-link.link-toggle').length) {
    $('.seo-link.link-toggle').find('.seo-link__title').click(function () {
        var block = $(this).closest('.seo-link');

        if (block.hasClass('opened')) {
            block.removeClass('opened');
        } else {
            block.addClass('opened');
            $('.seo-link__btn').css('display', 'block');
        }
    });
}

    if ($('.seo-link__lists').length) {
        var $_items = 44;

        $('.seo-link__lists').each(function () {
            if ($('.seo-link__list', $(this)).length >= $_items) {
                $('.seo-link__list', $(this)).slice($_items, $('.seo-link__list').length).hide();

            }
        });

        $('.seo-link__btn').click(function () {
            $(this).hide();
            $(this).parent().find('.seo-link__list').show();
        });

    }
});