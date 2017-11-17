<?php
/* @var $this yii\web\View */

use app\assets\AngularAsset;

$this->title = 'Simulador';
AngularAsset::register($this);
?>
<div class="row-correction"></div>

<div class="container">
    <?=
    \drsdre\wizardwidget\WizardWidget::widget([
        'id' => 'stepwizard',
        'steps' => [
            1 => [
                'title' => 'Ingresa tus Datos',
                'icon' => 'glyphicon glyphicon-envelope',
                'content' => $this->render('step1', ['model' => new app\models\Subscribers()]),
                'buttons' => [
                    'next' => [
                        'title' => 'Continuar  <i class="fa fa-angle-right"></i>',
                        'options' => [
                            'class' => 'btn btn-outline green button-next hidden',
                        ],
                    ],
                ],
            ],
            2 => [
                'title' => 'Escoge el Metraje m2',
                'icon' => 'glyphicon glyphicon-th',
                'content' => $this->render('step2'),
                'buttons' => [
                    'prev' => [
                        'title' => '<i class="fa fa-angle-left"></i>  Volver',
                        'options' => [
                            'class' => 'btn btn-outline green button-prev'
                        ],
                    ],
                    'next' => [
                        'title' => 'Continuar  <i class="fa fa-angle-right"></i>',
                        'options' => [
                            'class' => 'btn btn-outline green button-next',
                        ],
                    ],
                ],
            ],
            3 => [
                'title' => 'Ver Detalle del Simulador',
                'icon' => 'glyphicon glyphicon-list',
                'content' => $this->render('step3'),
                'buttons' => [
                    'prev' => [
                        'title' => '<i class="fa fa-angle-left"></i>  Volver',
                        'options' => [
                            'class' => 'btn btn-outline green button-prev'
                        ],
                    ],
                    'save' => [
                        'title' => 'Continuar  <i class="fa fa-angle-right"></i>',
                        'options' => [
                            'class' => 'btn btn-outline green button-next',
                        ],
                    ],
                ],
            ],
        ],
        'complete_content' => $this->render('step4'), // Optional final screen
        'start_step' => 1, // Optional, start with a specific step
    ]);
    ?>      
</div>
