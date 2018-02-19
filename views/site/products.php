<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Productos Camiflex Kids';

?>
<div class="row-correction"></div>
<div class="container">
    <div class="c-layout-sidebar-content ">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-margin-t-20"></div>

        <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
        <div class="c-bs-grid-small-space">
            <div class="c-content-title-1 wow animated fadeIn">
                <h3 class="c-font-uppercase c-font-bold">Nuestros Colores en Productos</h3>
                <h4 class="c-font-grey-3 c-font-thin c-opacity-09">Te presentamos nuestros colores ¡ARMA TU COMBINACION IDEAL!</h4>
                <div class="c-line-left"></div>
                <!--<h4 class="c-font-grey-3 c-font-thin c-opacity-09">Ellos merecen lo mejor, nosotros lo tenemos</h4>-->
            </div>
            <div class="row">
                <?php foreach (app\models\Product::find()->where(['active' => 1])->all() as $value): ?>
                    <div class="col-md-3 col-sm-12 c-margin-b-20">
                        <div class="c-content-product-2 c-bg-white c-border">
                            <div class="c-content-overlay">
                                <?= ($value->stock > 0) ? '<div class="c-label label-success c-font-uppercase c-font-white c-font-13 c-font-bold">En Stock</div>' : '<div class="c-label label-danger c-font-uppercase c-font-white c-font-13 c-font-bold">No Disponible</div>' ?>
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="<?= Url::toRoute(['site/productdetail', 'id' => $value->id]) ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver Detalle</a>
                                    </div>
                                </div>
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; <?= is_null($value->getFirstimage()) ? "background-color: $value->color;" : "background-image: url(" . $value->getFirstimage() . ");" ?>"></div>
                            </div>
                            <div class="c-info">
                                <p class="c-title c-font-16 c-font-slim"><?= \app\assets\AppAsset::custom_echo($value->short_desc, 45) ?></p>
                                <p class="c-price c-font-14 c-font-slim"><?= $value->price ?> S/.
                                    <span class="c-font-14 c-font-line-through c-font-red"><?= $value->price * 0.2 + $value->price ?> S/.</span>
                                </p>
                            </div>
                            <div class="btn-group btn-group-justified" role="group">                            
                                <div class="btn-group c-border-left c-border-top" role="group">
                                    <a href="<?= Url::toRoute(['site/addtocart', 'id' => $value->id]) ?>" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Agregar al Carrito 3 x 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-2-7 -->

        <!-- END: PAGE CONTENT -->
    </div>
</div>
