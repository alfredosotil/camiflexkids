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

class ViewAlertWidget extends \yii2mod\alert\Alert {

    //put your code here
    public function init() {
        if ($this->useSessionFlash) {
            $session = Yii::$app->getSession();
            $flashes = $session->getAllFlashes();
            foreach ($flashes as $type => $data) {
                $data = (array) $data;
                foreach ($data as $message) {
                    $values = explode('|', $message);
                    $this->options['type'] = $type;
                    $this->options['title'] = $values[0];
                    $this->options['text'] = $values[1];
                    $this->options['timer'] = 2500;
                    $this->options['confirmButtonText'] = $values[2];
                }
                $session->removeFlash($type);
            }
        } else {
            if (!$this->hasTitle()) {
                throw new InvalidConfigException("The 'title' option is required.");
            }
        }
    }

    public function run() {
        $this->registerAssetsModified();
    }

    public function registerAssetsModified() {
        $view = $this->getView();
//        \yii2mod\alert\AlertAsset::register($view);
        $js = "setTimeout(function(){sweetAlert({$this->getOptions()}, {$this->callback});},1500);";
        $view->registerJs($js);
    }

}
