<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'amount')->textInput() ?>

    <?php echo $form->field($model, 'ship_name')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'ship_address')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'departament')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'province')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'district')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'country')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'shipping')->textInput() ?>

    <?php echo $form->field($model, 'tax')->textInput() ?>

    <?php echo $form->field($model, 'tracking_number')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'created_at')->textInput() ?>

    <?php echo $form->field($model, 'updated_at')->textInput() ?>

    <?php echo $form->field($model, 'shipped')->textInput() ?>

    <?php echo $form->field($model, 'ispaid')->textInput() ?>

    <?php echo $form->field($model, 'active')->textInput() ?>

    <?php echo $form->field($model, 'fax')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'typepayment')->textInput(['maxlength' => 20]) ?>

    <?php echo $form->field($model, 'notes')->textInput(['maxlength' => 500]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
