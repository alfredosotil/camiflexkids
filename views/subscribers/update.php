<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Subscribers',
    ]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscribers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');

?>
<div class="subscribers-update">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php
    echo $this->render('_form', [
        'model' => $model,
    ])

    ?>

</div>
