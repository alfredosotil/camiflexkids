<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $modelloginform \yii2mod\user\models\LoginForm */

$this->title = Yii::t('yii2mod.user', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page">
    <h1><?php echo Html::encode($this->title); ?></h1>
    <p><?php echo Yii::t('yii2mod.user', 'Please fill out the following fields to login:'); ?></p>
    <div class="row">
        <div class="col-lg-12">
            <?php Pjax::begin(); ?>
            <?php
            $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'method' => 'post',
                        'action' => ['site/login'],
                        'options' => ['data-pjax' => '']
            ]);
            ?>
            <?php echo $form->field($modelloginform, 'email', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Your email'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
            <?php echo $form->field($modelloginform, 'password', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Your password'), 'class' => 'form-control c-square c-theme input-lg']])->passwordInput(); ?>
            <?php echo $form->field($modelloginform, 'rememberMe', ['inputOptions' => ['class' => 'c-check'], 'template' => '<div class="c-checkbox">{input}{error}{hint}{beginLabel}<span></span><span class="check"></span><span class="box"></span>{labelTitle}{endLabel}</div>'])->checkbox([], false); ?>
            <div class="form-group">
                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot"><?= Yii::t('yii2mod.user', 'Forgot your password?'); ?></a>
                <?php echo Html::submitButton(Yii::t('yii2mod.user', 'Login'), ['class' => 'btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login', 'name' => 'login-button']); ?>
            </div>
            <?php ActiveForm::end(); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
