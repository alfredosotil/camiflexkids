<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = Yii::t('product', 'Update {modelClass}: ', [
    'modelClass' => 'Order',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('product', 'Update');
?>
<div class="order-update">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
