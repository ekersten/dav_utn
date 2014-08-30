(function($){
	$.fn.equalizeHeights = function() {
		var maxHeight = this.map(function( i, e ) {
			return $( e ).height();
		}).get();
		return this.height( Math.max.apply( this, maxHeight ) );
	};

	// $('.tpl-2-col .column.principal, .tpl-2-col .column.secundario').equalizeHeights();

	if ($('.fancybox-media').length > 0) {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	}

})(jQuery);