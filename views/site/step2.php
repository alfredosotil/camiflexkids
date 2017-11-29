<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */
/* @var $form yii\widgets\ActiveForm */
$productColors = \app\models\Product::find()->select('color')->distinct()->all();
$selectedColor = isset($productColors[0]->color) ? $productColors[0]->color : '';
$groups = array_chunk($productColors, 3);
$colors = [];
foreach ($groups as $group) {
    $temp = [];
    foreach ($group as $value) {
        $temp[] = $value->color;
    }
    $colors[] = $temp;
}
?>

<div class="subscribers-form container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-9">
            <h1>
                <span class="caption-subject font-red bold uppercase">Escoge el metraje</span>
            </h1>
            <p class="step-title">Para esta simulacion se realiza maximo 10 de altura y anchura</p>
            <p class="step-title">Para empezar haz click en la tabla de abajo.</p>
        </div>          
    </div>    
    <div class="row">
        <div class="col-lg-2">            
            <div class="">
                <div class="form-group">
                    <?= Html::label('Altura', 'floor-height', ['class' => 'control-label']) ?>
                    <?= Html::dropDownList('floor-height', null, [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10], ['class' => 'form-control', 'prompt' => 'Selecciona', 'ng-model' => 'length']); ?>
                </div>
                <div class="form-group">
                    <?= Html::label('Anchura', 'floor-width', ['class' => 'control-label']) ?>
                    <?= Html::dropDownList('floor-width', null, [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10], ['class' => 'form-control', 'prompt' => 'Selecciona', 'ng-model' => 'width']); ?>
                </div>                  
                <div class="form-group">
                    <?= Html::label('Color', 'color_palette', ['class' => 'control-label']) ?>
                    <?=
                    kartik\color\ColorInput::widget([
                        'name' => 'color_palette',
//                        'value' => $colors[0][0],
                        'showDefaultPalette' => false,
                        'options' => ['class' => 'form-control', 'placeholder' => 'Escoge tu color ...', 'ng-model' => 'color', 'ng-init' => "color = '$selectedColor'"],
                        'width' => '40px',
                        'readonly' => true,
                        'pluginOptions' => [
                            'showInput' => false,
                            'showInitial' => true,
                            'showPalette' => true,
                            'showPaletteOnly' => true,
                            'showSelectionPalette' => true,
                            'showAlpha' => false,
                            'allowEmpty' => false,
                            'preferredFormat' => 'name',
                            'palette' => $colors
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div> 
        <div class="col-lg-offset-1 col-lg-9">
            <div id="floor-mats-simulation">  
                <h1><span class="label label-success" ng-cloak>{{totalMats| number}} Mats</span></h1>
                <table style="width:100%" border="1">
                    <tbody>
                        <tr ng-repeat="row in cells track by $index">
                            <td class="mat" ng-repeat="cell in row track by $index" ng-click="setColor($event)" style="background-color: white" get-style-square>
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>
<br>
