(function($){
	$('.accesos').find('.texto').equalizeHeights();
	$('.accesos').find('h2').equalizeHeights();
	$('.cycle-slideshow').find('.interno').each(function(i, el){
		var $el = $(el),
			alto = $el.height();

		$(el).css('top', Math.round((488 - alto) / 2));
	});
})(jQuery);