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

 $('#parallax').parallax({
    invertX: true,
    invertY: true,
    scalarX: 10,
     frictionY: .1
});

var c = $("body").attr("class");
var color;
switch (c) {
  case 'bork':
    color = '#265';
    break;
  case 'bosch':
    color = '#215f8b';
    break;
  case 'delonghi':
    color = '#215f8b';
    break;
  case 'faema':
    color = '#870c28';
    break;
  case 'franke':
    color = '#e2271c';
    break;
  case 'gaggia':
    color = '#ef4023';
    break;
  case 'jura':
    color = '#e30613';
    break;
  case 'krups':
    color = '#525352';
    break;
  case 'la-cimbali':
    color = '#e2271c';
    break;
  case 'melitta':
    color = '#d00c0e';
    break;
  case 'nuova-simonelli':
    color = '#d82f3e';
    break;
  case 'philips':
    color = '#3182b1';
    break;
  case 'promac':
    color = '#a1190d';
    break;
  case 'rancilio':
    color = '#007845';
    break;
  case 'saeco':
    color = '#d71921';
    break;
  case 'schaerer':
    color = '#e2271c';
    break;
  case 'miele':
    color = '#a20001';
    break;
  case 'siemens':
    color = '#41aaaa';
    break;
  case 'wmf':
    color = '#71b430';
    break;
  case 'nivona':
    color = '#af0917';
    break;
  default:
    color = '';
}
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": color
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": color,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});