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

class CulqiAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'https://checkout.culqi.com/v2',
        'js/waitMe.min.js',
        'js/Culqi.js',
        'js/jquery.serializejson.min.js',
    ];
    public $css = [
        'css/waitMe.min.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        AppAsset::class,
    ];

}
