(function() {
	$('.fancybox').fancybox({
		openEffect: 'fade',
		closeEffect: 'fade',
		type: 'image',
		loop: false,
		afterLoad: function(current, previous) {
			var $this = $(current.element),
				colegio = $this.data('colegio'),
				ubicacion = $this.data('ubicacion'),
				mencion = $this.data('mencion'),
				$titleContainer = $('<div></div>'),
				$titleEl = $('<div></div>').addClass('menciones-titulo');

			$titleContainer.append($titleEl);

			if (colegio !== '') {
				$titleEl.append($("<p></p>").addClass('colegio').text(colegio));
			}

			if (ubicacion !== '') {
				$titleEl.append($("<p></p>").addClass('ubicacion').text(ubicacion));
			}

			if (mencion !== '') {
				$titleEl.append($("<p></p>").addClass('mencion').text(mencion));
			}

			this.title = $titleContainer.html();
		},
		helpers : {
			title: {
				type: 'inside'
			},
			overlay : {
				showEarly : true
			}
		}
	});

	var app = angular.module('menciones', []);

	app.controller('MencionesController', function($scope, $http) {
		$scope.data = {};
		$http({
			method: 'GET',
			url: 'data/menciones.json'
		}).success(function(data) {
			$scope.data = data;
		});
	});
})();