/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

/* Directives */

var scopeApplyContainer;
angular.module('camiflexkids-app.directives', []).
        directive('appVersion', ['version', function (version) {
                return function (scope, elm, attrs) {
                    elm.text(version);
                };
            }])
        .directive('square', function ($window, $timeout) {
            return {
                restrict: 'A',
                link: function (scope, element) {
                    scope.getWidth = function () {
                        return $(element).width();
                    };

                    scope.$watch(scope.getWidth, function (width) {
                        element.height(width);
                    }, true);

                    angular.element($window).bind('resize', function () {
                        $timeout.cancel(scopeApplyContainer);
                        scopeApplyContainer = $timeout(function () {
                            scope.$apply();
                        }, 1, false);
                    });
                }
            };
        })
        .directive("getStyleSquare", function ($window, $timeout) {
            return {
                restrict: 'A',
                link: function (scope, element) {
                    scope.getWidth = function () {
                        return $(element).width();
                    };

                    scope.$watch(scope.getWidth, function (width) {
                        $(element).height(width);
//                        element[0].style.height = width + 'px';
//                        element[0].style.border = "5px dotted #000";
                        element[0].style.border = "5px dashed #000";
                    }, true);

                    angular.element($window).bind('resize', function () {
                        $timeout.cancel(scopeApplyContainer);
                        scopeApplyContainer = $timeout(function () {
                            scope.$apply();
                        }, 1, false);
                    });
                }
            };
        })
        ;

