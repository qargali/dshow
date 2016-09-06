var app = angular.module("seymur", ['ngRoute']);

app.directive('headNav', function () {
    return {
        templateUrl: "navi/navigation.html"
    }
});

app.config(function($routeProvider){
    $routeProvider
    .when('/register',{
        templateUrl:'navi/register.html'
    }).otherwise({
        templateUrl:'navi/main.html'
    }).when('/daxilol',{
        templateUrl:'navi/daxilol.html'
    }).when('/cart',{
        templateUrl:'navi/cart.html'
    })
});
