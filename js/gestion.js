(function($){
	$('.botonera').on('click', 'a', function(e) {
		e.preventDefault();
		
		var $this = $(this);

		$('.botonera li').removeClass('activo');
		$('.contenido .seccion').css('display', 'none');

		$this.closest('li').addClass('activo');
		$('#' + $this.data('seccion')).css('display', 'block');
	});

	$('.botonera').find('li').first().find('a').click();
})(jQuery);