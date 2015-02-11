(function() {
	var app = angular.module('modeloproyectos', ['ngRoute']);
	
	app.config(['$routeProvider', function($routeProvider) {
		$routeProvider.when('/categorias', {
			templateUrl: 'includes/modelo-categorias.html',
			controller: 'CategoriasController'
		}).
		when('/categoria/:categoria_slug', {
			templateUrl: 'includes/modelo-proyectos.html',
			controller: 'ProyectosController'
		}).
		otherwise({
			redirectTo: '/categorias'
		});
	}]);

	app.controller('CategoriasController', function($scope, $rootScope, $http) {
		$http({
			method: 'GET',
			url: $scope.$parent.categories_src
		}).success(function(data) {
			$scope.categorias = data;
		});

		$scope.setCategory = function(category) {
			$rootScope.category = category;
		};
	});

	app.controller('ProyectosController', function($scope, $http, $rootScope, $routeParams) {
		$scope.categoryFilter = $routeParams.categoria_slug;
		$http({
			method: 'GET',
			url: $scope.$parent.projects_src
		}).success(function(data) {
			$scope.proyectos = data;
		});

		$scope.category = $rootScope.category;
	});

})();