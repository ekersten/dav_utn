(function() {
	var app = angular.module('proyectos', []);
	

	app.controller('ProyectosController', function($scope, $http) {
		$scope.data = {};
		$scope.tabs = [];
		$http({
			method: 'GET',
			url: $scope.data_src
		}).success(function(data) {
			$scope.data = data;
		});

		$scope.tabClick = function(tab) {
			$('.proyectos .tab').removeClass('activa');
			$('#tab-' + tab).addClass('activa');
		}
	});
})();