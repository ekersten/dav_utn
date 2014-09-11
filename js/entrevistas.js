(function($){
	var $contenidos = $('.contenido');
	for (var i=0; i<$contenidos.length; i++) {
		$item = $($contenidos.get(i));
		$item.attr('data-height', Math.ceil($item.height()));
		if (i > 0) {
			$item.height(0);
		} else {
			$item.closest('.entrevista').addClass('activa');
		}
		
	}

	$('.entrevistas').on('click', '.titulo', function(e) {
		var $this = $(this);

		$('.entrevista.activa .contenido').animate({
			height: 0
		});

		$('.entrevista.activa').removeClass('activa');

		$this.closest('.entrevista').addClass('activa');
		$this.closest('.entrevista').find('.contenido').animate({
			height: $this.closest('.entrevista').find('.contenido').data('height')
		});
	});
})(jQuery);