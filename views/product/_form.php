<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'sku')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'price')->textInput() ?>


    <?php echo $form->field($model, 'thumb')->textInput(['maxlength' => 60]) ?>

    <?php echo $form->field($model, 'image')->textInput(['maxlength' => 60]) ?>

    <!--?php echo $form->field($model, 'category_id')->textInput() ?-->
    <?php echo $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(app\models\Category::find()->all(), 'id', 'name')) ?>

    <!--?php echo $form->field($model, 'created_at')->textInput() ?-->

    <!--?php echo $form->field($model, 'updated_at')->textInput() ?-->

    <?php echo $form->field($model, 'stock')->textInput() ?>

    <?php echo $form->field($model, 'weight')->textInput() ?>

    <?php
    echo $form->field($model, 'color')->widget(kartik\color\ColorInput::classname(), [
        'options' => ['placeholder' => 'Select color ...'],
    ]);
    ?>

    <?php echo $form->field($model, 'cart_desc')->textInput(['maxlength' => 32]) ?>

    <?php echo $form->field($model, 'short_desc')->textInput(['maxlength' => 100]) ?>

    <?php echo $form->field($model, 'long_desc')->textInput(['maxlength' => 250]) ?>

    <?php echo $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?php
        if ($model->isNewRecord) {
            echo '<h2><span class="label label-warning">Can not upload images for new record</span></h2>';
        } else {
            echo zxbodya\yii2\galleryManager\GalleryManager::widget(
                    [
                        'model' => $model,
                        'behaviorName' => 'galleryBehavior',
                        'apiRoute' => 'product/galleryApi'
                    ]
            );
        }
        ?>
    </div>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('product', 'Create') : Yii::t('product', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
