(function($){
	$.fn.equalizeHeights = function() {
		var maxHeight = this.map(function( i, e ) {
			return $( e ).height();
		}).get();
		return this.height( Math.max.apply( this, maxHeight ) );
	};

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