function MencionesCtrl($scope, $http) {
	$scope.data = {};
	$http({
		method: 'GET',
		url: 'data/menciones.json'
	}).success(function(data) {
		$scope.data = data;
	});
}