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

	$('#form_encuesta').on('submit', function(e) {
		e.preventDefault();
		e.stopPropagation();

		var $this = $(this);

		$.ajax({
			url: 'send_data.php',
			type: 'post',
			dataType: 'json',
			data: $this.serialize(),
			success:function(data, textStatus, jqXHR){
				$this.trigger("reset");
				alert('Gracias por completar la encuesta');
			},
			error:function(jqXHR, textStatus, errorThrown){
				
			}
		});
	});
})(jQuery);