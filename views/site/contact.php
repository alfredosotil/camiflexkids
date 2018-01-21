<?php

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use app\assets\MapAsset;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\forms\ContactForm */

$this->title = Yii::t('contact', 'Contact');
//$this->params['breadcrumbs'][] = $this->title;
//MapAsset::register($this);
?>
<div class="row-correction"></div>
<div class="container">
    <!-- BEGIN: CONTENT/CONTACT/CONTACT-1 -->
    <div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
        <div class="container">
            <div class="c-content-contact-1 c-opt-1">
                <div class="row" data-auto-height=".c-height">
                    <div class="col-sm-8 c-desktop"></div>
                    <div class="col-sm-4">
                        <div class="c-body">
                            <div class="c-section">
                                <h3>Camiflexkids Peru</h3>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Direcci&oacute;n</div>
                                <p>Calle Antenor Rizo Patron 134,<br/> Surquillo,<br/>Lima - Per&uacute;</p>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Contactos</div>
                                <p><strong>T</strong> +51 964 103 600</p>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Social Media</div><br/>
                                <ul class="c-content-iconlist-1 c-theme">
                                    <li><a href="https://www.facebook.com/camiflexkids/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/camiflexperu/?hl=es-la" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
        <div class="c-content-contact-1-gmap" style="height: 615px;">
            <?=
            yii2mod\google\maps\markers\GoogleMaps::widget([
                'googleMapsUrlOptions' => [
                    'key' => 'AIzaSyDLPWnOu970nrxAY1eApfQb0UKBaxov3zg',
                    'language' => 'es',
                    'version' => '3.1.18',
                ],
                'googleMapsOptions' => [
                    'mapTypeId' => 'roadmap',
                    'tilt' => 45,
                    'zoom' => 16,
                    'lat' => '-12.113555',
                    'lng' => '-77.012000',
                    'icon' => Yii::$app->request->baseUrl . '/img/logo-transparente.png',
                ],
                'userLocations' => [
                    [
                        'location' => [
                            'lat' => '-12.113555',
                            'lng' => '-77.012000',
//                            'country' => 'Ukraine',
                        ],
//                        'htmlContent' => '<h1>Oficina Central</h1>',
                        'htmlContent' => '<h3>CamiflexKids.</h3><p>Surquillo, Lima - Peru</p>',
                    ],
                ],
            ]);
            ?>
        </div>
    </div> <!-- END: CONTENT/CONTACT/CONTACT-1 -->
</div>
<!-- BEGIN: PAGE CONTENT -->

<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <div class="c-content-feedback-1 c-option-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-contact">
                        <div class="c-content-title-1">
                            <h3  class="c-font-uppercase c-font-bold"><?php echo Html::encode($this->title) ?></h3>
                            <div class="c-line-left"></div>
                            <p class="c-font-lowercase">
                                <?php echo Yii::t('contact', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'); ?>
                            </p>
                        </div>
                        <!--alfredosotil@gmail.com-->
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?php echo $form->field($model, 'name', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Tu nombre'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'email', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Tu Email'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'subject', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Tu título'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'body', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Tu mensaje'), 'class' => 'form-control c-square c-theme input-lg']])->textArea(['rows' => 6]); ?>
                        <?php
//                        echo $form->field($model, 'verifyCode')->widget(Captcha::class, [
//                            'options' => ['placeholder' => Yii::t('contact', 'Code'), 'class' => 'form-control c-square c-theme input-lg'],
////                            'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-12">{input}</div></div>',
////                            'template' => '<div class="form-group"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                        ]);                        
                        ?>
                        <?php
//                        echo $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className(), [
//                            'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-12">{input}</div></div>',
//                        ])
                        ?>
                        <div class="form-group">
                            <?php echo Html::submitButton(Yii::t('contact', 'Submit'), ['class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square', 'name' => 'contact-button']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/CONTACT/FEEDBACK-1 -->

<!-- END: PAGE CONTENT -->