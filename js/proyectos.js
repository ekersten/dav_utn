(function() {
	var app = angular.module('proyectos', ['ngSanitize']);
	

	app.controller('ProyectosController', function($scope, $http) {
		$scope.data = {};
		$scope.tabs = [];
		$http({
			method: 'GET',
			url: $scope.data_src
		}).success(function(data) {
			$scope.data = data;
			setTimeout(function(){
				$scope.tabClick(0);
			}, 100);
			
		});

		$scope.tabClick = function(tab) {
			$('.proyectos .tab').removeClass('activa');
			$('.proyectos .tab-content').css('display', 'none');
			$('#tab-' + tab).addClass('activa');
			$('#tab-content-' + tab).css('display', 'block');
			$('#tab-content-' + tab).find('.inner').css('height', 'auto');
			$('#tab-content-' + tab).find('.inner').equalizeHeights();
		};
	});

	$(window).resize(function(){
		$('.proyectos .tab-content .inner').css('height', 'auto');
		$('.proyectos .tab-content .inner').equalizeHeights();
	});
})();