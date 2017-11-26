var app = angular.module('stud-track', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "index.html"

  });
});
