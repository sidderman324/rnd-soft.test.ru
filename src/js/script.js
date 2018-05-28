$(document).ready(function(){
	$("#phone").inputmask("+7 (999) 999-9999");

	$("#phone").on({
		keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
		change: function() { this.value = this.value.replace(/\s/g, ""); }
	});

	jQuery(function() {
		jQuery("a[href^='#']").bind('click', function() {
			var _href=jQuery(this).attr("href");
			jQuery("html, body").animate({
				scrollTop:jQuery(_href).offset().top+"px"},800);
			return false;
		});
	});

	jQuery('.burger__wrapper').on('click',function(){
		jQuery('.main-menu').slideToggle(300);
	});
	jQuery('.main-menu__link').on('click',function(){
		jQuery('.main-menu').slideToggle(300);
	});

	function menuHideShow() {
		var windowsWidth = jQuery(window).width();
		if (windowsWidth < 768) {
			jQuery('.main-menu').css('display','none');
		} else {
			jQuery('.main-menu').css('display','flex');
		}
	};

	jQuery(document).ready(menuHideShow);
	jQuery(window).resize(menuHideShow);

	jQuery('body').mousemove(function(e){
		var x = (48 + e.pageX / jQuery(window).width() * 2);
		var y = (48 + e.pageY / jQuery(window).height() * 2);
		jQuery('.paralax__layer-1').css({'top':y + '%','left':x+'%'});

		var x = (48 + e.pageX / jQuery(window).width() * 4);
		var y = (48 + e.pageY / jQuery(window).height() * 4);
		jQuery('.paralax__layer-2').css({'top':y + '%','left':x+'%'});

		var x = (48 + e.pageX / jQuery(window).width() * 6);
		var y = (48 + e.pageY / jQuery(window).height() * 6);
		jQuery('.paralax__layer-3').css({'top':y + '%','left':x+'%'});
	});

	if (jQuery(window).width() < 768) {
		function onOrientationChange(e) {
			var parX = Math.round(e.gamma);
			var parY = Math.round(e.beta);
			var x = 50 + parX / 5;
			var y = 100 + parY / 5;
			// jQuery('#click').text('parX: '+ x + 'parY: '+ parY);
			jQuery('.paralax').css('background-position', x + '% ' + y + '%');
		}
		window.addEventListener('deviceorientation', onOrientationChange);
	}

	jQuery('.result__close').on('click',function(){
		jQuery('.result').fadeOut(200);
	});

	$(function(){
		$('#form_send').submit(function(e){
			e.preventDefault();
			var m_method=$(this).attr('method');
			var m_action=$(this).attr('action');
			var m_data=$(this).serialize();
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(){
					jQuery('.result').fadeIn(200);
					jQuery('.result__text').text('Ваше сообщение успешно отправлено');
					document.getElementById('form_send').reset();
				},
				error: function(){
					jQuery('.result').fadeIn(200);
					jQuery('.result__text').text('При отправке произошла ошибка');
					document.getElementById('form_send').reset();
				}
			});
		});
	});
});
