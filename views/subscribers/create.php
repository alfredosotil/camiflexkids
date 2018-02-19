<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */

$this->title = Yii::t('app', 'Create {modelClass}', [
        'modelClass' => 'Subscribers',
    ]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscribers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="subscribers-create">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php
    echo $this->render('_form', [
        'model' => $model,
    ])

    ?>

</div>
