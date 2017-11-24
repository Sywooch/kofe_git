// ЭТО НУЖНО УДАЛИТЬ НА ПРОДАКШНЕ!!!!!!!!!
$(function() {
	// $('#tmpIdButton1').on('click', function(e) {
	// 	e.preventDefault();
	// 	var formParent = $(this).closest('.form');
	// 	formParent.addClass('form_loading');
	// 	setTimeout(function(){
	// 		formParent.removeClass('form_loading').addClass('form_hidden').next().removeClass('form_hidden')
	// 	}, 1000);
	// });

	// $('#tmpIdButton2').on('click', function(e) {
	// 	e.preventDefault();
	// 	var formParent = $(this).closest('.form');
	// 	formParent.addClass('form_loading');
	// 	setTimeout(function(){
	// 		formParent.removeClass('form_loading').addClass('form_hidden').next().removeClass('form_hidden')
	// 	}, 1000);
	// });
	//
	// $('#tmpIdButton3').on('click', function(e) {
	// 	e.preventDefault();
	// 	var popupParent = $(this).closest('.form');
	// 	popupParent.addClass('form_loading');
	// 	setTimeout(function(){
	// 		popupParent.removeClass('form_loading').closest('.popup').removeClass('popup_active');
	// 		$('.popup_request_full').addClass('popup_active');
	// 	}, 1000);
	// });
	//
	// $('#tmpIdButton4').on('click', function(e) {
	// 	e.preventDefault();
	// 	var popupParent = $(this).closest('.form');
	// 	popupParent.addClass('form_loading');
	// 	setTimeout(function(){
	// 		popupParent.removeClass('form_loading').closest('.popup').removeClass('popup_active');
	// 		$('.popup_request_success').addClass('popup_active');
	// 	}, 1000);
	// });
});
// ВОТ ПО СЮДА УДАЛЯТЬ //

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


$(window).on('load', function(){
	$('body').addClass('page_ready');
});

$(function() {

	/*
	// Open mobile menu
	*/

	$('.header__burger').on('click', function(){
		$('body').toggleClass('page_open');
		if($('body').hasClass('page_open')) {
			$('.header__panel').height(117);
		} else {
			$('.header__panel').height(0);
			closeMenu();
		}
	});


	/*
	// Page scroll position
	*/

	$(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		var screenWidth = 108;
		if($(window).width() > 599){
			screenWidth = 108
		} else {
			screenWidth = 73
		}
		if (windscroll > screenWidth) {
			if(screenWidth == 108) {
				$('body').addClass('page_scrolled').removeClass('page_open');
				closeMenu();
			}
			$('.nav__item').removeClass('nav__item_active');
		} else {
			$('body').removeClass('page_scrolled');
		}
	}).scroll();


	/*
	// Scroll to target
	*/

	$('.js-anchor').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});


	/*
	// Menu events
	*/

	// Open the menu
	$('.menu__tab').on('mouseover', function() {
		$(this).addClass('menu__tab_active').siblings().removeClass('menu__tab_active');
		$('.menu__section[data-menu-section='+ $(this).data('menu-tab') +']').addClass('menu__section_active').siblings().removeClass('menu__section_active');
		$('.menu').addClass('menu_active');
		var headerHeight = $('.menu__content').height() + $('.menu__tabs').height();
		if($(window).width() > 599){
			$('.header__panel').height(headerHeight);
		} else {
			$('.header__panel').height(headerHeight + 49);
		}
	});

	// Close the menu
	$('.menu').on('mouseleave', function() {
		closeMenu();
	});

	// Function "Close the menu"
	function closeMenu() {
		$('.menu__tab').removeClass('menu__tab_active');
		$('.menu__section').removeClass('menu__section_active');
		$('.menu').removeClass('menu_active');
		var headerHeight = $('.menu__tabs').height();
		if($(window).width() > 599){
			$('.header__panel').height(headerHeight);
		} else {
			$('.header__panel').height(headerHeight + 49);
		}
	}


	/*
	// Navigation
	*/

	// Close menu
	$(window).click(function() {
		$('.nav__item_location').removeClass('nav__item_active');
	});
	$('.nav__item_location').click(function(e){
		e.stopImmediatePropagation();
	});

	// Open subnav
	$('.nav__link').click(function(e){
		$('.menu__item').removeClass('menu__item_active');
		var navNow = $(this).closest('.nav__item');
		if(navNow.children('.nav__subnav').length > 0){
			e.preventDefault();
			navNow.toggleClass('nav__item_active').siblings().removeClass('nav__item_active');
		}
	});

	// Change city 
	$('.nav__sublink').click(function(e){
		e.preventDefault();

		var subNavNow = $(this);
		$.cookie('city', subNavNow.text(), { expires: 365, path: '/' });
		$('.nav__item_location .nav__label').text(subNavNow.text());
		
		subNavNow.closest('.nav__item').removeClass('nav__item_active');

		$.cookie('cityNow', subNavNow.parent().data('city'), { expires: 365, path: '/' });
		$('.connect__phone[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
	
	var n = $(this).attr("id");
		$.cookie('city-text', n, { expires: 365, path: '/' });
    	$.ajax({
			type: "POST",
			url: "/geoip/",
			data: {"sity_change_btn":n},
			success: function(msg) {
				location.reload();
				}
    	});
	});
	if($.cookie('city-text') == "city-moscow" || $.cookie('city-text') == null){
		$(".city-chek-msk").show();
		$(".city-chek-spb").hide();
	}
	if($.cookie('city-text') == "city-spb"){
		$(".city-chek-msk").hide();
		$(".city-chek-spb").show();
	}
	if($.cookie('city') != null){
		$('.nav__item_location .nav__label').text($.cookie('city'));
	}
	if($.cookie('cityNow') != ''){
		$('.connect__phone[data-phone=' + $.cookie('cityNow') + ']').addClass('connect__phone_active').siblings().removeClass('connect__phone_active');
	}
	
});


// VIDEO
$(function() {
	$('.post__play').on('click', function(ev) {
		var currentVideo = $(this).closest('.post__video');
		currentVideo.addClass('post__video_active');
		currentVideo.find('.post__movie')[0].src += "&autoplay=1";
		ev.preventDefault();
	});
});


// BREAKING
$(function() {
	$('.breaking__list_accordion .breaking__name').on('click', function(e) {
		e.preventDefault();
		var currentBreaking = $(this).parent();
		var currentBreakingData = currentBreaking.data('breaking');
		if(currentBreaking.hasClass('breaking__item_active')) {
			currentBreaking.removeClass('breaking__item_active');
			$('.breaking__point[data-breaking-point="' +  currentBreakingData  + '"]').removeClass('breaking__point_active');
		} else {
			currentBreaking.addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
			$('.breaking__point[data-breaking-point="' +  currentBreakingData  + '"]').addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
		}
	});

	$('.breaking__point').on('click', function(e) {
		e.preventDefault();
		var currentBreaking = $(this);
		var currentBreakingData = currentBreaking.data('breaking-point');
		if(currentBreaking.hasClass('breaking__point_active')) {
			currentBreaking.removeClass('breaking__point_active');
			$('.breaking__item[data-breaking="' +  currentBreakingData  + '"]').removeClass('breaking__item_active');
		} else {
			currentBreaking.addClass('breaking__point_active').siblings().removeClass('breaking__point_active');
			$('.breaking__item[data-breaking="' +  currentBreakingData  + '"]').addClass('breaking__item_active').siblings().removeClass('breaking__item_active');
		}
		console.log(currentBreakingData);
	});
});


// FAQ
$(function() {
	$('.faq__head').on('click', function() {
		$(this).parent().toggleClass('faq__item_active').siblings().removeClass('faq__item_active');
	});
});


// SLIDERS
$(function() {

	// http://idangero.us/swiper/

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

});


// FORMS
$(function() {

	$('.form__input_phone-mask').mask('+7 (999) 999-99-99');

});


// POPUPS
$(window).on('load resize', function() {
	$('.js-popup').on('click', function(e) {
		e.preventDefault();
		$('.popup').removeClass('popup_active');
		$('body').addClass('popup-open');
		var popupNow = '.popup_' + $(this).data('popup');
		$(popupNow).addClass('popup_active');
		console.log(popupNow);
	});
	$('.popup__close, .popup__bg').on('click', function() {
		$('body').removeClass('popup-open');
		$('.popup').removeClass('popup_active');
	});
});


// FORMS
$(function() {

	$('#callMasterLight').validate({
		rules: {
			'phone': {
				required: true,
				rangelength: [8, 11]
			}
		},
		messages: {
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__element') );
		}
	});

	$('#callMasterLightPopup').validate({
		rules: {
			'phone': {
				required: true,
				rangelength: [8, 11]
			}
		},
		messages: {
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__element') );
		}
	});

	$('#callBack').validate({
		rules: {
			'phone': {
				required: true,
				rangelength: [8, 11]
			}
		},
		messages: {
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__element') );
		}
	});

	$('#feedBack').validate({
		rules: {
			
			'message': {
				required: true,
				rangelength: [20, 500]
			},
			'personalData': {
				required: true
			}
		},
		messages: {
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			},
			'message': {
				required: "Вы забыли написать текст сообщения",
				rangelength: "Сообщение должно быть от {0} до {1} символов"
			},
			'personalData': {
				required: "Вы должны дать согласия на обработку персональных данных",
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__element') );
		}
	});

	$('#newReview').validate({
		rules: {
			'name': {
				required: true,
				rangelength: [3, 50]
			},
			'email': {
				required: true,
				email: true
			},
			'city': {
				required: true,
				rangelength: [3, 50]
			},
			'invoice': {
				required: true,
				rangelength: [3, 50]
			},
			'master': {
				required: true,
				rangelength: [3, 50]
			},
			'message': {
				required: true,
				rangelength: [20, 500]
			},
			'vote': {
				required: true
			}
		},
		messages: {
			'name': {
				required: "Пожалуйста, введите ваше имя",
				rangelength: "Имя должно содержать от {0} до {1} символов"
			},
			'entry.64819573': {
				required: "Пожалуйста, введите ваше Email",
				email: "Неверный формат почтового адреса"
			},
			'city': {
				required: "Пожалуйста, введите ваше город",
				rangelength: "Город должно содержать от {0} до {1} символов"
			},
			'invoice': {
				required: "Пожалуйста, введите номер квитанции",
				rangelength: "Номер квитанции содержит от {0} до {1} символов"
			},
			'master': {
				required: "Пожалуйста, укажите имя вашего мастера",
				rangelength: "Имя должно содержать от {0} до {1} символов"
			},
			'message': {
				required: "Вы забыли написать текст сообщения",
				rangelength: "Сообщение должно быть от {0} до {1} символов"
			},
			'vote': {
				required: "Нам нужна ваша оценка"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__row') );
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				$('#newReview .form__row_warning').show();
			}
			validator.focusInvalid();
		}
	});

	$('#userReview').validate({
		rules: {
			'invoice': {
				required: true,
				rangelength: [3, 50]
			},
			'master': {
				required: true,
				rangelength: [3, 50]
			},
			'message': {
				required: true,
				rangelength: [20, 500]
			},
			'voteMaster': {
				required: true
			},
			'voteOperator': {
				required: true
			}
		},
		messages: {
			'invoice': {
				required: "Пожалуйста, введите номер квитанции",
				rangelength: "Номер квитанции содержит от {0} до {1} символов"
			},
			'master': {
				required: "Пожалуйста, укажите имя вашего мастера",
				rangelength: "Имя должно содержать от {0} до {1} символов"
			},
			'message': {
				required: "Вы забыли написать текст сообщения",
				rangelength: "Сообщение должно быть от {0} до {1} символов"
			},
			'voteMaster': {
				required: "Нам нужна ваша оценка"
			},
			'voteOperator': {
				required: "Нам нужна ваша оценка"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__row') );
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				$('#userReview .form__row_warning').show();
			}
			validator.focusInvalid();
		}
	});

	$('#sendResume').validate({
		rules: {
			'name': {
				required: true,
				rangelength: [3, 50]
			},
			'post': {
				required: true,
				rangelength: [3, 50]
			},
			'address': {
				required: true,
				rangelength: [3, 50]
			},
			'money': {
				required: true,
				rangelength: [2, 50]
			},
			'years': {
				required: true,
				rangelength: [2, 50]
			},
			'phone': {
				required: true,
				rangelength: [8, 11]
			},
			'email': {
				email: true
			}
		},
		messages: {
			'name': {
				required: "Пожалуйста, введите ваше имя",
				rangelength: "Имя должно содержать от {0} до {1} символов"
			},
			'post': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			},
			'address': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			},
			'money': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			},
			'years': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			},
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			},
			'email': {
				email: "Неверный формат почтового адреса"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__row') );
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				$('#callMaster .form__row_warning').show();
			}
			validator.focusInvalid();
		}
	});

	$('#userReg').validate({
		rules: {
			'name': {
				required: true,
				rangelength: [3, 50]
			},
			'phone': {
				required: true,
				rangelength: [8, 11]
			},
			'email': {
				required: true,
				email: true
			},
			'city': {
				required: true,
				rangelength: [3, 50]
			},
			'password': {
				required: true,
				rangelength: [2, 50]
			}
		},
		messages: {
			'name': {
				required: "Пожалуйста, введите ваше имя",
				rangelength: "Имя должно содержать от {0} до {1} символов"
			},
			'phone': {
				required: "Пожалуйста, введите ваш номер телефона",
				rangelength: "Номер телефона содержит неверное количество символов"
			},
			'email': {
				email: "Неверный формат почтового адреса"
			},
			'city': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			},
			'password': {
				required: "Это обязательное поле",
				rangelength: "Введите от {0} до {1} символов"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo( element.closest('.form__row') );
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				$('#userReg .form__row_warning').show();
			}
			validator.focusInvalid();
		}
	});

});

// //RATING
// $(function() {
// 	$('.rating .rating__input:radio').attr('checked', false);
// 	$('.rating .rating__input').click(function() {
// 		$(this).parents('.rating').find('.rating__item').removeClass('rating__item_state_checked');
// 		$(this).parent().addClass('rating__item_state_checked');
// 	});
//
// 	$('.rating__input:radio').change(function() {
// 		var target = $(this).parents('.rating').data('target');
// 		//console.log( target + '=' + this.value );
// 	});
// });


$(function(){
            if($('.feeds2').length){
                $('.popup_request_full').addClass('popup_active');
            }
            if($('.feeds3').length){
                $('.popup_request_success').addClass('popup_active');
            }
        });
		
$(document).ready(function(){
 $('.spoiler-form-title').click(function(){
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
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}