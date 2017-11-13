<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\assets;

/**
 * Description of AngularAsset
 *
 * @author asotilp
 */
use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js',
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-resource.min.js',
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-route.min.js',
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-animate.min.js',
        'js/angular/app.js',
        'js/angular/controllers.js',
        'js/angular/directives.js',
        'js/angular/services.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsOptions = [
//        'position' => View::POS_HEAD,
    ];

}
