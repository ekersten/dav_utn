(function() {
	var app = angular.module('experiencias', []);
	

	app.controller('ExperienciasController', function($scope, $http) {
		$scope.data = {};

		$http({
			method: 'GET',
			url: $scope.data_src
		}).success(function(data) {
			$scope.data = data;
		});

	});

})();