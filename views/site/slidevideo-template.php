<?php

use yii\helpers\Url;
?>
<li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000" data-thumb="">
    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
    <img src="/img/layout/sliders/revo-slider/base/blank.png" alt="">
    <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="<?= $data->urlFile; ?>" data-videopreload="preload" data-videoloop="none"
         data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"> </div>
    <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
        <h3 class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
            <?= $data->desc; ?>
        </h3>
    </div>
    <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
         data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
        <a href="<?= Url::toRoute($data->urlRedirect) ?>" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase"><?= $data->labelUrlRedirect ?></a>
    </div>
</li>
