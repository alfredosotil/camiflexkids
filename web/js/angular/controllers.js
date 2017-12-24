/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

angular.module('camiflexkids-app.controllers', [])
        .controller('MainController', ['$scope', '$http', function ($scope, $http) {
                $scope.test = 'alfredod';
                $scope.cells = [[]];
                $scope.details = [];
                $scope.length = '3';
                $scope.width = '3';
                $scope.totalMats = 9;
                $scope.color = '';
                $scope.$watch('[width,length,color]', makeMap, true);
                $scope.setColor = function ($event) {
//                    $scope.totalMats = $scope.floorwidth * $scope.floorheight;
//                    console.log($event.currentTarget.offsetWidth);
                    $($event.currentTarget).css('background-color', $scope.color);
                    updateDetails();
//                    console.log($scope.color);
//                    console.log(getColorMats());
                };
                $scope.addtocart = function () {
//                    var param = '_csrf';
//                    var token = yii.getCsrfToken();
//                    console.log({_csrf: token});
//                    console.log($('meta[name="csrf-token"]').attr('content'));
                    var l = Ladda.create(document.querySelector('#stepwizard_step4_save'));
//                    var l = $('#stepwizard_step4_save').ladda();
                    l.start();
                    $http.post("addarraytocart", {'details': $scope.details}).then(function successCallback(response) {
                        // this callback will be called asynchronously
                        // when the response is available
//                        $scope.data = response.data;
                        l.stop();
                        console.log(response.data);
                        if (response.data.successAjax) {
                            swal({
                                title: 'Bien!!',
                                text: 'El detalle fue agregado al carrito!',
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Continuar',
                                allowOutsideClick: true,
                            }, (result) => {
                                if (result) {
                                    window.location.href = response.data.redirect;
                                }
                            });
                        } else {
                            swal({
                                title: 'Error',
                                text: 'El detalle NO fue agregado al carrito!',
                                type: 'error',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Continuar',
                                allowOutsideClick: true,
                            });
                        }
                    }, function errorCallback(response) {
                        // called asynchronously if an error occurs
                        // or server returns response with an error status.
                        console.log(response.statusText);
                    });


                };
                function updateDetails() {
                    $scope.details = [];
                    var colorMats = getColorMats();
                    colorMats.forEach(function (item, index) {
                        var cont = $('.mat').filter(function () {
                            var colors = [item.hexc, item.rgb];
                            return $.inArray($(this).css('background-color'), colors) !== -1;
                        }).length;
                        $scope.details.push({
                            color: item.hexc,
                            quantity: cont
                        })
                    });
                    console.log($scope.details);
                }
//                $scope.style = function ($event) {
//                    console.log($event);
//                    return {
////                        'height': ($event.currentTarget.offsetWidth) + 'px',
//                    }
//                };
                function getColorMats() {
                    var colors = [];
                    $('.mat').each(function (index, value) {
                        var color_rgb = $(this).css("background-color");
                        var color_hexc = hexc(color_rgb);
                        var existe = colors.some(function (item) {
                            return item.hexc.includes(color_hexc);
                        });
                        if (!existe) {
                            colors.push({rgb: color_rgb, hexc: color_hexc});
                        }
                    });
                    return colors;
                }
                function hexc(colorval) {
                    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                    delete(parts[0]);
                    for (var i = 1; i <= 3; ++i) {
                        parts[i] = parseInt(parts[i]).toString(16);
                        if (parts[i].length == 1)
                            parts[i] = '0' + parts[i];
                    }
                    var color = '#' + parts.join('');
                    return color;
                }
                function makeMap() {
                    var cols = $scope.width,
                            rows = $scope.length;
                    console.log('makeMap');
                    $scope.cells = matrix(rows, cols, 'cell');
                    $scope.totalMats = $scope.width * $scope.length;
                    updateDetails();
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
                Array.prototype.sum = function (prop) {
                    var total = 0
                    for (var i = 0, _len = this.length; i < _len; i++) {
                        total += this[i][prop]
                    }
                    return total
                }
            }]);

