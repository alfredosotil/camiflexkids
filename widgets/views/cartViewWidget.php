<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

//$this->title = Yii::t('yii2mod.user', 'Login');
//$this->params['breadcrumbs'][] = $this->title;
$items = Yii::$app->cart->getItems();
//Yii::$app->cart->clear();

//$product = app\models\Product::findOne(1);
//$detail = new \app\models\Detailorder();
//$detail->name = 'test detail';
//$detail->qty = 3;
//$detail->price_per_unit = $product->price;
//$detail->price = $detail->price_per_unit * $detail->qty;
//$detail->vat = $detail->price + $detail->tax;
//$detail->product_id = $product->id;
//Yii::$app->cart->add($detail);
?>

<!-- BEGIN: CART MENU -->
<div class="c-cart-menu">
    <div class="c-cart-menu-title">
        <p class="c-cart-menu-float-l c-font-sbold"><?= count(Yii::$app->cart->getItems()) . Yii::t('yii2mod.user', ' item(s)'); ?> </p>
        <p class="c-cart-menu-float-r c-theme-font c-font-sbold"><?= Yii::$app->cart->getAttributeTotal('vat') . Yii::t('yii2mod.user', ' $'); ?></p>
    </div>
    <ul class="c-cart-menu-items">
        <?php foreach ($items as $value): ?>
            <li>
                <div class="c-cart-menu-close">
                    <a href="#" class="c-theme-link">×</a>
                </div>
                <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/shop2/24.jpg"/>
                <div class="c-cart-menu-content">
                    <p><?= $value->qty ?> x <span class="c-item-price c-theme-font"><?= $value->price_per_unit ?></span></p>
                    <p>Total detalle <?= $value->price ?></p>
                    <a href="<?= \yii\helpers\Url::toRoute(['site/productdetail', 'id' => $value->product->id]) ?>" class="c-item-name c-font-sbold">Winter Coat</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul> 
    <div class="c-cart-menu-footer">
        <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
        <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
    </div>
</div>
<!-- END: CART MENU -->
