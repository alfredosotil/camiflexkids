<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
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
                         data-y="center"
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
                        <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Purchase</a>
                    </div>
                    <!--END-->
                </li>
                <!--END -->
            </ul>
        </div>
    </div>
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-3 -->

<!-- BEGIN: CONTENT/BARS/BAR-3 -->
<div class="c-content-box c-size-md c-bg-dark">
    <div class="container">
        <div class="c-content-bar-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">DEDICATED SUPPORT</h3>
                        <p class="c-font-uppercase">JANGO comes with top-of-the-line support teams to ensure that we provide the best experience for our customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <div class="c-content-v-center" style="height: 90px;">
                        <div class="c-wrapper">
                            <div class="c-body">
                                <button type="button" class="btn btn-md c-btn-square c-btn-border-2x c-theme-btn c-btn-uppercase c-btn-bold">Get Support</button>
                            </div>
                        </div>
                    </div>					
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/BARS/BAR-3 -->

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

<!-- BEGIN: CONTENT/BARS/BAR-1 -->
<div class="c-content-box c-size-md">
    <div class="container">
        <div class="c-content-bar-1 c-opt-1">
            <h3 class="c-font-uppercase c-font-bold">Get JANGO as your development companion</h3>
            <p class="c-font-uppercase">
                JANGO is built to completely support your web projects by<br>
                providing <strong>Ultra Flexibility</strong>, <strong>Increased productivity</strong> and <strong>Top quality</strong>
            </p>
            <button type="button" class="btn btn-md c-btn-square c-btn-border-2x c-btn-dark c-btn-uppercase c-btn-bold c-margin-r-40 hide">Learn More</button>
            <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314" class="btn btn-md c-btn-square c-theme-btn c-btn-uppercase c-btn-bold">Purchase</a>
        </div>
    </div> 
</div><!-- END: CONTENT/BARS/BAR-1 -->

<!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-2 -->
<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <div class="row" data-auto-height="true">
            <div class="col-md-4  c-margin-b-20">
                <div class="c-content-media-1" data-height="height">
                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Blog</div>
                    <a href="#" class="c-title c-font-uppercase c-theme-on-hover c-font-bold">Take the web by storm with JANGO</a>
                    <p>Lorem ipsum dolor sit amet, consetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat</p>
                    <div class="c-author">
                        <div class="c-portrait" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/team/team16.jpg)"></div>
                        <div class="c-name c-font-uppercase">Jack Nilson</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  c-margin-b-20">
                <div class="c-content-media-1-slider" data-slider="owl">	
                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-auto-play="8000" data-rtl="false">
                        <div class="item">
                            <div class="c-content-media-1" data-height="height">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">News</div>
                                <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover c-font-bold">The Multi-purpose HTML5 Theme</a>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam 
                                    erat volutpat sed diam nonummy et nibh euismod aliquam erat volutpat</p>
                                <div class="c-date">
                                    27 Jan 2015
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-media-1" data-height="height">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Posts</div>
                                <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">Meet JANGO. The Theme of 2015</a>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam 
                                    erat volutpat sed diam nonummy et nibh euismod aliquam erat volutpat</p>
                                <div class="c-date">
                                    27 Jan 2015
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-media-1" data-height="height">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Events</div>
                                <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">JANGO Showcast 2015</a>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam 
                                    erat volutpat sed diam nonummy et nibh euismod aliquam erat volutpat erat volutpat</p>
                                <div class="c-date">
                                    27 Jan 2015
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4  c-margin-b-20">
                <div class="c-content-media-1-slider c-pagination-bottom" data-slider="owl">	
                    <div class="owl-carousel owl-theme owl-theme-white owl-single" data-single-item="true" data-auto-play="8000" data-rtl="false">
                        <div class="item">
                            <div class="c-content-v-center c-theme-bg" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center c-padding-10">
                                        <h3 class="c-font-30 c-line-height-35 c-font-white c-font-bold c-font-uppercase">Unlimited Expendabilities & Possibilities!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-v-center c-bg-red-2" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center c-padding-10">
                                        <h3 class="c-font-30 c-line-height-35 c-font-white c-font-bold c-font-uppercase">CLEAN HTML & CSS JANGO IS LAUNCH READY!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <div class="row hide">			
            <div class="col-md-4">
                <div class="c-content-testimonial-2-slider" data-slider="owl" data-single-item="true" data-auto-play="6000">
                    <div class="c-title c-font-uppercase c-theme-bg">Testimonials</div>
                    <div class="owl-carousel owl-theme c-theme owl-single">
                        <div class="item">
                            <div class="c-content-testimonial-2" style="min-height: 360px;">
                                <div class="c-testimonial c-font-uppercase c-font-bold">Nothing but top quality code!</div>
                                <div class="c-author">
                                    <div class="c-portrait" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/team/team1.jpg)"></div>
                                    <div class="c-name c-font-uppercase">Tony Park</div>
                                    <p class="c-position c-theme c-font-uppercase">Park Industries</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-2" style="min-height: 360px;">
                                <div class="c-testimonial c-font-uppercase c-font-bold">I could easily make more than 50 pages in 30 minutes</div>
                                <div class="c-author">
                                    <div class="c-portrait" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/team/team7.jpg)"></div>
                                    <div class="c-name c-font-uppercase">Steve Roberts</div>
                                    <p class="c-position c-theme c-font-uppercase">Buckler Corp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                    <div class="c-content-label c-font-uppercase c-font-bold">Latest Photos</div>						
                    <div class="owl-carousel owl-theme c-theme owl-single">
                        <div class="item">
                            <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock3/1.jpg); min-height: 360px;">
                                <div class="c-panel">
                                    <div class="c-fav">
                                        <i class="icon-heart c-font-thin"></i>
                                        <p class="c-font-thin">16</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock3/57.jpg); min-height: 360px;">
                                <div class="c-panel">
                                    <div class="c-fav">
                                        <i class="icon-heart c-font-thin"></i>
                                        <p class="c-font-thin">24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock3/48.jpg); min-height: 360px;">
                                <div class="c-panel">
                                    <div class="c-fav">
                                        <i class="icon-heart c-font-thin"></i>
                                        <p class="c-font-thin">34</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/MISC/LATEST-ITEMS-2 -->

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
                         data-options="thumbnail:'/img/content/stock/13.jpg'"
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
                         data-options="thumbnail:'/img/content/stock/81.jpg'"
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
                         data-options="thumbnail:'/img/content/stock/63.jpg'"
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
                         data-options="thumbnail:'/img/content/stock/48.jpg'"
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
                         data-options="thumbnail:'/img/content/stock/33.jpg'"
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
                         data-options="thumbnail:'/img/content/stock5/2.jpg'"
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
                         data-options="thumbnail:'/img/content/stock5/7.jpg'"
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
                         data-options="thumbnail:'/img/content/stock/11.jpg'"
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
                         data-options="thumbnail:'/img/content/stock5/9.jpg'"
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
</div><!-- END: CONTENT/FEATURES/FEATURES-12 -->

<!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow animated fadeInLeft">						
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">About us</h3>
                    <div class="c-line-left c-theme-bg"></div>
                </div>
                <!-- End-->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy nibh euismod tincidunt ut laoreet dolore magna aluam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci et tation diam nisl ut aliquip ex ea commodo consequat euismod tincidunt ut laoreet dolore magna aluam. </p>
                <ul class="c-content-list-1 c-theme  c-font-uppercase">
                    <li>Perfect Design interface</li>
                    <li>Huge Community</li>
                    <li>Support for Everyone</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
            </div>
            <div class="col-sm-6 wow animated fadeInRight">
                <div class="c-content-client-logos-1">
                    <!-- Begin: Title 1 component -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Our Clients</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    <!-- End-->
                    <div class="c-logos">
                        <div class="row">
                            <div class="col-md-4 col-xs-6 c-logo c-logo-1">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client1.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-4 col-xs-6 c-logo c-logo-2">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client2.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-4 col-xs-6 c-logo c-logo-3">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client3.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-4 col-xs-6 c-logo c-logo-4">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client4.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-4 col-xs-6 c-logo c-logo-5">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client5.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-4 col-xs-6 c-logo c-logo-6">
                                <a href="#"><img class="c-img-pos" src="<?= Yii::$app->request->baseUrl; ?>/img/content/client-logos/client6.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/MISC/ABOUT-1 -->

<!-- BEGIN: CONTENT/ISOTOPE/GRID-1 -->
<div class="c-content-box c-size-md c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-82.jpg)">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Recent Works</h3>
            <div class="c-line-center c-theme-bg"></div>
            <p class="c-font-center c-font-grey-3">Slide in from bottom</p>
        </div>
        <div class="c-content-isotope-grid c-opt-1">
            <div class="c-content-isotope-item">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg"/>
                    <div class="c-content-isotope-overlay">
                        <div class="c-content-isotope-overlay-content">
                            <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">The River</h3>
                            <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                            <a href="javascript:;" class="c-content-isotope-overlay btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/14.jpg"/>
                    <div class="c-content-isotope-overlay">
                        <div class="c-content-isotope-overlay-content">
                            <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">The Holiday</h3>
                            <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                            <a href="javascript:;" class="c-content-isotope-overlay btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item c-item-size-double">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/15.jpg"/>
                    <div class="c-content-isotope-overlay">
                        <div class="c-content-isotope-overlay-content">
                            <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">The Music</h3>
                            <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                            <a href="javascript:;" class="c-content-isotope-overlay btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/16.jpg"/>
                    <div class="c-content-isotope-overlay">
                        <div class="c-content-isotope-overlay-content">
                            <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">The Clock</h3>
                            <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                            <a href="javascript:;" class="c-content-isotope-overlay btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-content-isotope-item">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/17.jpg"/>
                    <div class="c-content-isotope-overlay">
                        <div class="c-content-isotope-overlay-content">
                            <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">The Guitar</h3>
                            <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                            <a href="javascript:;" class="c-content-isotope-overlay btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- END: CONTENT/ISOTOPE/GRID-1 -->

<!-- BEGIN: CONTENT/TILES/TILE-1 -->
<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="c-content-tile-grid c-bs-grid-reset-space" data-auto-height="true">
        <div class="c-content-title-1">
            <h3 class="c-font-uppercase c-center c-font-bold">Services We Do</h3>
            <div class="c-line-center"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="c-content-tile-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-arrow-left c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="#"><i class="icon-link"></i></a>
                                        <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/56.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                            <i class="icon-magnifier"></i> </a>
                                    </div>
                                </div>
                                <div class="c-image c-overlay-object" data-height="height" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock/56.jpg)"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center">
                                        <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold">
                                            LEARN MORE ABOUT JANGO
                                        </h3>
                                        <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="c-content-tile-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-arrow-left c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="#"><i class="icon-link"></i></a>
                                        <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/65.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                            <i class="icon-magnifier"></i> </a>
                                    </div>
                                </div>
                                <div class="c-image c-overlay-object" data-height="height" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock/65.jpg)"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center">
                                        <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold">
                                            The Future
                                        </h3>
                                        <p class="c-tile-body">Lorem ipsum consectetuer elit sit amet, sit adipiscing amet, coectetuer adipiscing elit sit ame.</p>
                                        <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="c-content-tile-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center">
                                        <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold">
                                            Nothing is impossible for JANGO. Highly Flexible, always growing
                                        </h3>
                                        <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-arrow-right c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="#"><i class="icon-link"></i></a>
                                        <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/47.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                            <i class="icon-magnifier"></i> </a>
                                    </div>
                                </div>
                                <div class="c-image c-overlay-object" data-height="height" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock/47.jpg)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="c-content-tile-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center">
                                        <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold">
                                            Web Design
                                        </h3>
                                        <p class="c-tile-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nonummy nibh euismod tincidunt.</p>
                                        <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="c-tile-content c-bg-white c-arrow-right c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="#"><i class="icon-link"></i></a>
                                        <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/66.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                            <i class="icon-magnifier"></i> </a>
                                    </div>
                                </div>
                                <div class="c-image c-overlay-object" data-height="height" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/stock/66.jpg)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/TILES/TILE-1 -->

<!-- BEGIN: CONTENT/FEATURES/FEATURES-2 -->
<div class="c-content-box c-size-md c-bg-parallax" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg_oswald_1.jpg)">
    <div class="container">
        <div class="c-content-feature-3-grid">
            <h3 class="c-title c-font-uppercase c-font-bold">Clean HTML & CSS<br/>JANGO is Launch Ready</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="c-content-feature-3">
                        <p>Lorem ipsum diam dolor sit amet consectetuer dolore adipiscing elit sed diam nonummy </p>
                        <button type="button" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-bold c-btn-square">Explore</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="c-content-feature-3">
                        <p>Lorem ipsum diam dolor sit amet consectetuer dolore adipiscing elit sed diam nonummy </p>
                        <button type="button" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-bold c-btn-square">Explore</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="c-content-feature-3">
                        <p>Lorem ipsum diam dolor sit amet consectetuer dolore adipiscing elit sed diam nonummy </p>
                        <button type="button" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-bold c-btn-square">Explore</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/FEATURES/FEATURES-2 -->

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
</div><!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<!-- END: PAGE CONTENT -->



