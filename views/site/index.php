<?php
/* @var $this yii\web\View */

$this->title = 'Camiflex Kids';
?>
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-3 -->
<section class="c-layout-revo-slider c-layout-revo-slider-3" dir="ltr">
    <div class="tp-banner-container tp-fullscreen">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>

                <!--BEGIN: SLIDE #1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">			
                    <img class="rev-slidebg" src="<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/blank.html" alt=""
                         />

                    <!--BEGIN: SUB TITLE -->
                    <div class="tp-caption customin customout"  
                         data-x="center" 
                         data-y="bottom"
                         data-hoffset="[-500, 300, 200, 70]"
                         data-voffset="30"

                         data-speed="500" 
                         data-start="1000" 
                         data-transform_idle="o:1;" 
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="600"
                         style="z-index: 2;">
                        <p class="c-main-title-1 c-font-26 c-center c-font-uppercase c-font-bold c-font-white c-theme-bg">
                            Incredibly Robust<br> 
                            Ever Expanding Theme<br> 
                            You can own them both<br>

                        </p>
                    </div>
                    <!--END -->
                    <div class="tp-caption customin customout" 
                         data-x="right" 
                         data-y="bottom" 
                         data-hoffset="0" 
                         data-voffset="0" 
                         data-speed="500" 
                         data-start="500" 
                         data-basealign="slide"
                         data-transform_idle="o:1;" 
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" 
                         data-splitin="none" data-splitout="none"
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1"
                         data-endspeed="600" 
                         style="z-index: 1;">
                        <img src="#" alt="" data-lazyload="<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-6.jpg" 
                             data-hh="[868, 768, 960, 720]"
                             data-ww="[auto, auto, auto, auto]" /> 
                    </div>

                </li>
                <!--END -->  

                <!--BEGIN: SLIDE #2 - VIDEO SLIDER -->
                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="6000" data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="<?= Yii::$app->request->baseUrl; ?>/img/layout/sliders/revo-slider/base/blank.png" alt="">

                    <div class="rs-background-video-layer fulllscreenvideo tp-videolayer"
                         data-forcerewind="on" 
                         data-volume="mute" 
                         data-videowidth="100%" 
                         data-videoheight="100%" 
                         data-videomp4="<?= Yii::$app->request->baseUrl; ?>/media/video/video-3.mp4" 
                         data-videopreload="preload" 
                         data-videoloop="loop" 
                         data-forceCover="1" 
                         data-aspectratio="16:9" 
                         data-autoplay="true" 
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true">
                    </div>

                    <div class="tp-caption customin customout"
                         data-x="center" 
                         data-y="center"
                         data-hoffset="0" 
                         data-voffset="-30"

                         data-speed="500" 
                         data-start="1000" 
                         data-transform_idle="o:1;" 
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="600">
                        <h3 class="c-main-title-2 c-font-55 c-font-bold c-font-center c-font-uppercase c-block-bordered c-font-dark c-block">
                            Ultra Responsive<br>Modern Design
                        </h3>
                    </div>

                    <div class="tp-caption lft"
                         data-x="center"
                         data-y="center" 
                         data-hoffset="0"
                         data-voffset="130"
                         data-speed="900" 
                         data-start="2000" 
                         data-transform_idle="o:1;" 
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;" >
                        <a href="" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Purchase</a>
                    </div>
                    <!--END-->
                </li>
                <!--END -->
            </ul>
        </div>
    </div>
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-3 -->

<!-- BEGIN: CONTENT/MISC/SERVICES-1-1 -->
<div class="c-content-box c-size-md c-bg-grey-1  ">
    <div class="container">
        <div class="c-content-feature-2-grid" data-auto-height="true" data-mode="base-height">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-center c-font-bold">Services We Do</h3>
                <div class="c-line-center"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Web Design</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-support"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Mobile Apps</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-comment"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Marketing</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-32"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Events</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-v-center c-theme-bg wow bounceInUp" data-wow-delay1="2s" data-height="height">
                        <div class="c-wrapper">
                            <div class="c-body c-padding-20 c-center">  
                                <h3 class="c-font-19 c-line-height-28 c-font-uppercase c-font-white c-font-bold">
                                    Providing the best possible
                                    service to our customers
                                    without a breaking a sweat
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-globe"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Hosting</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/MISC/SERVICES-1-1 -->

<!-- BEGIN: CONTENT/ISOTOPE/GALLERY-4 -->
<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-84.jpg)">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Great Works Come Alive</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="c-content-isotope-filter-1 c-center">
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom c-active" data-filter="*">Show all</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-web">Web</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-brand">Brand</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-design">Design</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-photo">Photo</button>
        </div>
        <div class="c-content-isotope-gallery c-opt-4">
            <div class="c-content-isotope-item c-isotope-photo">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg"
                         data-options="thumbnail:'./img/content/stock/13.jpg'"
                         data-caption="<h4>The River</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-design">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/81.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/81.jpg"
                         data-options="thumbnail:'./img/content/stock/81.jpg'"
                         data-caption="<h4>Speedy City</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-web">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/63.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/63.jpg"
                         data-options="thumbnail:'./img/content/stock/63.jpg'"
                         data-caption="<h4>The Workstation</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-item-size-double c-isotope-photo">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/48.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/48.jpg"
                         data-options="thumbnail:'./img/content/stock/48.jpg'"
                         data-caption="<h4>Exploring the Ice</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-brand">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/33.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/33.jpg"
                         data-options="thumbnail:'./img/content/stock/33.jpg'"
                         data-caption="<h4>Music is the way of life</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-item-size-double c-isotope-brand">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/2.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/2.jpg"
                         data-options="thumbnail:'./img/content/stock5/2.jpg'"
                         data-caption="<h4>The Sign</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-design c-isotope-brand">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/7.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/7.jpg"
                         data-options="thumbnail:'./img/content/stock5/7.jpg'"
                         data-caption="<h4>The Stationary</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-design c-isotope-brand">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/11.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/11.jpg"
                         data-options="thumbnail:'./img/content/stock/11.jpg'"
                         data-caption="<h4>The Poster</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-isotope-brand c-isotope-design">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/9.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/9.jpg"
                         data-options="thumbnail:'./img/content/stock5/9.jpg'"
                         data-caption="<h4>The Brochure</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>"
                         >
                        <div class="c-content-isotope-overlay-icon">
                            <i class="fa fa-cog c-font-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/ISOTOPE/GALLERY-4 -->

<!-- BEGIN: CONTENT/FEATURES/FEATURES-12 -->
<div class="c-content-box c-size-md c-bg-parallax" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-75.jpg)">
    <div class="container">
        <div class="c-content-feature-8 c-opt-2">
            <ul class="c-grid">
                <li>
                    <div class="c-card c-font-right c-bg-opacity-2">
                        <h3 class="c-font-40 c-font-bold c-font-uppercase">Great<br/>Customer Care</h3>
                        <p class="c-font-18">
                            Lorem ipsum euismod dolor amet consetuer adipiscing elit sed diam nonummy euismod dolore
                        </p>
                    </div>
                </li>
                <li>
                    <div class="c-card c-bg-opacity-2">
                        <h3 class="c-font-40 c-font-bold c-font-uppercase">Awesome<br/>Features Pack</h3>
                        <p class="c-font-18">
                            Lorem ipsum euismod dolor amet consetuer adipiscing elit sed diam nonummy euismod dolore
                        </p>
                    </div>
                </li>
            </ul>
            <ul class="c-grid">
                <li>
                    <div class="c-card c-font-right c-bg-opacity-2">
                        <h3 class="c-font-40 c-font-bold c-font-uppercase">Unlimited<br/>Themed Layouts</h3>
                        <p class="c-font-18">
                            Lorem ipsum euismod dolor amet consetuer adipiscing elit sed diam nonummy euismod dolore
                        </p>
                    </div>
                </li>
                <li>
                    <div class="c-card c-img c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock3/7.jpg)">
                        <h3 class="c-font-white c-font-25 c-font-right">Some title here..</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: CONTENT/FEATURES/FEATURES-12 -->

<!-- BEGIN: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">Latest Portfolio</h3>
            <div class="c-line-center c-theme-bg"></div>
            <p class="c-center c-font-uppercase">Showcasing your latest designs, sketches, photographs or videos.</p>
        </div>			
        <div class="cbp-panel">
            <!-- SEE: components.js:ContentCubeLatestPortfolio -->
            <div class="c-content-latest-works cbp cbp-l-grid-masonry-projects">
                <div class="cbp-item graphic wow animate fadeInLeft">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/08-long_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/08_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design logos wow animate fadeInLeft" data-wow-delay="0.2s">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/07_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/07_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="World Clock Widget<br>by Paul Flavius Nechita">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item graphic logos wow animate fadeInLeft" data-wow-delay="0.4s">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/09_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project3.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item identity web-design wow animate fadeInLeft" data-wow-delay="0.6s">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/014_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project4.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/014_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="WhereTO App<br>by Tiberiu Neamu">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item web-design graphic wow animate fadeInLeft">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/34_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project5.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/34_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Events and  More<br>by Tiberiu Neamu">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item identity web-design wow animate fadeInLeft" data-wow-delay="0.2s">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/53_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project6.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/53_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Ski * Buddy<br>by Tiberiu Neamu">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item graphic logos wow animate fadeInLeft" data-wow-delay="0.4s">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/39_grey.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="c-masonry-border"></div>
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="ajax/projects/project7.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/39_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->

<!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<div class="c-content-box c-size-lg c-bg-white">
    <div class="container">
        <!-- Begin: testimonials 1 component -->
        <div class="c-content-testimonials-1 c-option-2 wow animated fadeIn" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Our Satisfied Customers</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <!-- End-->

            <!-- Begin: Owlcarousel -->

            <div class="owl-carousel owl-theme c-theme c-owl-nav-center wow animated fadeInUp" data-single-item="true" data-slide-speed="8000" data-rtl="false"> 
                <div class="item">
                    <div class="c-testimonial">
                        <p>
                            “JANGO is an international, privately held company that specializes in the start-up, promotion and operation of multiple online marketplaces”
                        </p>
                        <h3>
                            <span class="c-name c-theme">John Snow</span>, CEO, Mockingbird
                        </h3>
                    </div>
                </div>
                <div class="item">
                    <div class="c-testimonial">
                        <p>
                            “After co-founding the company in 2006 the group launched JANGO, the first digital marketplace which focused on rich multimedia web content”
                        </p>
                        <h3>
                            <span class="c-name c-theme">Arya Stark</span>,  CFO, Valar Dohaeris
                        </h3>
                    </div>
                </div>	
                <div class="item">
                    <div class="c-testimonial">
                        <p>
                            “It was the smoothest implementation process I have ever been through with JANGO’s process and schedule.”
                        </p>
                        <h3>
                            <span class="c-name c-theme">Arya Stark</span>,  CFO, Valar Dohaeris
                        </h3>
                    </div>
                </div>	
                <div class="item">
                    <div class="c-testimonial">
                        <p>
                            “A system change is always stressful and JANGO did a great job of staying positive, helpful, and patient with us.”
                        </p>
                        <h3>
                            <span class="c-name c-theme">Arya Stark</span>,  CFO, Valar Dohaeris
                        </h3>
                    </div>
                </div>			 
            </div>
            <!-- End-->
        </div>
        <!-- End-->
    </div>
</div>
<!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<!-- END: PAGE CONTENT -->



