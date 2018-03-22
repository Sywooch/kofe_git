$(document).ready(function () {
    var $iphone  = $('#my-modelas');        
    var $iphoneWrap   = $iphone.parent();
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

    var $iphone  = $('#my-nav');        
    var $iphoneWrap   = $iphone.parent();
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



    $('.main > .right').sticky({topSpacing:20, bottomSpacing: 500});

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
    $(".prices .button a").click(function () {
        $(".pricelist").addClass("active");
        $(this).parent(".button").hide();
        return false;
    });
    $('.owl-carousel.brend-c').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:10
            }
        }
    });

    $('.owl-carousel.model-c').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

    $('.owl-carousel.metro-c').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel.coment-c').owlCarousel({
        loop:true,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


//Сокрытие seo ссылок



    if ($('.seo-link.link-toggle').length) {
        $('.seo-link.link-toggle').find('.seo-link__title').click(function () {
            var block = $(this).closest('.seo-link');

            if (block.hasClass('opened')) {
                block.removeClass('opened');
            } else {
                block.addClass('opened');
                $('.seo-link__btn').css('display','block');
            }
        });
    }

    // РЎРѕРєСЂС‹С‚РёРµ seo СЃСЃС‹Р»РѕРє

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