// function mouseParallax(e,t,i,o,s,a){var r=document.getElementById(e),n=r.parentNode,l=parseInt(n.offsetWidth),c=parseInt(n.offsetHeight);r.style.left=t-(o-(parseInt(r.offsetWidth)/2+t))/l*a+"px",r.style.top=i-(s-(parseInt(r.offsetHeight)/2+i))/c*10+"px"}var typed=new Typed(".print .text",{strings:["Починим у вас на работе.","Починим у вас в институте.","Починим у вас дома.","Починим у вас в спортзале.","Починим у вас на даче.","Починим у вас на паркинге.","Починим у нас в сервисном центре."],typeSpeed:100,backSpeed:70,loop:!0});$(document).ready(function(){$(".header__menu, .footer__menu .anchor, .up-wrap").on("click","a",function(e){e.preventDefault();var t=$(this).attr("href"),i=$(t).offset().top;$("body,html").animate({scrollTop:i},1500)})}),$(document).scroll(function(){var e=$(".header").height();$(document).scrollTop()>e?$(".up").addClass("active"):$(".up").removeClass("active")}),$(".humburger__wrap").on("click",function(){$(this).toggleClass("active"),$(".header__menu").toggleClass("active")}),$(".owl-carousel").owlCarousel({loop:!0,margin:0,nav:!1,items:1,dots:!0}),function e(){$(".illustrate .light").toggle(),setTimeout(e,7e3)}(),$(".choose .tabs__item").on("click",function(){$(".choose .tabs__item").removeClass("active"),$(this).addClass("active");var e=$(this).attr("data-val");$(".choose .lists .list").hide(),$(".choose .choose__grids .choose__grid").hide(),$(".choose .choose__forms .form").hide(),$(".choose .lists .list#"+e).fadeIn(600),$(".choose .choose__grids .choose__grid#"+e+"1").fadeIn(600),$(".choose .choose__forms .form#"+e+"2").fadeIn(600)}),$(".choose .lists .list#iphone .list__item").on("click",function(){$(".choose .choose__grid#iphone1 .item").removeClass("active"),$(".choose__forms .form#iphone2 .price__total").html("0 руб."),$(".choose__forms .form#iphone2 .form__subtitle span").html("0 минут "),$("select#phone-repair").val("").trigger("change"),$(".choose .choose__grid#iphone1 .item").removeClass("active"),$(".choose .lists .list#iphone .list__item").removeClass("active"),$(this).addClass("active");var e=$(this).data("attr"),t=$(this).attr("data-val");$("select#phone-model").val(t).trigger("change");for(key in gadgets)for(key1 in gadgets[key])if(key1==e)for(key2 in gadgets[key][key1])$(".choose__grid#iphone1 .item:eq("+key2+") .item__wrap .price").html(gadgets[key][key1][key2])}),$(".choose .lists .list#ipad .list__item").on("click",function(){$(".choose .lists .list#ipad .list__item").removeClass("active"),$(this).addClass("active");var e=$(this).data("attr"),t=$(this).attr("data-val");$("select#ipad-model").val(t).trigger("change");for(key in gadgets)for(key1 in gadgets[key])if(key1==e)for(key2 in gadgets[key][key1])$(".choose__grid#ipad1 .item:eq("+key2+") .item__wrap .price").html(gadgets[key][key1][key2])}),$(".choose .lists .list#ipad .list__item").on("click",function(){$(".choose .lists .list#ipad .list__item").removeClass("active"),$(this).addClass("active");var e=$(this).attr("data-val");$("select#ipad-model").val(e).trigger("change"),$(".choose .choose__grid#ipad1 .item").removeClass("active"),$(".choose__forms .form#ipad2 .price__total").html("0 руб."),$(".choose__forms .form#ipad2 .form__subtitle span").html("0 минут "),$("select#ipad-repair").val("").trigger("change"),$(".choose .choose__grid#ipad1 .item").removeClass("active")}),$(".choose .choose__grid#iphone1 .item__wrap").on("click",function(){$(".choose .choose__grid#iphone1 .item").removeClass("active"),$(this).parent().addClass("active");var e=$(this).attr("data-title"),t=$(this).attr("data-time"),i=$(this).find(".price").html();$("select#phone-repair").val(e).trigger("change"),$(".choose__forms .form#iphone2 .price__total").html(i),$(".choose__forms .form#iphone2 .input-price").val(i),$(".choose__forms .form#iphone2 .form__subtitle span").html(t+" ")}),$(".choose .choose__grid#ipad1 .item__wrap").on("click",function(){$(".choose .choose__grid#ipad1 .item").removeClass("active"),$(this).parent().addClass("active");var e=$(this).attr("data-title"),t=$(this).attr("data-time"),i=$(this).find(".price").html();$("select#ipad-repair").val(e).trigger("change"),$(".choose__forms .form#ipad2 .price__total").html(i),$(".choose__forms .form#ipad2 .input-price").val(i),$(".choose__forms .form#ipad2 .form__subtitle span").html(t+" ")}),$("select").select2({placeholder:function(){$(this).data("placeholder")},minimumResultsForSearch:-1,width:"100%"}),$(window).ready(function(){$("select#phone-model").val("iPhone 4").trigger("change"),$("select#ipad-model").val("IPad 2").trigger("change")}),$("select#phone-model").on("select2:select",function(e){$(".choose .choose__grid#iphone1 .item").removeClass("active"),$(".choose__forms .form#iphone2 .price__total").html("0 руб."),$(".choose__forms .form#iphone2 .form__subtitle span").html("0 минут "),$("select#phone-repair").val("").trigger("change"),$(".choose .choose__grid#iphone1 .item").removeClass("active"),$(".choose .lists .list#iphone .list__item").removeClass("active");var t=$(e.currentTarget).find("option:selected").val();$('.choose .lists .list#iphone .list__item[data-val="'+t+'"]').addClass("active");for(key in gadgets)for(key1 in gadgets[key]){var i=phoneNr(t);if(console.log(i),key1==i)for(key2 in gadgets[key][key1])$(".choose__grid#iphone1 .item:eq("+key2+") .item__wrap .price").html(gadgets[key][key1][key2])}}),$("select#ipad-model").on("select2:select",function(e){$(".choose .choose__grid#ipad1 .item").removeClass("active"),$(".choose__forms .form#ipad2 .price__total").html("0 руб."),$(".choose__forms .form#ipad2 .form__subtitle span").html("0 минут "),$("select#phone-repair").val("").trigger("change"),$(".choose .choose__grid#ipad1 .item").removeClass("active"),$(".choose .lists .list#ipad .list__item").removeClass("active");var t=$(e.currentTarget).find("option:selected").val();$('.choose .lists .list#ipad .list__item[data-val="'+t+'"]').addClass("active");for(key in gadgets)for(key1 in gadgets[key]){var i=ipadNr(t);if(console.log(i),key1==i)for(key2 in gadgets[key][key1])$(".choose__grid#ipad1 .item:eq("+key2+") .item__wrap .price").html(gadgets[key][key1][key2])}}),$("select#phone-repair").on("select2:select",function(e){var t=$(e.currentTarget).find("option:selected").val(),i=$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"] .price').html(),o=$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"]').data("time");$(".choose__grid#iphone1 .item").removeClass("active"),$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"]').parent().addClass("active"),$(".choose__forms .form#iphone2 .price__total").html(i),$(".choose__forms .form#iphone2 .input-price").val(i),$(".choose__forms .form#iphone2 .form__subtitle span").html(o+" ")}),$("select#ipad-repair").on("select2:select",function(e){var t=$(e.currentTarget).find("option:selected").val(),i=$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"] .price').html(),o=$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"]').data("time");$(".choose__grid#iphone1 .item").removeClass("active"),$('.choose__grid#iphone1 .item__wrap[data-title="'+t+'"]').parent().addClass("active"),$(".choose__forms .form#iphone2 .price__total").html(i),$(".choose__forms .form#ipad2 .input-price").val(i),$(".choose__forms .form#iphone2 .form__subtitle span").html(o+" ")}),$(document).ready(function(){$(".select2-results__options, .post .body").mCustomScrollbar()}),$("select").on("select2:open",function(e){$(".select2-results__options").mCustomScrollbar("destroy"),setTimeout(function(){$(".select2-results__options").mCustomScrollbar()},0)}),$(".how__tabs .tab").on("click",function(){$(".how__tabs .tab").removeClass("active"),$(this).addClass("active"),$(".how__blocks .block").hide();var e=$(this).data("tab");$(".how__blocks .block#"+e).fadeIn(600)}),jQuery(document).ready(function(){jQuery(".cashback__img").addClass("hidden").viewportChecker({classToAdd:"visible animated fadeInRight delay",offset:100})}),$(".clients .tabs__item").on("click",function(){var e=$(this).data("tab");$(".clients .tabs__item").removeClass("active"),$(this).addClass("active"),$(".clients .block").hide(),$(".clients .block#"+e).fadeIn(600)}),$(".faq__grid .item__wrap").on("click",function(){$(this).parent().toggleClass("active"),$(this).find(".item__text").slideToggle(600)}),function e(){$(".news__form .form__field--input > span").toggle(),setTimeout(e,7e3)}(),$(".form__input--white").on("keyup",function(){$(this).removeClass("error")}),$(".form__input--white").focusin(function(){$(".news__form .form__field--input > span").css("opacity","0")}),$(".form__input--white").focusout(function(){""==$(this).val()&&$(".news__form .form__field--input > span").css("opacity","1")});var stock=3;shownews="Ещё статьи",$(".news__more .more-btn").html(shownews),$(".news__grid .item:not(:lt("+stock+"))").hide(),$(".news__more .more-btn").click(function(e){e.preventDefault();var t=$(".news__grid .item:hidden").length;t>3?$(".news__grid .item:hidden:lt("+stock+")").fadeIn("slow"):t<=3&&($(".news__grid .item:hidden:lt("+stock+")").fadeIn("slow"),$(".news__more .more-btn").hide())}),window.onload=function(){var e=document.getElementById("top"),t=document.getElementById("parBox").offsetLeft,i=document.getElementById("parBox").offsetTop;$(window).width()>991?(e.onmousemove=function(o){var s=(o=o||window.event).clientX-e.offsetLeft,a=o.clientY-e.offsetTop;mouseParallax("parBox",t,i,s,a,20)},$(".gallery .thumbnails .item").hover(function(){var e=$(this).index();$(".gallery .big a").hide(),$(".gallery .big a").eq(e).show()})):$(".gallery .thumbnails .item").click(function(){var e=$(this).index();$(".gallery .big a").hide(),$(".gallery .big a").eq(e).show()})},$('input[type="tel"]').mask("+7 (000) 000-00000"),$('input[type="tel"]').on("keyup",function(){var e=$(this).val().length;e>17?$(this).css("border","2px solid #d80101"):17==e?$(this).css("border","2px solid #0cdc43"):$(this).css("border","0px solid #0cdc43")}),$(document).ready(function(){$("form").submit(function(){var e=$(this).attr("id"),t=$("#"+e);if(""==$(t).find("input[type=text]").val()&&"email"!=$(t).find("input[type=text]").attr("name"))return $(t).find("input[type=text]").addClass("fail"),!1;if($(t).find('input[type="text"]').removeClass("fail"),$(t).find('input[type="tel"]').length>0){if(17!=$(t).find('input[type="tel"]').val().length)return $(t).find('input[type="tel"]').addClass("fail"),!1;$(t).find('input[type="tel"]').removeClass("fail")}if($(t).find('input[name="email"]').length>0){if(""==$(t).find('input[name="email"]').val())return!1;var i=$(".form__input--white").val().trim();if(!(i.length>=6&&i.includes("@")&&i.includes(".")))return $(".form__input--white").addClass("error"),!1}return $.ajax({type:"POST",url:"mail.php",data:t.serialize(),success:function(e){return $(t).find("input[type=text], input[type=tel], input[type=email]").val(""),$.fancybox.open('<div class="thanks"><h2>Спасибо!</h2><p>Ваша заявка принята и в скором времени с Вами свяжется наш менеджер!</p></div>'),setTimeout(function(){$.fancybox.close()},2e3),!1},error:function(e,t,i){$.fancybox.open('<div class="thanks"><h2>Ошибка!</h2><p>Попробуйте заполнить форму повторно!</p></div>'),setTimeout(function(){$.fancybox.close()},2e3)}}),!1})});

// Typed js

var typed = new Typed('.print .text', {
  strings: ["Починим за 24 часа.", "Проведём бесплатную диагностику.", "Дадим РЕАЛЬНУЮ гарантию.", "Проведём контроль качества ремонта.", "РЕАЛЬНО качественный ремонт кофемашин в Москве"],
  typeSpeed: 100,
  backSpeed: 70,
  loop: true,
});

$(document).ready(function(){

	$(".header__menu, .footer__menu .anchor, .up-wrap").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		
		$('body,html').animate({scrollTop: top}, 1500);
	});
});

$(document).scroll(function () {
	var headerHeight = $('.header').height();
	var top = $(document).scrollTop();
	if (top > headerHeight) {
		$('.up').addClass('active');
	}else{
		$('.up').removeClass('active');
	}
});

// Humburger

$('.humburger__wrap').on('click', function () {
	$(this).toggleClass('active');
	$('.header__menu').toggleClass('active');
});

//Review slider
$('.owl-carousel').owlCarousel({
    loop:true,
    margin: 0,
    nav: false,
    items: 1,
    dots: true
});


// Light on first screen

(function light(){
	$('.illustrate .light').toggle();
	setTimeout(light, 7000);
}());


//CHOOSE SECTION

$('.choose .tabs__item').on('click', function(){
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

// TOP TABS

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
		for(key1 in gadgets[key]){
			if (key1 == attr) {
				for(key2 in gadgets[key][key1]){
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
		for(key1 in gadgets[key]){
			if (key1 == attr) {
				for(key2 in gadgets[key][key1]){
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

//Select

$('select').select2({
	placeholder: function(){
        $(this).data('placeholder');
    },
    minimumResultsForSearch: -1,
    width: '100%',
});

$(window).ready(function(){
	$("select#phone-model").val('iPhone X').trigger("change");
	$("select#ipad-model").val('iPad Pro 12.9').trigger("change");
});


$("select#phone-model").on("select2:select", function(e) { 
	$('.choose .choose__grid#iphone1 .item').removeClass('active');
	$(".choose__forms .form#iphone2 .price__total").html('0 руб.');
	$(".choose__forms .form#iphone2 .form__subtitle span").html('0 минут ');
	$("select#phone-repair").val('').trigger("change");
	$('.choose .choose__grid#iphone1 .item').removeClass('active');
	$('.choose .lists .list#iphone .list__item').removeClass('active');	
	var val = $(e.currentTarget).find("option:selected").val();
	$('.choose .lists .list#iphone .list__item[data-val="' + val + '"]').addClass('active');
	for (key in gadgets) {
		for(key1 in gadgets[key]){
			var text = phoneNr(val);
			console.log(text);
			if (key1 == text) {
				for(key2 in gadgets[key][key1]){
					$('.choose__grid#iphone1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
				}
			}
		}
	}	
});

$("select#ipad-model").on("select2:select", function(e) { 
	$('.choose .choose__grid#ipad1 .item').removeClass('active');
	$(".choose__forms .form#ipad2 .price__total").html('0 руб.');
	$(".choose__forms .form#ipad2 .form__subtitle span").html('0 минут ');
	$("select#phone-repair").val('').trigger("change");
	$('.choose .choose__grid#ipad1 .item').removeClass('active');
	$('.choose .lists .list#ipad .list__item').removeClass('active');	
	var val = $(e.currentTarget).find("option:selected").val();
	$('.choose .lists .list#ipad .list__item[data-val="' + val + '"]').addClass('active');
	for (key in gadgets) {
		for(key1 in gadgets[key]){
			var text = ipadNr(val);
			console.log(text);
			if (key1 == text) {
				for(key2 in gadgets[key][key1]){
					$('.choose__grid#ipad1 .item:eq(' + key2 + ') .item__wrap .price').html(gadgets[key][key1][key2]);
				}
			}
		}
	}	
});

$("select#phone-repair").on("select2:select", function(e) { 
	var val = $(e.currentTarget).find("option:selected").val();
	var price = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"] .price').html();
	var time = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').data('time');
	$('.choose__grid#iphone1 .item').removeClass('active');	
	$('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').parent().addClass('active');
	$(".choose__forms .form#iphone2 .price__total").html(price);
	$(".choose__forms .form#iphone2 .input-price").val(price);
	$(".choose__forms .form#iphone2 .form__subtitle span").html(time + ' ');
});

$("select#ipad-repair").on("select2:select", function(e) { 
	var val = $(e.currentTarget).find("option:selected").val();
	var price = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"] .price').html();
	var time = $('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').data('time');
	$('.choose__grid#iphone1 .item').removeClass('active');	
	$('.choose__grid#iphone1 .item__wrap[data-title="' + val + '"]').parent().addClass('active');
	$(".choose__forms .form#iphone2 .price__total").html(price);
	$(".choose__forms .form#ipad2 .input-price").val(price);
	$(".choose__forms .form#iphone2 .form__subtitle span").html(time + ' ');
});

//Custom scrollbar
$(document).ready(function(){
	$(".select2-results__options, .post .body").mCustomScrollbar();
});

$('select').on('select2:open', function (e) {
 $('.select2-results__options').mCustomScrollbar('destroy');
  setTimeout(function () {
    $('.select2-results__options').mCustomScrollbar();
  }, 0);
});

//HOW TABS

$('.how__tabs .tab').on('click', function(){

	$('.how__tabs .tab').removeClass('active');
	$(this).addClass('active');
	$('.how__blocks .block').hide();
	var	val = $(this).data('tab');
	$('.how__blocks .block#' + val).fadeIn(600);


});


jQuery(document).ready(function() {
	jQuery('.cashback__img').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated fadeInRight delay',
		offset: 100
	});
});

//clients tabs

$('.clients .tabs__item').on('click', function(){
	var val = $(this).data('tab');
	$('.clients .tabs__item').removeClass('active');
	$(this).addClass('active');
	$('.clients .block').hide();
	$('.clients .block#' + val).fadeIn(600);
});

//faq blocks
$('.faq__grid .item__wrap').on('click', function(){
	$(this).parent().toggleClass('active');
	$(this).find('.item__text').slideToggle(600);
});

// news check email

(function light1(){
	$('.news__form .form__field--input > span').toggle();
	setTimeout(light1, 7000);
}());

$('.form__input--white').on('keyup', function(){
	$(this).removeClass('error');
});
$('.form__input--white').focusin(function(){
	$('.news__form .form__field--input > span').css('opacity', '0');
});
$('.form__input--white').focusout(function(){
	if ($(this).val() == '') {
		$('.news__form .form__field--input > span').css('opacity', '1');
	}
});

//news items

var stock = 3; // - количество отображаемых акций
shownews = 'Ещё статьи';

$(".news__more .more-btn").html( shownews );
$(".news__grid .item:not(:lt("+stock+"))").hide();

$(".news__more .more-btn").click(function (e){
  e.preventDefault();
  var items = $(".news__grid .item:hidden").length;
  if (items > 3) {
  	$(".news__grid .item:hidden:lt("+stock+")").fadeIn('slow');
  }else if(items <= 3){
  	$(".news__grid .item:hidden:lt("+stock+")").fadeIn('slow');
  	$(".news__more .more-btn").hide();
  }
});

//gallery



//parralax 

window.onload = function () {

	var parallaxBox = document.getElementById ( 'top' );
	var parBoxLeft = document.getElementById ( 'parBox' ).offsetLeft,
	parBoxTop = document.getElementById ( 'parBox' ).offsetTop;
	var winWidth = $(window).width();
	if (winWidth > 991) {
		parallaxBox.onmousemove = function ( event ) {
			event = event || window.event;
			var x = event.clientX - parallaxBox.offsetLeft,
			y = event.clientY - parallaxBox.offsetTop;
			
			mouseParallax ( 'parBox', parBoxLeft, parBoxTop, x, y, 20 );
		}
		$('.gallery .thumbnails .item').hover(function () {
			var val = $(this).index();
			$('.gallery .big a').hide();
			$('.gallery .big a').eq(val).show();
		});
	}else{
		$('.gallery .thumbnails .item').click(function () {
			var val = $(this).index();
			$('.gallery .big a').hide();
			$('.gallery .big a').eq(val).show();
		});
	}
}

function mouseParallax ( id, left, top, mouseX, mouseY, speed ) {
	var obj = document.getElementById ( id );
	var parentObj = obj.parentNode,
	containerWidth = parseInt( parentObj.offsetWidth ),
	containerHeight = parseInt( parentObj.offsetHeight );
	obj.style.left = left - ( ( ( mouseX - ( parseInt( obj.offsetWidth ) / 2 + left ) ) / containerWidth ) * speed ) + 'px';
	obj.style.top = top - ( ( ( mouseY - ( parseInt( obj.offsetHeight ) / 2 + top ) ) / containerHeight ) * 10 ) + 'px';
}



// Mask

$('input[type="tel"]').mask('+7 (000) 000-00000');


// Validation

$('input[type="tel"]').on("keyup", function() {
  var amount = $(this).val().length;
  if (amount > 17) {
  	$(this).css('border', '2px solid #d80101');
  }else if(amount == 17){
  	$(this).css('border', '2px solid #0cdc43');
  }else{
  	$(this).css('border', '0px solid #0cdc43');
  }
});




$(document).ready(function () {

	$("form").on('submit', function (e) {
		e.preventDefault();
		// Получение ID формы
		var formID = $(this).attr('id');
		// Добавление решётки к имени ID
		var formNm = $('#' + formID);
		var goal = $(formNm).data(goal);
		


		if ($(formNm).find('input[type=text]').val() == '' && $(formNm).find('input[type=text]').attr('name') != 'email') {
			$(formNm).find('input[type=text]').addClass('fail');
			return false;
		}else{
			$(formNm).find('input[type="text"]').removeClass('fail');
		}
		if ($(formNm).find('input[type="tel"]').length > 0) {
			if ($(formNm).find('input[type="tel"]').val().length != 17) {
				$(formNm).find('input[type="tel"]').addClass('fail');
				return false;
			}else{
				$(formNm).find('input[type="tel"]').removeClass('fail');
			}
		}
		if ($(formNm).find('input[name="email"]').length > 0) {
			if ($(formNm).find('input[name="email"]').val() == '') {
				return false;
			}else{
				var str = $('.form__input--white').val().trim();
				var correct = str.length >= 6    // минимальная длина для точки, собаки, домена + по букве между ними 
				           && str.includes('@')    // есть собака
				           && str.includes('.');   // есть точка
				if (!correct) {
					$('.form__input--white').addClass('error');
					return false;
				}
			}
		}

		// var gaGoal = $(formNm).data('ga');
		// var yamGoal = $(formNm).data('yam');
		// if ($(formNm == '#freeForm')) {
		// 	ga("send", "event", "FormMaterFree", "submit");
		// 	yaCounter46324353.reachGoal("free_master");
		// }

		$.ajax({
			type: "POST",
			url: 'handler.php',
			data: formNm.serialize(),
			success: function (data) {
				// Вывод текста результата отправки

				$(formNm).find("input[type=text], input[type=tel], input[type=email]").val("");
				$.fancybox.open('<div class="thanks"><h2>Спасибо!</h2><p>Ваша заявка принята и в скором времени с Вами свяжется наш менеджер!</p></div>');
				setTimeout(function() { 
					$.fancybox.close();
				}, 2000);	

				// gtmAjaxSuccess($this);
			},
			error: function (jqXHR, text, error) {
				// Вывод текста ошибки отправки
				$.fancybox.open('<div class="thanks"><h2>Ошибка!</h2><p>Попробуйте заполнить форму повторно!</p></div>');
				setTimeout(function() { 
					$.fancybox.close();
				}, 2000);
			}
		}).done(function( data ) {

    		fbq('track', 'Lead');

			if (formID == "freeForm") {
				console.log('send1');
				ga("send", "event", "FormMaterFree", "submit"); 
				yaCounter46324353.reachGoal("free_master"); 
				return true;
			}else if (formID == "iphone2") {
				console.log('send2');
				ga("send", "event", "Form_Iphone_Ipad", "submit"); 
				yaCounter46324353.reachGoal("choose_master"); 
				return true;
			}else if (formID == "ipad2") {
				ga("send", "event", "Form_Iphone_Ipad", "submit"); 
				yaCounter46324353.reachGoal("choose_master"); 
				return true;
			}else if (formID == "topForm") {
				console.log('sendTop');
				ga("send", "event", "FormTopMaster", "submit"); 
				yaCounter46324353.reachGoal("top_master"); 
				return true;
			}else if (formID == "subscribeForm") {
				ga("send", "event", "FormSubNews", "submit"); 
				yaCounter46324353.reachGoal("news_subscribe"); 
				return true;
			}else if (formID == "endForm") {
				ga("send", "event", "FormContactToMaster", "submit"); 
				yaCounter46324353.reachGoal("contact_master"); return true;
			}else if (formID == "mainForm") {
				ga("send", "event", "FormHeader", "submit"); 
				yaCounter46324353.reachGoal("header_consult"); 
				return true;
			}else if (formID == "masterForm") {
				ga("send", "event", "FormMasterCall", "submit"); 
				yaCounter46324353.reachGoal("FormMasterCall"); 
				return true;
			}else if (formID == "cashbackForm") {
				ga("send", "event", "FormCashBack", "submit"); 
				yaCounter46324353.reachGoal("cashback_ticket"); 
				return true;
			}else if (formID == "glassModal1") {
				ga("send", "event", "FormGlassHot", "submit"); 
				yaCounter46324353.reachGoal("hot_glass"); 
				return true;
			}else if (formID == "studentModal1") {
				ga("send", "event", "FormStudent", "submit"); 
				yaCounter46324353.reachGoal("hot_student"); 
				return true;
			}else if (formID == "repairModal1") {
				ga("send", "event", "FormService", "submit"); 
				yaCounter46324353.reachGoal("how_asign"); 
				return true;
			}
		});
	return false;
	});

});

var windowWidth = $(window).width();

$(document).resize(function () {
	windowWidth = $(window).width();
});




$('.choose__grid .item__wrap').on('click',  function () {
	var elementClick = $(this).parents('.choose__grid').attr("id");
	var actionEl;
	if (elementClick == 'iphone1') {
		actionEl = '#iphone2';
	}else if (elementClick == 'ipad1') {
		actionEl = '#ipad2';
	}
	var destination = $(actionEl).offset().top;

	if (windowWidth < 992) {
		$('body,html').animate({scrollTop: destination}, 1100);
	}

});

