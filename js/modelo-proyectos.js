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
		when('/buscar/:texto', {
			templateUrl: 'includes/modelo-resultados.html',
			controller: 'ResultadosController'
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

	});

	app.controller('ProyectosController', function($scope, $http, $rootScope, $routeParams) {
		$scope.categoryFilter = $routeParams.categoria_slug;
		$http({
			method: 'GET',
			url: $scope.$parent.projects_src
		}).success(function(data) {
			$scope.proyectos = data;
		});

		$http({
			method: 'GET',
			url: $scope.$parent.categories_src
		}).success(function(data) {
			$scope.categorias = data;
			for (var i=0; i < $scope.categorias.length; i++) {
				if ($scope.categorias[i].slug === $routeParams.categoria_slug) {
					$scope.category = $scope.categorias[i];
					break;
				}
			}
		});
	});

	app.controller('BuscadorController', function($scope) {
		$scope.doSearch = function(e) {
			e.preventDefault();
			window.location.hash = '/buscar/' + $scope.texto;
		};
	});

	app.controller('ResultadosController', function($scope, $http, $rootScope, $routeParams) {
		$scope.texto = $routeParams.texto;
		$http({
			method: 'GET',
			url: $scope.$parent.projects_src
		}).success(function(data) {
			$scope.proyectos = data;
		});

		$scope.searchFilter = function(item) {
			var match_nombre = false,
				match_herramienta = false,
				match_autor = false,
				match_institucion = false,
				i;

			match_nombre = item.nombre.toLowerCase().indexOf($scope.texto.toLowerCase()) >= 0;
			match_herramienta = item.herramienta.toLowerCase().indexOf($scope.texto.toLowerCase()) >= 0;

			for (i = 0; i < item.autores.length; i++) {
				if (item.autores[i].nombre.toLowerCase().indexOf($scope.texto.toLowerCase()) >= 0) {
					match_autor = true;
					break;
				}
			}

			match_institucion = item.institucion.nombre.toLowerCase().indexOf($scope.texto.toLowerCase()) >= 0 || item.institucion.ubicacion.toLowerCase().indexOf($scope.texto.toLowerCase()) >= 0;

			return match_nombre || match_herramienta || match_autor || match_institucion;

		};
	});

})();