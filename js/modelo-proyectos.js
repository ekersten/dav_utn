/* global window _*/
(function() {
	'use strict';
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
		when('/resultados', {
			templateUrl: 'includes/modelo-proyectos.html',
			controller: 'ResultadosController'
		}).
		otherwise({
			redirectTo: '/categorias'
		});
	}]);

	app.service('Categorias', ['$rootScope', '$http', function($rootScope, $http) {
		var service = {
			items: [],

			getData: function() {
				$http({
					method: 'GET',
					url: 'data/modelo-categorias.json'
				}).success(function(data) {
					service.items = data;
					$rootScope.$emit('categorias.update');
				});
			}
		};

		return service;
	}]);

	app.service('Proyectos', ['$rootScope', '$http', function($rootScope, $http) {
		var service = {
			items: [],

			getData: function() {
				$http({
					method: 'GET',
					url: 'data/modelo-proyectos.json'
				}).success(function(data) {
					service.items = data;
					$rootScope.$emit('proyectos.update');
				});
			}
		};

		return service;
	}]);

	app.controller('MainController', ['$rootScope', '$scope', '$location', 'Categorias', 'Proyectos', function($rootScope, $scope, $location, Categorias, Proyectos) {
		// console.log('main init');
		Categorias.getData();
		Proyectos.getData();

		$scope.$on('$routeChangeSuccess', function() {
			console.log('changed to: ', $location.path());
			if ($location.path() !== '/resultados') {
				// clear previous serach data
				$rootScope.$emit('search.clear');
			}

			if ($location.path() === '/resultados' || $location.path() === '/categorias') {
				$scope.categoria = {};
			}
		});

		$rootScope.$on('categoria.change', function(e, categoria) {
			$scope.categoria = categoria;
		});
	}]);

	app.controller('CategoriasController', function($scope, $rootScope, Categorias) {
		// console.log('categorias init');
		$scope.categorias = Categorias.items;
		$rootScope.$on('categorias.update', function(e) {
			$scope.categorias = Categorias.items;
		});
	});

	app.controller('ProyectosController', ['$rootScope', '$scope', '$routeParams', 'Categorias', 'Proyectos', function($rootScope, $scope, $routeParams, Categorias, Proyectos) {
		// console.log('proyectos init');
		$scope.filterProyectos = function() {
			return _.filter(Proyectos.items, function(proyecto) {
				return proyecto.categoria === $routeParams.categoria_slug;
			});
		};

		$scope.categoria = _.find(Categorias.items, function(categoria) {
			return categoria.slug === $routeParams.categoria_slug;
		});

		$rootScope.$emit('categoria.change', $scope.categoria);

		$scope.proyectos = $scope.filterProyectos();

		$rootScope.$on('proyectos.update', function(e) {
			$scope.proyectos = $scope.filterProyectos();
		});

	}]);

	app.controller('BuscadorController', ['$rootScope', '$scope', '$location', 'Categorias', 'Proyectos', function($rootScope, $scope, $location, Categorias, Proyectos) {
		console.log('buscador init');
		$scope.categorias = Categorias.items;

		$rootScope.$on('categorias.update', function(e) {
			$scope.categorias = Categorias.items;
		});

		$scope.getHerramientas = function() {
			var herramientas = [];
			_.each(Proyectos.items, function(proyecto) {
				herramientas.push(proyecto.herramienta);
			});
			return _.uniq(herramientas);
		};

		$scope.getAnios = function() {
			var anios = [];
			_.each(Proyectos.items, function(proyecto) {
				anios.push(proyecto.anio);
			});
			return _.uniq(anios);
		};

		$scope.herramientas = $scope.getHerramientas();
		$scope.anios = $scope.getAnios();

		$rootScope.$on('proyectos.update', function(e) {
			$scope.herramientas = $scope.getHerramientas();
			$scope.anios = $scope.getAnios();
		});

		$rootScope.$on('search.clear', function(e) {
			$rootScope.searchdata = {};
			$scope.searchdata = {};
			$scope.searchdata.q = ''
			$scope.searchdata.categoria = 'all';
			$scope.searchdata.herramienta = 'all';
			$scope.searchdata.anio = 'all';
		});

		$scope.doSearch = function() {
			$rootScope.searchdata = _.clone($scope.searchdata);
			if ($location.path() === '/resultados') {
				$rootScope.$emit('search.doSearch');
			} else {
				$location.path('resultados');
			}
		};

		if (typeof $rootScope.searchdata !== 'undefined') {
			$scope.searchdata = _.clone($rootScope.searchdata);
		} else {
			$scope.searchdata = {};
			$scope.searchdata.q = ''
			$scope.searchdata.categoria = 'all';
			$scope.searchdata.herramienta = 'all';
			$scope.searchdata.anio = 'all';
		}

	}]);

	app.controller('ResultadosController', ['$rootScope', '$scope', 'Proyectos', function ($rootScope, $scope, Proyectos) {
		console.log('resultados init');

		$scope.filterProyectos = function() {
			return _.filter(Proyectos.items, function(proyecto) {
				var match_nombre = false,
					match_categoria = false,
					match_herramienta = false,
					match_anio = false,
					searchdata = $rootScope.searchdata;

				if (typeof searchdata === 'undefined') {
					return false;
				}

				if(searchdata.q !== '') {
					if (proyecto.nombre.toLowerCase().indexOf(searchdata.q.toLowerCase()) >= 0) {
						match_nombre = true;
					} else {
						match_nombre = false;
					}
				} else {
					match_nombre = true;
				}

				if (searchdata.categoria !== 'all') {
					if (proyecto.categoria === searchdata.categoria) {
						match_categoria = true;
					} else {
						match_categoria = false;
					}
				} else {
					match_categoria = true;
				}

				if (searchdata.herramienta !== 'all') {
					if (proyecto.herramienta === searchdata.herramienta) {
						match_herramienta = true;
					} else {
						match_herramienta = false;
					}
				} else {
					match_herramienta = true;
				}

				if (searchdata.anio !== 'all') {
					if (proyecto.anio === searchdata.anio) {
						match_anio = true;
					} else {
						match_anio = false;
					}
				} else {
					match_anio = true;
				}

				return match_nombre && match_categoria && match_herramienta && match_anio;
			});
		};

		$scope.proyectos = $scope.filterProyectos();

		$rootScope.$on('proyectos.update', function(e) {
			$scope.proyectos = $scope.filterProyectos();
		})

		$rootScope.$on('search.doSearch', function(e) {
			$scope.proyectos = $scope.filterProyectos();
		});

	}]);

})();