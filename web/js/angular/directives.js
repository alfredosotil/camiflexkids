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
        .directive("getStyleSquare", function ($window, $timeout) {
            return {
                restrict: 'A',
                link: function (scope, element) {
                    scope.getWidth = function () {
                        return $(element).width();
                    };
                    scope.$watch(scope.getWidth, function (width) {
                        $(element).height(width);
                        $(element).css('border', '5px dashed #000');
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

