<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'name') ?>

    <?php echo $form->field($model, 'sku') ?>

    <?php echo $form->field($model, 'price') ?>

    <?php echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'cart_desc') ?>

    <?php // echo $form->field($model, 'short_desc') ?>

    <?php // echo $form->field($model, 'long_desc') ?>

    <?php // echo $form->field($model, 'thumb') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('product', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('product', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
