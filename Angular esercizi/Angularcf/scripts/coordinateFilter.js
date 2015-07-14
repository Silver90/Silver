(function () {
    'use strict';
    angular
        .module('angular-coordinates')
        .filter('coordinateFilter', coordinateFilter);

    function coordinateFilter($sce) {
        return function (coordinate, conversion, type, places) {
            if (coordinate != undefined) {
                var pattern = /[-+]?[0-9]*\.?[0-9]+/g
                var match = coordinate.match(pattern);
                if (conversion === "toDD" && match && coordinateIsValid(match, type)) {
                    if (match.length === 1) {
                        return parseFloat(match);
                    }
                    if (match.length === 3) {
                        return toDecimalDegrees(match);
                    }
                }
                else if (conversion === 'toDMS' && match && coordinateIsValid(match, type)) {
                    if (match.length === 1) {
                        return toDegreesMinutesSeconds(match);
                    }
                    if (match.length === 3) {
                        return $sce.trustAsHtml(match[0] + '&deg; ' + match[1] + '&prime; ' + match[2] + '&Prime; ');
                    }
                }
                else if (!coordinateIsValid(match, type)) {
                    return "Coordinate invalide!";
                }
                function toDecimalDegrees(coord) {
                    var degrees = parseInt(coord[0]);
                    var minutes = parseInt(coord[1]) / 60;
                    var seconds = parseInt(coord[2]) / 3600;

                    if (degrees < 0) {
                        var calculated = degrees - minutes - seconds;
                        return calculated.toFixed(places || 4);
                    }
                    else {
                        var calculated = degrees + minutes + seconds
                        return calculated.toFixed(places || 4);
                    }
                }

                function toDegreesMinutesSeconds(coordinate) {
                    var degrees = coordinate[0].split('.')[0];
                    var minutes = Math.abs(Math.floor(60 * (Math.abs(coordinate[0]) - Math.abs(degrees))));
                    var seconds = 3600 * (Math.abs(coordinate[0]) - Math.abs(degrees) - Math.abs(minutes) / 60).toFixed(2);

                    return $sce.trustAsHtml(degrees + '&deg; ' + minutes + '&prime; ' + seconds + '&Prime; ');
                }

                function coordinateIsValid(coordinate, type) {
                    if (coordinate) {
                        if (coordinate[0] && type === 'lat') {
                            if (!parseInt(coordinate[0]).between(-90, 90)) return false;
                        }
                        else if (coordinate[0] && type === 'lon') {
                            if (!parseInt(coordinate[0]).between(-180, 180)) return false;
                        }
                        if (coordinate[1]) {
                            if (!parseInt(coordinate[1]).between(0, 60)) return false;
                        }
                        if (coordinate[2]) {
                            if (!parseInt(coordinate[2]).between(0, 60)) return false;
                        }
                    }
                    return true;
                }
            }
        }
    }
})();
