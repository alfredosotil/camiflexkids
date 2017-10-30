/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

/* Directives */


angular.module('camiflexkids-app.directives', []).
        directive('appVersion', ['version', function (version) {
                return function (scope, elm, attrs) {
                    elm.text(version);
                };
            }])
        .directive('setHeight', function ($window) {
            restrict: 'AE',
            return{
                link: function (scope, element, attrs) {
                    console.log('altura' + element[0].offsetWidth);
                    element.css('height', element[0].offsetWidth + 'px');
                    //element.height($window.innerHeight/3);
                }
            }
        })
        ;

