var app = angular.module('stud-track', ['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/dashboard',{
    templateUrl:'dashboard.html'
  });



});
