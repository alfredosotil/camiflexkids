<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Checkout';
//app\assets\AngularAsset::register($this);
?>
<div class="row-correction"></div>
<div class="c-content-box c-size-lg">
    <div class="container">
        <div class="c-shop-form-1">
            <div class="row">
                <!-- BEGIN: ADDRESS FORM -->
                <div class="col-md-7 c-padding-20">
                    <!-- BEGIN: BILLING ADDRESS -->
                    <h3 class="c-font-bold c-font-uppercase c-font-24">Informacion de la Orden</h3>
                    <div class="order-form">

                        <?php $form = ActiveForm::begin(); ?>

                        <?php echo $form->field($model, 'amount')->hiddenInput()->label(false) ?>

                        <?php echo $form->field($model, 'ship_name')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui tu nombre'])->label('A nombre de:') ?>

                        <?php echo $form->field($model, 'ship_address')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui tu direccion'])->label('Domicilio de facturación:') ?>

                        <?php echo $form->field($model, 'country')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'readonly' => 'readonly']) ?>

                        <?php
                        echo $form->field($model, 'departament')->dropDownList(yii\helpers\ArrayHelper::map(app\models\Ubigeoperu::find()->where(['provincia' => '00', 'distrito' => '00'])->orderBy('nombre')->all(), 'departamento', 'nombre'), ['class' => 'form-control c-square c-theme',
                            'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl(["site/updateprovince"]) . '",{value:this.value},function(data){$("#order-province").html( data );$("#order-zip").html("");})'])->label('Departamento:')
                        ?>

                        <?php
                        echo $form->field($model, 'province')->dropDownList(yii\helpers\ArrayHelper::map(app\models\Ubigeoperu::find()->where(['departamento' => '15', 'distrito' => '00'])->orderBy('nombre')->all(), 'provincia', 'nombre'), ['class' => 'form-control c-square c-theme',
                            'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl(["site/updatedistrict"]) . '",{valueprovincia:this.value, valuedepartamento:$("#order-departament").val()},function(data){$("#order-district").html( data );})'])->label('Provincia:')
                        ?>

                        <?php echo $form->field($model, 'district')->dropDownList(yii\helpers\ArrayHelper::map(app\models\Ubigeoperu::find()->where(['departamento' => '15', 'provincia' => '01'])->orderBy('nombre')->all(), 'distrito', 'nombre'), ['class' => 'form-control c-square c-theme'])->label('Distrito:') ?>

                        <?php echo $form->field($model, 'phone')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui tu telefono'])->label('Telefono') ?>

                        <?php echo $form->field($model, 'fax')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui tu fax']) ?>

                        <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui tu correo electronico']) ?>

                        <?php echo $form->field($model, 'notes')->textarea(['maxlength' => 500, 'style' => 'resize: none;', 'class' => 'form-control c-square c-theme', 'placeholder' => 'Coloca aqui alguna nota si deseas que la tomemos en cuenta.'])->label('Agrega tu nota') ?>

                        <?php // echo $form->field($model, 'shipping')->textInput()    ?>

                        <?php // echo $form->field($model, 'tax')->textInput()    ?>

                        <?php // echo $form->field($model, 'created_at')->textInput()    ?>

                        <?php // echo $form->field($model, 'updated_at')->textInput()    ?>

                        <?php // echo $form->field($model, 'tracking_number')->textInput(['maxlength' => 255])    ?>

                        <?php // echo $form->field($model, 'shipped')->textInput()    ?>

                        <?php // echo $form->field($model, 'active')->textInput()    ?>

                        <div class="form-group">
                            <?php // echo Html::submitButton($model->isNewRecord ? Yii::t('product', 'Create') : Yii::t('product', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
                <!-- END: ADDRESS FORM -->
                <!-- BEGIN: ORDER FORM -->
                <div class="col-md-5">
                    <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                        <h1 class="c-font-bold c-font-uppercase c-font-24">Tu Orden</h1>
                        <ul class="c-order list-unstyled">
                            <li class="row c-margin-b-15">
                                <div class="col-md-6 c-font-20"><h2>Producto</h2></div>
                                <div class="col-md-6 c-font-20"><h2>Total</h2></div>
                            </li>
                            <li class="row c-border-bottom"></li>
                            <?php
                            $items = Yii::$app->cart->getItems();
                            ?>
                            <?php foreach ($items as $value): ?>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20"><a href="<?= \yii\helpers\Url::toRoute(['site/productdetail', 'id' => $value->product->id]) ?>" class="c-theme-link"><?= $value->name ?> x <?= $value->qty ?></a></div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="">S/.<?= $value->price ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>                            
                            <!--                            <li class="row c-margin-b-15 c-margin-t-15">
                                                            <div class="col-md-6 c-font-20">Subtotal</div>
                                                            <div class="col-md-6 c-font-20">
                                                                <p class="">S/.<span class="c-subtotal"><?= Yii::$app->cart->getAttributeTotal('vat') ?></span></p>
                                                            </div>
                                                        </li>-->
                            <li class="row c-border-top c-margin-b-15"></li>
                            <li class="row c-margin-t-15">
                                <div class="form-group col-md-12">
                                    <div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
                                        <input type="checkbox" id="checkbox1-77" class="c-check">
                                        <label for="checkbox1-77">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Envio de mercaderia?
                                        </label>
                                    </div>
                                    <p class="help-block">Podemos dejar tus productos en la puerta de tu casa.</p>
                                </div>
                            </li>
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-30">Total a pagar</p>
                                </div>
                                <div class="col-md-6 c-font-20">
                                    <p class="c-font-bold c-font-30">S/.<span class="c-shipping-total"><?= Yii::$app->cart->getAttributeTotal('vat') ?></span></p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-12">
                                    <div class="c-radio-list">
                                        <div class="c-radio">
                                            <input type="radio" id="radio1" class="c-radio" name="payment" value="TRANSFER" onclick="$('#cardpayment').toggle(false);">
                                            <label for="radio1" class="c-font-bold c-font-20">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                Transferencia Bancaria
                                            </label>
                                            <p class="help-block">Has tu pago directamente al banco. Por favor usa el numero de orden como referencia de pago. Tu orden no sera enviada hasta revisar el pago en la cuenta del negocio.</p>
                                        </div>
                                        <!--                                        <div class="c-radio">
                                                                                    <input type="radio" id="radio2" class="c-radio" name="payment">
                                                                                    <label for="radio2" class="c-font-bold c-font-20">
                                                                                        <span class="inc"></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>
                                                                                        Cheque Payment
                                                                                    </label>
                                                                                </div>-->
                                        <div class="c-radio">
                                            <input type="radio" id="radio3" class="c-radio" name="payment" value="CULQI" checked="" onclick="$('#cardpayment').toggle(true);">
                                            <label for="radio3" class="c-font-bold c-font-20">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                Culqi
                                            </label>
                                            <img class="img-responsive" width="250" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row">
                                <div id="cardpayment" class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Payment Details
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            $culqimodel = new \app\models\forms\CulqiForm();
                                            $formculqi = ActiveForm::begin([]);
                                            ?>
                                            <?= $formculqi->field($culqimodel, 'email')->textInput(['maxlength' => 20, 'class' => 'form-control c-square c-theme']) ?>
                                            <?= $formculqi->field($culqimodel, 'cardnumber')->textInput()->textInput(['maxlength' => 20, 'class' => 'form-control c-square c-theme']) ?>
                                            <?= $formculqi->field($culqimodel, 'expirationmonth')->textInput(['maxlength' => 2, 'class' => 'form-control c-square c-theme', 'placeholder' => 'MM']) ?>
                                            <?= $formculqi->field($culqimodel, 'expirationyear')->textInput(['maxlength' => 4, 'class' => 'form-control c-square c-theme', 'placeholder' => 'AAAA']) ?>
                                            <?= $formculqi->field($culqimodel, 'cvv')->textInput(['maxlength' => 3, 'class' => 'form-control c-square c-theme', 'placeholder' => '999']) ?> 
                                            <?php ActiveForm::end(); ?>
                                        </div>
                                    </div>
                                    <!--                                    <ul class="nav nav-pills nav-stacked">
                                                                            <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                                                                            </li>
                                                                        </ul>
                                                                        <br/>
                                                                        <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>-->
                                </div>
                            </li>
                            <li class="row c-margin-b-15 c-margin-t-15">
                                <div class="form-group col-md-12">
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox1-11" class="c-check">
                                        <label for="checkbox1-11">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            He le&iacute;do los terminos &amp; condiciones.
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="row">
                                <div class="form-group col-md-12" role="group">
                                    <button type="submit" class="ladda-button btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" data-style="contract" data-size="l" data-spinner-color="#FF0000" onclick="var l = Ladda.create(this);l.start();"><span class="ladda-label">Enviar</span></button>
                                    <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancelar</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: ORDER FORM -->
            </div>
        </div>
    </div>
</div>