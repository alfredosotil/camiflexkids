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

class MapAsset extends AssetBundle {
    
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPWnOu970nrxAY1eApfQb0UKBaxov3zg',
        'plugins/gmaps/gmaps.js',
        'js/contact.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
