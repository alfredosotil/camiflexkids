<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribers-form container">
    <div class="row">
        <div class="col-lg-10">
            <h1>
                <span class="caption-subject font-red bold uppercase">Agrega el detalle al carrito de compras</span>
            </h1>
            <br>
        </div>        
    </div>    
    <div class="row">
        <div class="list-inline">
            <button ng-click="addtocart()" type="button" id="stepwizard_step4_save" class="ladda-button btn btn-block btn-outline green button-next btn-outline green button-next next-step" data-spinner-color="red" data-style="zoom-in"><span class="ladda-label">Continuar <i class="fa fa-shopping-cart"></i></span></button>
        </div>
    </div>
</div>   