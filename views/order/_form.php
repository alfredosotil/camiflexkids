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

    <?php echo $form->field($model, 'city')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'state')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'zip')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'country')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'fax')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'shipping')->textInput() ?>

    <?php echo $form->field($model, 'tax')->textInput() ?>

    <?php echo $form->field($model, 'created_at')->textInput() ?>

    <?php echo $form->field($model, 'updated_at')->textInput() ?>

    <?php echo $form->field($model, 'tracking_number')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'shipped')->textInput() ?>

    <?php echo $form->field($model, 'active')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('product', 'Create') : Yii::t('product', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
