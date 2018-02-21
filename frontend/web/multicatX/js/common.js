$(document).ready(function () {
    $(document).ready(function () {
        $('#nav-icon1').click(function () {
            $(this).toggleClass('open');
            $('.top-nav').slideToggle(300, 'swing');
        });
    });
    $('.owl-carousel33').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                margin: 10,
                items: 5
            }
        }
    });
    /* Search */
    $('.button-search').bind('click', function () {
        url = $('base').attr('href') + 'index.php?route=product/search';
        var search = $('input[name=\'search\']').attr('value');
        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }
        location = url;
    });
    $('#header input[name=\'search\']').bind('keydown', function (e) {
        if (e.keyCode == 13) {
            url = $('base').attr('href') + 'index.php?route=product/search';

            var search = $('input[name=\'search\']').attr('value');

            if (search) {
                url += '&search=' + encodeURIComponent(search);
            }
            location = url;
        }
    });
    /* Ajax Cart */
    $('#cart > .heading a').live('click', function () {
        $('#cart').addClass('active');
        $('#cart').load('index.php?route=module/cart #cart > *');
        $('#cart').live('mouseleave', function () {
            $(this).removeClass('active');
        });
    });
    /* Mega Menu */
    $('#menu ul > li > a + div').each(function (index, element) {
        // IE6 & IE7 Fixes
        if ($.browser.msie && ($.browser.version == 7 || $.browser.version == 6)) {
            var category = $(element).find('a');
            var columns = $(element).find('ul').length;
            $(element).css('width', (columns * 143) + 'px');
            $(element).find('ul').css('float', 'left');
        }
        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();
        i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 5) + 'px');
        }
    });
    // IE6 & IE7 Fixes
    if ($.browser.msie) {
        if ($.browser.version <= 6) {
            $('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');
            $('#column-right + #content').css('margin-right', '195px');
            $('.box-category ul li a.active + ul').css('display', 'block');        }
        if ($.browser.version <= 7) {
            $('#menu > ul > li').bind('mouseover', function () {
                $(this).addClass('active');
            });
            $('#menu > ul > li').bind('mouseout', function () {
                $(this).removeClass('active');
            });
        }
    }
    $('.success img, .warning img, .attention img, .information img').live('click', function () {
        $(this).parent().fadeOut('slow', function () {
            $(this).remove();
        });
    });
    function switchClass(i) {
        var lis = $('#home-news > div');
        lis.eq(i).removeClass('home_header_on');
        lis.eq(i).removeClass('home_header_out');
        lis.eq(i = ++i % lis.length).addClass('home_header_on');
        lis.eq(i = ++i % lis.length).addClass('home_header_out');
        setTimeout(function () {
            switchClass(i);
        }, 3500);
    }
    $(window).load(function () {
        switchClass(-1);
    });
});

function getURLVar(key) {
    var value = [];
    var query = String(document.location).split('?');
    if (query[1]) {
        var part = query[1].split('&');
        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');
            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }
        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

function addToCart(product_id, quantity = 1, current_options = '') {
    $.colorbox({
        scrolling: false,
        overlayClose: true,
        width: '350px',
        opacity: 0.5,
        href: 'index.php?route=module/dondo/getFormOneclick',
        data: 'module=1&product_ids=' + product_id + '&current_options=' + current_options,
        onComplete: function () {
            var phone_mask = $('input[name=\'phone\']').data('phoneMask');

            if (phone_mask) {
                $('input[name=\'phone\']').mask('+7 (999) 999-99-99');
            }
        }
    });
}
function addToWishList(product_id) {
    $.ajax({
        url: 'index.php?route=account/wishlist/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function (json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('.success').fadeIn('slow');
                $('#wishlist-total').html(json['total']);
                $('html, body').animate({scrollTop: 0}, 'slow');
            }
        }
    });
}
function addToCompare(product_id) {
    $.ajax({
        url: 'index.php?route=product/compare/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function (json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('.success').fadeIn('slow');
                $('#compare-total').html(json['total']);
                $('html, body').animate({scrollTop: 0}, 'slow');
            }
        }
    });
}