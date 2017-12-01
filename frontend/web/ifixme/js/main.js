 $(document).ready(function(){
	$(".btn-for-contact").click(function () {
	  $(".topcontactinfo").toggleClass("active");
	  if($(this).find(".fa").hasClass("fa-angle-down")) {
	  	$(this).find(".fa").addClass("fa-angle-up");
	  	$(this).find(".fa").removeClass("fa-angle-down");
	  }
	  else {
	  	$(this).find(".fa").removeClass("fa-angle-up");
	  	$(this).find(".fa").addClass("fa-angle-down");
	  }
	});
	$(".bottom-btn").click(function () {
		$('#number-15').removeClass('active');
	});


	$('.owl-carousel.slider-center').owlCarousel({
	    loop:true,
	    center:true,
	    margin:10,
	    nav:true,
	    dots:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        540:{
	            items:2
	        },
	        680:{
	            items:2
	        },
	        830:{
	            items:3
	        },
	        1031:{
	            items:4
	        },
	        1450:{
	            items:6
	        }
	    }
	});

	var $iphone  = $('#iphone');		
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
	var $ipad  = $('#ipad');		
	var $ipadWrap   = $ipad.parent();
	$ipad.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $ipadWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $ipadWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,			
		prevPage: $ipadWrap.find('.prevPage'),
		nextPage: $ipadWrap.find('.nextPage')
	});	
	var $ipod  = $('#ipod');		
	var $ipodWrap   = $ipod.parent();
	$ipod.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $ipodWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $ipodWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,			
		prevPage: $ipodWrap.find('.prevPage'),
		nextPage: $ipodWrap.find('.nextPage')
	});	
	var $macbook  = $('#macbook');		
	var $macbookWrap   = $macbook.parent();
	$macbook.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $macbookWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $macbookWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,			
		prevPage: $macbookWrap.find('.prevPage'),
		nextPage: $macbookWrap.find('.nextPage')
	});
        var $macbook  = $('#imac');		
	var $macbookWrap   = $macbook.parent();
	$macbook.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $macbookWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $macbookWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,			
		prevPage: $macbookWrap.find('.prevPage'),
		nextPage: $macbookWrap.find('.nextPage')
	});
        var $macbook  = $('#iwatch');		
	var $macbookWrap   = $macbook.parent();
	$macbook.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $macbookWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $macbookWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,			
		prevPage: $macbookWrap.find('.prevPage'),
		nextPage: $macbookWrap.find('.nextPage')
	});
	var $macbook  = $('#bottons-tablet');		
	var $macbookWrap   = $macbook.parent();
	$macbook.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		scrollBar: $macbookWrap.find('.scrollbar'),
		scrollBy: 1,
		pagesBar: $macbookWrap.find('.pages'),
		activatePageOn: 'click',
		speed: 300,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,
	});


	$('.bottons a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.bottons a').removeClass('active');
		$('.tab-content').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	});
	

	$("body").on("click", "#number-12 .item .head", function() {
		$("#number-12 .item").removeClass("active");
		$(this).parent().addClass("active");		
	});

	$('.footer-map-menu li a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.footer-map-menu li').removeClass('active');
		$('.footer-map').removeClass('active');

		$(this).parent().addClass('active');
		$("#"+tab_id).addClass('active');
	});

	$('.open-popup').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('.popup').addClass('active');
		$("#"+tab_id).addClass('active');
		$('.popup .right').removeClass('active');
		$('.popup .start').addClass('active');
	});
	$('.close').click(function(){
		$('.popup, .popup .inner').removeClass('active');
	});
	$('.zakaz').click(function(){
		$('.popup .start').removeClass('active');
		$('.popup .finish').addClass('active');
	});

	$("#gotop").click(function (){
    $('html, body').animate({
      scrollTop: $("#header").offset().top
    }, 700);
  });
  $("#other, .other > ul > li > a").click(function (){
    $(".other").toggleClass("active");
  });

  $(".menu-toggle").click(function (){
    $(".menu-toggle").toggleClass("open");
    $("footer .bottom-menu .nav ul").toggleClass("active");
    $(".topmenu > ul > li > ul").toggleClass("active");
  });

  $('.contact-menu a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.contact-menu li').removeClass('active');
		$('#number-18 .item').removeClass('active');

		$(this).parent().addClass('active');
		$("#"+tab_id).addClass('active');
	});
  $('.open-botton').click(function(){
  	$('.content-services').removeClass('active');
  	$(this).parent().addClass('active');
  });
	$(".fancybox").fancybox();

	$(".open-adress").click(function () {
		$('.open-foto, .content-foto').removeClass("active");
		if($(".open-adress, .content-adress").hasClass("active"))
			$('.open-adress, .content-adress').removeClass("active"); 
		else {
				$('.open-adress, .content-adress').addClass("active"); 
			} 	
  });
  $(".open-foto").click(function () {
  	$('.open-adress, .content-adress').removeClass("active");
		if($(".open-foto, .content-foto").hasClass("active"))
			$('.open-foto, .content-foto').removeClass("active"); 
		else {
				$('.open-foto, .content-foto').addClass("active"); 
			}
  });
});

