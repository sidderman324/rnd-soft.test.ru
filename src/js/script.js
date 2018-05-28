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

	// jQuery(window).on("scroll", function() {
	// 	var scroll = jQuery(window).scrollTop();
	// 	console.log(scroll);

	// 	if(scroll > 200) {jQuery('.page-header').css('position','fixed')}
	// 		else {jQuery('.page-header').removeClass('page-header--fixed')}
	// });
});
