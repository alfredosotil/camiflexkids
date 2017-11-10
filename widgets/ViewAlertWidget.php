<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginFormWidget
 *
 * @author asotilp
 */

namespace app\widgets;

use Yii;
use yii\base\Widget;

class ViewAlertWidget extends Widget {

    //put your code here
    public function run() {
        \yii2mod\alert\AlertAsset::register($this);
        $session = Yii::$app->getSession();
        $flashes = $session->getAllFlashes();
        foreach ($flashes as $type => $data) {
            $data = (array) $data;
            foreach ($data as $value) {
                $values = explode('|', $value);
                $this->registerJs("setTimeout(function(){
                    swal('$values[0]', '$values[1]', '$type', { button: '$values[1]'});}, 1500);");
            }
            $session->removeFlash($type);
        }
    }

}
