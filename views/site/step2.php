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
        <div class="col-lg-4">
            <h1>
                <span class="caption-subject font-red bold uppercase">Escoge el metraje</span>
            </h1>
            <p class="step-title">Para esta simulacion se realiza maximo 10 de altura y anchura</p>
            <br>
            <div class="form-inline">
                <div class="form-group">
                    <?= Html::label('Altura', 'floor-height') ?>
                    <?= Html::dropDownList('floor-height', null, [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10], ['prompt' => 'Selecciona', 'ng-model' => 'length']); ?>
                </div>
                <div class="form-group">
                    <?= Html::label('Anchura', 'floor-width') ?>
                    <?= Html::dropDownList('floor-width', null, [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10], ['prompt' => 'Selecciona', 'ng-model' => 'width']); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div id="floor-mats-simulation">    
                <p ng-cloak>{{totalMats| number}} Mats</p>
                <table style="width:100%">
                    <tbody>
                        <tr ng-repeat="row in cells track by $index">
                            <td ng-repeat="cell in row track by $index" ng-click="readwidth($event)" set-height>
                                {{cell}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
