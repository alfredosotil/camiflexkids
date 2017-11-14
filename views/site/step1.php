<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribers-form container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <h1>
                <span class="caption-subject font-red bold uppercase">Datos personales</span>
            </h1><br>
            <?php
            $form = ActiveForm::begin([
                        'id' => 'subscriber-form-simulator',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
//                        'method' => 'post',
//                        'action' => '',
                        'layout' => 'horizontal',
                        'options' => ['onsubmit' => 'return false;']
//                        'validateOnSubmit' => false,
            ]);
            ?>  

            <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

            <?php echo $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
        <div class="list-inline">
            <?php
            \demogorgorn\ajax\AjaxSubmitButton::begin([
                'encodeLabel' => false,
                'tagName' => 'a',
                'label' => 'Validar  <i class="fa fa-angle-right"></i>',
                'ajaxOptions' => [
                    'type' => 'POST',
                    'url' => 'simulator',
                    'data' => new \yii\web\JsExpression('
                            $("#subscriber-form-simulator").serialize()
                    '),
                    'beforeSend' => new \yii\web\JsExpression('
                            function(xhr){
                            }
                    '),
                    'success' => new \yii\web\JsExpression('
                            function(data){
                                console.log(data);
                                    $("#subscriber-form-simulator").data("yiiActiveForm").submitting = true;
                                    $("#subscriber-form-simulator").yiiActiveForm("validate");
                                    if(!data.hasError){
                                        $("#stepwizard_step1_next").click();
                                    }
                                return false;
                            }
                    '),
                ],
                'options' => ['class' => 'btn btn-block btn-outline green button-next'],
            ]);
            \demogorgorn\ajax\AjaxSubmitButton::end();
            ?>
            <?php // echo Html::submitButton(Yii::t('app', 'Validar  <i class="fa fa-angle-right"></i>'), ['class' => 'btn btn-block btn-outline green button-next'])  ?>
        </div>
    </div>
</div>
