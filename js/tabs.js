(function($){
	if ($(".subnav .tabs")) {
		var activa = $(".subnav").data("activa");
		$('.tab[data-tab=' + activa + ']').addClass('activa');
	}
})(jQuery);