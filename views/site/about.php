<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row-correction"></div>
<!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-3 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
<!--        <div class="c-content-title-1 wow animated fadeIn">
            <h3 class="c-font-uppercase c-font-bold">Nuestra Misi&oacute;n</h3>
            <div class="c-line-left"></div>
        </div>-->
        <div class="row">
            <div class="col-md-4">
                <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 380px;">
                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Nuestra Misi&oacute;n</div>
                    <a href="#" class="c-title c-font-uppercase c-theme-on-hover c-font-bold">{{Titulo}}</a>
                    <p>Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat</p>
                    <div class="c-author">
                        <div class="c-portrait" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/team/team16.jpg)"></div>
                        <div class="c-name c-font-uppercase">Jack Nilson</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">		
                <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                    <div class="c-content-label c-font-uppercase c-font-bold">&uacute;ltimos proyectos</div>						
                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">						
                        <?= $slides ?>					
                    </div>
                </div>		
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/MISC/LATEST-ITEMS-3 -->
<!-- BEGIN: CONTENT/MISC/SERVICES-1-1 -->
<div class="c-content-box c-size-md c-bg-grey-1  ">
    <div class="container">
        <div class="c-content-feature-2-grid" data-auto-height="true" data-mode="base-height">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-center c-font-bold">Servicios que brindamos</h3>
                <div class="c-line-center"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Venta de Pisos</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-support"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Instalacion</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="c-content-feature-2" data-wow-delay1="1s" data-height="height">
                        <div class="c-icon-wrapper">
                            <div class="c-content-line-icon c-theme c-icon-comment"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title c-font-bold">Despacho a Domicilio</h3>
                        <p>Lorem ipsum consectetuer dolore elit diam</p>
                    </div>
                </div>                
                <div class="col-md-4 col-sm-6 col-md-offset-4">
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
            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/MISC/SERVICES-1-1 -->

<!-- BEGIN: CONTENT/SLIDERS/TEAM-2 -->
<div class="c-content-box c-size-md c-bg-grey-1" id="team">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-person-1-slider" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1 wow animated fadeIn">
                <h3 class="c-center c-font-uppercase c-font-bold">Conoce Nuestro Equipo</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <!-- End-->

            <!-- Begin: Owlcarousel -->
            <div class="owl-carousel owl-theme c-theme c-owl-nav-center wow animated fadeInUp" data-items="3" data-slide-speed="8000" data-rtl="false"> 
                 <?= $team ?>	
            </div>			 
            <!-- End-->
        </div>
        <!-- End-->
    </div>
</div><!-- END: CONTENT/SLIDERS/TEAM-2 -->
<!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Nuestros Clientes</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <!-- End-->
            <!-- Begin: Owlcarousel -->
            <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1"  data-auto-play="false" data-rtl="false" data-slide-speed="5000" data-auto-play-hover-pause="true"> 
                <?= $clients;?>		 
            </div>
            <!-- End-->
        </div>
        <!-- End-->
    </div>
</div><!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
<!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<div class="c-content-box c-size-lg c-bg-white">
    <div class="container">
        <!-- Begin: testimonials 1 component -->
        <div class="c-content-testimonials-1 c-option-2 wow animated fadeIn" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Nuestros Clientes Satisfechos</h3>
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