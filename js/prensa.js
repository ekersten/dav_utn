(function() {
	var app = angular.module('prensa', []);

	app.controller('PrensaController', function($scope, $http) {
		$scope.data = {};
		$http({
			method: 'GET',
			url: 'data/prensa.json'
		}).success(function(data) {
			$scope.data = data;
		});
	});
})();