<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-4 -->
<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$images = $model->getBehavior('galleryBehavior')->getImages();
$this->title = 'Detalles del Productos Camiflex Kids';
?>
<div class="row-correction"></div>
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
    <div class="container">
        <div class="c-shop-product-details-4">
            <div class="c-product-header">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold"><?= $model->name ?></h3>
                </div>
            </div>
            <div class="c-product-gallery" style="border: black solid 2px;">
                <div class="row c-bs-grid-reset-space">
                    <div class="col-md-6 c-product-gallery-content" style="border-right: black solid 2px;">
                        <?php
                        foreach ($images as $image) {
                            echo Html::tag('div', Html::img($image->getUrl('original')), ['class' => 'c-zoom']);
                        }
                        ?>
                    </div>
                    <div class="col-md-6 c-product-gallery-thumbnail">
                        <?php
                        $html = '';
                        foreach (array_chunk($images, 2) as $array) {
                            foreach ($array as $value) {
                                $html .= Html::tag('div', Html::img($value->getUrl('small')), ['class' => 'col-xs-6 c-product-thumb']);
                            }
                            echo Html::tag('div', $html, ['class' => 'row c-bs-grid-reset-space']);
                            $html = '';
                        }
                        ?>                        
                    </div>
                </div>
            </div>
            <div class="c-product-meta">
                <div class="row c-theme-border">
                    <div class="col-sm-10 col-xs-9">
                        <div class="c-product-short-desc c-bg-grey">
                            <?= $model->short_desc ?>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <div class="c-product-price c-theme-font">S/. <?= $model->price ?></div>
                    </div>
                </div>
                <div class="row">
                    <?= Html::beginForm(['site/addtocart'], 'post');
                    ?>
                    <div class="col-sm-3 col-xs-4 ">
                        <?php
                        echo Html::hiddenInput('product_id', $model->id);
                        echo \kartik\touchspin\TouchSpin::widget([
                            'name' => 'qty',
                            'readonly' => true,
                            'pluginOptions' => [
                                'buttonup_class' => 'btn btn-primary',
                                'buttondown_class' => 'btn btn-info',
                                'buttonup_txt' => '<i class="glyphicon glyphicon-plus-sign"></i>',
                                'buttondown_txt' => '<i class="glyphicon glyphicon-minus-sign"></i>',
                                'initval' => 1,
                                'min' => 1,
                                'max' => $model->stock,
                            ],
                            'options' => [
                                'class' => 'input-lg',
                                'placeholder' => 'Elije la cantidad'
                            ],
                        ]);
                        ?>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1 col-xs-12 pull-right">
                        <?= Html::submitButton('Agregar al carrito de compras', ['class' => 'btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase c-add-cart']) ?>
                    </div>
                    <?= Html::endForm(); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-4 -->
<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
<div class="c-content-box c-size-md c-no-padding">
    <div class="c-shop-product-tab-1" role="tabpanel">
        <div class="container">
            <ul class="nav nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Descripcion</a>
                </li>
                <li role="presentation">
                    <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Informacion Adicional</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
                <div class="c-product-desc c-center">
                    <div class="container">
                        <?= isset($images[1]) ? Html::img($images[1]->getUrl('original')) : '' ?>
                        <p>
                            <?= $model->long_desc ?>
                        </p>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                <div class="c-product-tab-meta-bg c-bg-grey c-center">
                    <div class="container">
                        <div class="c-product-tab-meta">
                            <div id="showBarcode"></div>
                        </div>
                        <?php
                        $optionsArray = array(
                            'elementId' => 'showBarcode', /* div or canvas id */
                            'value' => $model->sku, /* value for EAN 13 be careful to set right values for each barcode type */
                            'type' => 'code11', /* supported types  ean8, ean13, upc, std25, int25, code11, code39, code93, code128, codabar, msi, datamatrix */
                        );
                        echo barcode\barcode\BarcodeGenerator::widget($optionsArray);
                        ?>
                        <p class="c-product-tab-meta"><strong>SKU:</strong> <?= $model->sku ?></p>
                        <p class="c-product-tab-meta"><strong>Categorias:</strong> <?= $model->category->name ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->