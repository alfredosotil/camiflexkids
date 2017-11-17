<?php
/* @var $this yii\web\View */

//use app\assets\AngularAsset;

$this->title = 'View Cart';
//AngularAsset::register($this);
?>
<div class="row-correction"></div>
<div class="container">
    <?php
    echo \yii2mod\cart\widgets\CartGrid::widget([
        // Some widget property maybe need to change. 
        'cartColumns' => [
            'uniqueid',
            'label',
            'price',
            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
                    //delete button
                    'delete' => function ($url, $model) {
                        return \yii\helpers\Html::a('<span class="glyphicon glyphicon-trash"></span>', ['site/deletedetailorder', 'id' => $model->detailorderuniqueid], [
                                    'title' => Yii::t('app', 'Eliminar'),
                                    'data' => [
                                        'confirm' => 'Are you sure? ',
                                        'method' => 'post',
                                    ],
//                                    'class' => 'btn btn-primary btn-xs',
                        ]);
                    },
                ],
            ],
        ]
    ]);
    ?>
    <a href="<?= \yii\helpers\Url::toRoute(['site/checkout']) ?>" class="btn btn-block btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
</div>