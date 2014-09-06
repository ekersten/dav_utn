(function() {
	var app = angular.module('experiencias', ['ngSanitize']);
	

	app.controller('ExperienciasController', function($scope, $http) {
		$scope.data = {};

		$http({
			method: 'GET',
			url: $scope.data_src
		}).success(function(data) {
			$scope.data = data;
			setTimeout(function(){
				$('.experiencias').find('.slider').cycle({
					'autoHeight': 'calc',
					'timeout': 4000,
					'pauseOnHover': true,
					'slides': '> .slide',
					// 'sync': false,
					'pager': '.slides-pager'
				});
			}, 100);
		});

	});

})();