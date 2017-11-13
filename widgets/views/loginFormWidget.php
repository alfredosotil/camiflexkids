<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

//$this->title = Yii::t('yii2mod.user', 'Login');
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold"><?php echo Yii::t('yii2mod.user', 'Good Afternoon!'); ?></h3>
                <p><?php echo Yii::t('yii2mod.user', 'Let\'s make today a great day!'); ?></p>
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo Html::encode($this->title); ?></h1>
                        <p><?php echo Yii::t('yii2mod.user', 'Please fill out the following fields to login:'); ?></p>
                        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'modal-login-form',
                            'enableAjaxValidation' => true,
                                    'method' => 'post',
                                    'action' => ['site/login'],
                        ]);
                        ?>
                        <?php echo $form->field($model, 'email', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Your email'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'password', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Your password'), 'class' => 'form-control c-square c-theme input-lg']])->passwordInput(); ?>
                        <?php echo $form->field($model, 'rememberMe', ['inputOptions' => ['class' => 'c-check'], 'template' => '<div class="c-checkbox">{input}{error}{hint}{beginLabel}<span></span><span class="check"></span><span class="box"></span>{labelTitle}{endLabel}</div>'])->checkbox([], false); ?>
                        <div class="form-group">
                            <a href="#" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot"><?= Yii::t('yii2mod.user', 'Forgot your password?'); ?></a>
                            <?php echo Html::submitButton(Yii::t('yii2mod.user', 'Login'), ['class' => 'btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login', 'name' => 'login-button']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer c-no-border">                
                <span class="c-text-account"><?php echo Yii::t('yii2mod.user', 'Don\'t Have An Account Yet ?'); ?></span>
                <a href="#" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/LOGIN-FORM -->
