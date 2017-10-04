<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\MapAsset;

$this->title = 'Contacto Camiflex Kids';
MapAsset::register($this);
?>
<div class="row-correction"></div>
<!--<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
    <?php if (Yii::$app->mailer->useFileTransport): ?>
                                Because the application is in development mode, the email is not sent but saved as
                                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                application component to be false to enable email sending.
    <?php endif; ?>
                </p>

<?php else: ?>

                <p>
                    If you have business inquiries or other questions, please fill out the following form to contact us.
                    Thank you.
                </p>

                <div class="row">
                    <div class="col-lg-5">

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?=
    $form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ])
    ?>

                        <div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

    <?php ActiveForm::end(); ?>

                    </div>
                </div>

<?php endif; ?>
</div>-->

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
                            <h3  class="c-font-uppercase c-font-bold">Keep in touch</h3>
                            <div class="c-line-left"></div>
                            <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback.
                                Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control c-square c-theme input-lg">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" class="form-control c-square c-theme input-lg">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Contact Phone" class="form-control c-square c-theme input-lg">
                            </div>
                            <div class="form-group">
                                <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-theme c-square input-lg"></textarea>
                            </div>
                            <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Submit</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/CONTACT/FEEDBACK-1 -->

<!-- END: PAGE CONTENT -->
