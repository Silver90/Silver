'use strict';

/**
 * @ngdoc function
 * @name firstappApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the firstappApp
 */
angular.module('firstappApp')
    .controller('MainCtrl', function ($scope) {
        $scope.awesomeThings = [
            'HTML5 Boilerplate',
            'AngularJS',
            'Karma'
        ];
    });
