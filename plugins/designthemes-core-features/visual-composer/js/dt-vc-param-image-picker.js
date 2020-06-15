!function($) {
	$('.dt_vc_image_picker > ul > li').click(function(e){
		e.preventDefault();
		$(this).parent('ul').find('li.active').removeAttr('class');
		$(this).addClass('active');
		$(this).parent('ul').next(":input").attr('value', $(this).attr('data-value') );
		$(this).parent('ul').next(":input").trigger("change");
	});
}(window.jQuery);