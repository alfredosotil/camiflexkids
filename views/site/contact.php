<?php

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use app\assets\MapAsset;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\forms\ContactForm */

$this->title = Yii::t('contact', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
MapAsset::register($this);
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
                                <h3>JANGO Inc.</h3>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Address</div>
                                <p>25, Lorem Lis Street,<br/>Orange C, California,<br/>United States of America</p>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Contacts</div>
                                <p><strong>T</strong> 800 123 0000<br/><strong>F</strong> 800 123 8888</p>
                            </div>
                            <div class="c-section">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Social</div><br/>
                                <ul class="c-content-iconlist-1 c-theme">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
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
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?php echo $form->field($model, 'name', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Your name'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'email', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Your Email'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'subject', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Your Subject'), 'class' => 'form-control c-square c-theme input-lg']]); ?>
                        <?php echo $form->field($model, 'body', ['inputOptions' => ['placeholder' => Yii::t('contact', 'Your Message'), 'class' => 'form-control c-square c-theme input-lg']])->textArea(['rows' => 6]); ?>
                        <?php
                        echo $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            'options' => ['placeholder' => Yii::t('contact', 'Code'), 'class' => 'form-control c-square c-theme input-lg']
//                            'template' => '<div class="form"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]);
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