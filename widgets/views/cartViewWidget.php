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
?>

<!-- BEGIN: CART MENU -->
<div class="c-cart-menu">
    <!--    <div class="c-cart-menu-title">
            <p class="c-cart-menu-float-l c-font-sbold"><?= count(Yii::$app->cart->getItems()) . Yii::t('yii2mod.user', ' item(s)'); ?> </p>
            <p class="c-cart-menu-float-r c-theme-font c-font-sbold"><?= Yii::$app->cart->getAttributeTotal('vat') . Yii::t('yii2mod.user', ' $'); ?></p>
        </div>
        <ul class="c-cart-menu-items">
            <li>
                <div class="c-cart-menu-close">
                    <a href="#" class="c-theme-link">×</a>
                </div>
                <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/shop2/24.jpg"/>
                <div class="c-cart-menu-content">
                    <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                    <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                </div>
            </li>
            <li>
                <div class="c-cart-menu-close">
                    <a href="#" class="c-theme-link">×</a>
                </div>
                <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/shop2/12.jpg"/>
                <div class="c-cart-menu-content">
                    <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                    <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                </div>
            </li>
        </ul> 
        <div class="c-cart-menu-footer">
            <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
            <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
        </div>-->
    <?php
    echo \yii2mod\cart\widgets\CartGrid::widget([
        // Some widget property maybe need to change. 
        'cartColumns' => [
            'id',
            'label',
            'price'
        ]
    ]);
    ?>
</div>
<!-- END: CART MENU -->
