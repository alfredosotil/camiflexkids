<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="form-group">
        <?php
        if ($model->isNewRecord) {
            echo '<h2><span class="label label-warning">Can not upload images for new record</span></h2>';
        } else {
            echo zxbodya\yii2\galleryManager\GalleryManager::widget(
                    [
                        'model' => $model,
                        'behaviorName' => 'galleryBehavior',
                        'apiRoute' => 'slider/galleryApi'
                    ]
            );
        }
        ?>
    </div>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'short_desc')->textInput(['maxlength' => 100]) ?>

    <?php echo $form->field($model, 'long_desc')->textInput(['maxlength' => 250]) ?>

    <?php echo $form->field($model, 'active')->textInput() ?>

    <?php echo $form->field($model, 'created_at')->textInput() ?>

    <?php echo $form->field($model, 'updated_at')->textInput() ?>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
