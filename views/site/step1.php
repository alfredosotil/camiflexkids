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
                        'enableAjaxValidation' => true,
                        'method' => 'post',
                        'action' => 'simulator',
                        'layout' => 'horizontal'
            ]);
            ?>

            <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

            <?php echo $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

            <div class="form-group">
                <?php echo Html::submitButton(Yii::t('app', 'Validar  <i class="fa fa-angle-right"></i>'), ['class' => 'btn btn-block btn-outline green button-next']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
