$(document).ready(function () {


    // Мобильное меню

    $('.header__mobile-button').click(function () {
        $('.page-header__navigation').slideToggle();
        $('.mobile-button__item:first-child').toggleClass('mobile-button__item--first');
        $('.mobile-button__item:nth-child(2)').toggleClass('mobile-button__item--second');
        $('.mobile-button__item:last-child').toggleClass('mobile-button__item--third');
    });


    // Увеличение размера картинки по клику

    $('.master-document__image img').on('click', function () {
        $('.image__popup').toggleClass('image__popup--big', 5000);

    });


    // Скролл на главной странице

    $('.promo_scroll').click(function () {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({scrollTop: $(scroll_el).offset().top}, 1200);
        }
        return false;
    });

    // Скролл на странице отзывы

    $('.promo-testimonials__button a').click(function () {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({scrollTop: $(scroll_el).offset().top}, 1200);
        }
        $('.form-header__row:first-child .form-header__field').focus();
        return false;
    });


    // Аккордеон

    $(function () {
        $('.faq__accordion').accordion({
            collapsible: true
        });
    });


    // Пагинация

    $(function () {
        $('.pagination').pagination({
            pages: 56,
            displayedPages: 3,
            edges: 3
            // prevText: '',
            // nextText: ''
        });
    });


    // Гугл карта

    function GMapsInit() {
        if ($('#map').length) {
            window.points = [];
            window.mapMarkers = [];

            $('.map .point').each(function () {
                var coordinate = '55.753005, 37.620628';
                var urlPath = '#';
                var name = 'Сервисный центр';
                var text = '';
                var time = '';
                var idItem = 1;
                // var arrCoordinate = coordinate.split(',');
                var itemArr = [];

                $(this).find('p').each(function () {
                    var item = $(this).text();
                    itemArr.push('<p>' + item + '</p>');
                });

                // window.points.push({
                //     coordinate: $(this).data('coordinate'),
                //     urlPath: $(this).data('url'),
                //     name: $(this).data('name'),
                //     text: $(this).data('text'),
                //     time: $(this).data('time'),
                //     idItem: $(this).data('id'),
                //     arrCoordinate: coordinate.split(','),
                //     items: itemArr.join('')
                // });
            });

            window.map = new GMaps({
                div: '#map',
                zoom: 10,
                lat: 55.753005,
                lng: 37.620628,
                mapTypeControl: false,
                panControl: false,
                streetViewControl: false,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                }
            });

            var path = [
                [55.909928, 37.582337],
                [55.898149, 37.635738],
                [55.894817, 37.695170],
                [55.826108, 37.834240],
                [55.718466, 37.840183],
                [55.691676, 37.829485],
                [55.655771, 37.840318],
                [55.613881, 37.775295],
                [55.573546, 37.677055],
                [55.575943, 37.595777],
                [55.597912, 37.508845],
                [55.678093, 37.421206],
                [55.710359, 37.389401],
                [55.746178, 37.368905],
                [55.785541, 37.370319],
                [55.806598, 37.386574],
                [55.835186, 37.396469],
                [55.844314, 37.392228],
                [55.868511, 37.409191],
                [55.882389, 37.446649],
                [55.887542, 37.483401],
                [55.904582, 37.526514],
            ];

            polygon = window.map.drawPolygon({
                paths: path,
                strokeColor: '#0047bd',
                strokeOpacity: 1,
                strokeWeight: 1,
                fillColor: '#0047bd',
                fillOpacity: 0.4
            });

            window.points.forEach(function (item) {

                var marker = window.map.addMarker({
                    lat: item.arrCoordinate[0],
                    lng: item.arrCoordinate[1],
                    title: 'map-id-' + item.idItem,
                    icon: '/static/ondevice/images/icons/point.png',
                    // infoWindow: {
                    //     content: '<div id="map-id-'+item.idItem+'" class="inner" style="text-align: center;"><h3 style="font-size: 18px;">'+item.name+'</h3>'+item.items+'<p style="font-size: 15px; color: #aeaeae;">'+item.text+'</p><p style="width:120px; margin: 0 auto; padding: 5px 0; background: #1c40b9; border-radius: 20px; color: #ffffff; font-size: 15px; font-family: ProximaNovaBold, sans-serif; letter-spacing: 1px;">'+item.time+'</p></div>'
                    // }
                });


                window.mapMarkers[item.idItem] = marker;
            });

            $('.contacts_info a').click(function () {
                var link = $(this).data('id');

                var marker = window.mapMarkers[link];

                if (marker) {
                    google.maps.event.trigger(marker, "click");
                }
            });

        }
    }

    google.maps.event.addDomListener(window, 'load', GMapsInit);


    // Аудио плеер странице отзывы

    $('.testimonials-player__btn').on("click", function (event) {

        if ($(this).hasClass('play')) {
            $(this).removeClass('play');
            $(this).addClass('pause');

            $('.testimonials-player').get(0).play();

        } else {

            $('.testimonials-player__btn').removeClass('pause');
            $(this).addClass('play');

            var pl = $('.testimonials-player').get(0);
            pl.pause();

        }
    });


    // Появление кнопки OnAir в определенное время

    $(function () {
        var d = new Date();
        var time = d.getHours();
        if (time >= 9 && time < 22)
            $(".order-phone__on-air").css("display", "block")
    });

    $('.order').find('.order-request__form').find('input[type=submit]').on('click', function () {
        yaCounter46490361.reachGoal('order');
        ga('send', 'event', 'button', 'order');
    });

    $('.promo__form-block').find('input[type=submit]').on('click', function () {
        yaCounter46490361.reachGoal('callback');
        ga('send', 'event', 'button', 'callback');
    });

    $('.order-map').find('input[type=submit]').on('click', function () {
        yaCounter46490361.reachGoal('callback');
        ga('send', 'event', 'button', 'callback');
    });

    $('.wrapper__request').find('input[type=submit]').on('click', function () {
        yaCounter46490361.reachGoal('callback');
        ga('send', 'event', 'button', 'callback');
    });

    var d = new Date,
        e = new Date;
    e.setHours(23, 59, 59);
    var f = e.getTime() / 1e3 - d.getTime() / 1e3;
    $("#countdown").FlipClock(f, {
        clockFace: "DailyCounter",
        language: "ru",
        countdown: !0
    });


});

