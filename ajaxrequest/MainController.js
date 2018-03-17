app.controller('MainController',['$scope',function($scope){
  $scope.title = 'My First MVC App';
  $scope.promo = 'Promo this is'
  $scope.product = {
    	name: 'The Book of Trees',
    	price: 19
  }
}]);