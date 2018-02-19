<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="order-index">

    <h1><?php echo Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?php
        echo Html::a(Yii::t('app', 'Create {modelClass}', [
                'modelClass' => 'Order',
            ]), ['create'], ['class' => 'btn btn-success'])

        ?>
    </p>
    <?php \yii\widgets\Pjax::begin(['enablePushState' => false, 'timeout' => 3000]); ?>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'amount',
            'ship_name',
            'ship_address',
//            'departament',
//             'province',
            // 'district',
            // 'country',
            'phone',
            // 'fax',
            'email:email',
            // 'shipping',
            // 'tax',
            'created_at:datetime',
            'updated_at:datetime',
            // 'shipped',
            'tracking_number',
            'ispaid',
            // 'typepayment',
            // 'notes',
            'active',
            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
            ],
        ],
    ]);

    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
