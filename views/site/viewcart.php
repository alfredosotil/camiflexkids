<?php
/* @var $this yii\web\View */

//use app\assets\AngularAsset;

$this->title = 'View Cart';

?>
<div class="row-correction"></div>
<div class="container">
    <?php if (count(Yii::$app->cart->getItems()) > 0): ?>
        <?php
        echo \yii2mod\cart\widgets\CartGrid::widget([
            // Some widget property maybe need to change. 
            'cartColumns' => [
//                [
//                    'attribute' => 'uniqueid',
//                    'label' => 'Codigo detalle',
//                ],
                [
                    'attribute' => 'label',
                    'label' => 'Color',
                ],
                [
                    'attribute' => 'qty',
                    'label' => 'Cantidad',
                ],
                [
                    'attribute' => 'price',
                    'label' => 'Precio',
                ],
                [
                    'header' => 'Borrar',
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
    <?php else: ?>
        <div class="c-shop-cart-page-1 c-center">
            <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
            <h2 class="c-font-thin c-center">Tu carrito de compra esta vac&iacute;o</h2>
            <a href="<?= \yii\helpers\Url::toRoute(['site/products']) ?>" class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">Contin&uacute;a comprando</a>
        </div>
    <?php endif; ?>    
</div>