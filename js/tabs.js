(function($){
	if ($(".subnav .tabs")) {
		var activa = $(".subnav").data("activa");
		$($('.subnav .tabs .tab').get(activa - 1)).addClass("activa");
	}
})(jQuery);