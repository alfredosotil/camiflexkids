<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Compra Completada';
//app\assets\AngularAsset::register($this);
//app\assets\CulqiAsset::register($this);
?>
<div class="row-correction"></div>

<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
    <div class="container">
        <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold"><?= Yii::t('app', 'Compra completada!') ?></h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="c-theme-bg">
                <p class="c-message c-center c-font-white c-font-20 c-font-sbold">
                    <i class="fa fa-check"></i> <?= Yii::t('app', 'Gracias tu orden ha sido procesada!') ?>
                </p>
            </div>
            <!-- BEGIN: ORDER SUMMARY -->
            <div class="row c-order-summary c-center">
                <ul class="c-list-inline list-inline">
                    <li>
                        <h3><?= Yii::t('app', 'Número de Rastreo de Orden') ?></h3>
                        <p>#<?= $order->tracking_number ?></p>
                    </li>
                    <li>
                        <h3><?= Yii::t('app', 'Fecha de compra') ?></h3>
                        <p><?php echo Yii::$app->formatter->asDatetime($order->created_at) ?></p>
                    </li>
                    <li>
                        <h3><?= Yii::t('app', 'Total pagado') ?></h3>
                        <p>S./ <?= $order->amount ?></p>
                    </li>
                    <!--                    <li>
                                            <h3><?= Yii::t('app', 'Tipo de pago') ?></h3>
                                            <p><?= Yii::t('app', 'Transferencia Bancaria') ?></p>
                                        </li>-->
                </ul>
            </div>
            <!-- END: ORDER SUMMARY -->
            <!-- BEGIN: BANK DETAILS -->
            <!--            <div class="c-bank-details c-margin-t-30 c-margin-b-30">
                            <p class="c-margin-b-20"><?= Yii::t('app', 'Por favor usa tu número de orden como referencia de pago.') ?></p>
            
                            <h3 class="c-margin-t-40 c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">OUR BANK DETAILS</h3>
                            <h3 class="c-border-bottom">Account Name : &nbsp;<span class="c-font-thin">Themehats</span></h3>
                            <ul class="c-list-inline list-inline">
                                <li>
                                    <h3>Account Number</h3>
                                    <p>12345678901234567</p>
                                </li>
                                <li>
                                    <h3>Sort Code</h3>
                                    <p>123</p>
                                </li>
                                <li>
                                    <h3>Bank</h3>
                                    <p>Bank Name</p>
                                </li>
                                <li>
                                    <h3>BIC</h3>
                                    <p>12345</p>
                                </li>
                            </ul>
                        </div>-->
            <!-- END: BANK DETAILS -->
            <!-- BEGIN: ORDER DETAILS -->
            <div class="c-order-details">
                <div class="c-border-bottom hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold"><?= Yii::t('app', 'Producto') ?></h3>
                        </div>
                        <div class="col-md-5">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold"><?= Yii::t('app', 'Descripción') ?></h3>
                        </div>
                        <div class="col-md-2">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold"><?= Yii::t('app', 'Precio Unitario') ?></h3>
                        </div>
                        <div class="col-md-2">
                            <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold"><?= Yii::t('app', 'Total') ?></h3>
                        </div>
                    </div>
                </div>
                <?php foreach ($detailorders as $value): ?>
                    <!-- BEGIN: PRODUCT ITEM ROW -->                
                    <div class="c-border-bottom c-row-item">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 c-image">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="<?= \yii\helpers\Url::toRoute(['site/productdetail', 'id' => $value->product->id]) ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver detalle</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                        <div class="mat-color" style="height: 50px; width: 100%; border:black solid 1px; background-color: <?= $value->product->color ?>;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <ul class="c-list list-unstyled">
                                    <li class="c-margin-b-25"><a href="<?= \yii\helpers\Url::toRoute(['site/productdetail', 'id' => $value->product->id]) ?>" class="c-font-bold c-font-22 c-theme-link"><?= $value->product->name ?></a></li>
                                    <!--<li class="c-margin-b-10">Color: <?= $value->product->color ?></li>-->
                                    <li>Cantidad: x<?= $value->qty ?></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Precio unitario</p>
                                <p class="c-font-sbold c-font-uppercase c-font-18">S./ <?= $value->price_per_unit ?></p>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Total</p>
                                <p class="c-font-sbold c-font-18">S./ <?= $value->price ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- END: PRODUCT ITEM ROW -->
                <?php endforeach; ?>

                <div class="c-row-item c-row-total c-right">
                    <ul class="c-list list-unstyled">
<!--                        <li>
                            <h3 class="c-font-regular c-font-22">Subtotal : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">$80.00</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="c-font-regular c-font-22">Shipping Fee : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">$15.00</span>
                            </h3>
                        </li>-->
                        <li>
                            <h3 class="c-font-regular c-font-22">Gran Total : &nbsp;
                                <span class="c-font-dark c-font-bold c-font-22">S./ <?= $order->amount ?></span>
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: ORDER DETAILS -->
            <!-- BEGIN: CUSTOMER DETAILS -->
            <div class="c-customer-details row" data-auto-height="true">
                <div class="col-md-6 col-sm-6 c-margin-t-20">
                    <div data-height="height" style="height: 164px;">
                        <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Detalle de Cliente</h3>
                        <ul class="list-unstyled">
                            <li>Usuario: <?= $order->user->username ?></li>
                            <li>Teléfono: <?= $order->phone ?></li>
                            <!--<li>Fax: 800 123 3456</li>-->
                            <li>Correo: <a href="mailto:<?= $order->email ?>" class="c-theme-color"><?= $order->email ?></a></li>
                            <!--<li>Skype: <span class="c-theme-color">jango</span></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 c-margin-t-20">
                    <div data-height="height" style="height: 164px;">
                        <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Dirección</h3>
                        <ul class="list-unstyled">
                            <li>
                                <?= $order->ship_address ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: CUSTOMER DETAILS -->
        </div>
    </div>
</div>
