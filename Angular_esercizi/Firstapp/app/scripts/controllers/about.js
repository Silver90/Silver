'use strict';

/**
 * @ngdoc function
 * @name firstappApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the firstappApp
 */
angular.module('firstappApp')
    .controller('AboutCtrl', function ($scope) {
        $scope.awesomeThings = [
            'HTML5 Boilerplate',
            'AngularJS',
            'Karma'
        ];
    });
