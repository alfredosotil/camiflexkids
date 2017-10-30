/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

angular.module('camiflexkids-app.controllers', [])
        .controller('MainController', ['$scope', function ($scope) {
                $scope.test = 'alfredod';
                $scope.cells = [[]];
                $scope.length = '3';
                $scope.width = '3';
                $scope.totalMats = 9;
                $scope.color = 'black';
                $scope.$watch('[width,length]', makeMap, true);
                $scope.readwidth = function ($event) {
//                    $scope.totalMats = $scope.floorwidth * $scope.floorheight;
//                    console.log($event.currentTarget.offsetWidth);
                    $($event.currentTarget).css('background-color', $scope.color);
                    console.log($scope.color);
                };
//                $scope.style = function ($event) {
//                    console.log($event);
//                    return {
////                        'height': ($event.currentTarget.offsetWidth) + 'px',
//                    }
//                };
                function makeMap() {
                    var cols = $scope.width,
                            rows = $scope.length;
                    console.log('makeMap');
                    $scope.cells = matrix(rows, cols, 'cell');
                    $scope.totalMats = $scope.width * $scope.length;
                }
                function matrix(rows, cols, defaultValue) {
                    var arr = [[]];
                    // Creates all lines:
                    for (var i = 0; i < rows; i++) {
                        // Creates an empty line
                        arr[i] = [];
                        // Adds cols to the empty line:
                        arr[i] = new Array(cols);
                        for (var j = 0; j < cols; j++) {
                            // Initializes:
                            arr[i][j] = defaultValue;
                        }
                    }
                    return arr;
                }
            }]);

