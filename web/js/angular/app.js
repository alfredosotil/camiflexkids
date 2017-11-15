/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

angular.module('camiflexkids-app', [
    'ngAnimate',
//    'ngRoute'
    'camiflexkids-app.services',
    'camiflexkids-app.directives',
    'camiflexkids-app.controllers',
])
        .config(httpproviderconfig);

httpproviderconfig.$inject = ['$httpProvider'];
function httpproviderconfig($httpProvider) {
    $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    $httpProvider.defaults.headers.common['X-CSRF-Token'] = $('meta[name="csrf-token"]').attr('content');
}