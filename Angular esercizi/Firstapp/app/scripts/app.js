'use strict';

/**
 * @ngdoc overview
 * @name firstappApp
 * @description
 * # firstappApp
 *
 * Main module of the application.
 */
angular
    .module('firstappApp', [
        'ngRoute'
    ])
    .config(function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/main.html',
                controller: 'MainCtrl'
            })
            .when('/about', {
                templateUrl: 'views/about.html',
                controller: 'AboutCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });
