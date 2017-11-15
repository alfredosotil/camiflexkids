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
                <span class="caption-subject font-red bold uppercase">Escoge el metraje</span>
            </h1>
            <p class="step-title">Te mostramos el detalle de la simulacion</p>
            <br>
        </div>        
    </div>    
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div id="floor-mats-simulation">          
                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="row in details track by $index">
                                <td style="background-color: {{row.color}}">
                                    &nbsp;
                                </td>
                                <td>
                                    {{row.quantity}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>total mats</strong>
                                </td>
                                <td>
                                    <strong>{{details.sum('quantity')}}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   