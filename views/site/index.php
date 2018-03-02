<?php
/* @var $this yii\web\View */
$this->title = 'Inicio';

?>
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-3 -->
<section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>
                <!--BEGIN: SLIDE -->
                <?= $slides ?>
                <!--END -->                
            </ul>
        </div>
    </div>
</section>
<!-- END: LAYOUT/SLIDERS/REVO-SLIDER-3 -->

<?= $this->render('services-template'); ?>

<!-- BEGIN: CONTENT/ISOTOPE/GALLERY-4 -->
<?php if (true): ?>
    <div class="c-content-box c-size-md c-bg-grey-1" id="team">
        <div class="container">
            <div class="c-content-person-1-slider" data-slider="owl">
                <div class="c-content-title-1 wow animated fadeIn">
                    <h3 class="c-center c-font-uppercase c-font-bold">10 Razones para tener pisos de EVA</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>

                <div class="owl-carousel owl-theme c-theme c-owl-nav-center wow animated fadeInUp" data-items="3" data-slide-speed="8000" data-rtl="false"> 
                    <?= $reasons ?> 
                </div>       
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (true): ?>
    <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-84.jpg)">
        <div class="container">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Mira Nuestra Galer&iacute;a</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="c-content-isotope-filter-1 c-center">
                <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom c-active" data-filter="*">Mostrar Todo</button>
                <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-nido">Nidos</button>
                <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-casa">Casas</button>
                <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-clinica">Cl&iacute;nicas</button>
            </div>
            <div class="c-content-isotope-gallery c-opt-4">
                <?= $gallery ?>
            </div>
        </div> 
    </div>
<?php endif; ?>
<!-- END: CONTENT/ISOTOPE/GALLERY-4 -->

<!-- BEGIN: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
<!--<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">Ultimos Proyectos</h3>
            <div class="c-line-center c-theme-bg"></div>
            <p class="c-center c-font-uppercase">Te mostramos nuestro trabajo.</p>
        </div>			
        <div class="cbp-panel">
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project3.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project4.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project5.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project6.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
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
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/ajax/projects/project7.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                    <a href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/39_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>-->
<!-- END: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->

<!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<?php if (false): ?>
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
                                “Camiflexkids is an international, privately held company that specializes in the start-up, promotion and operation of multiple online marketplaces”
                            </p>
                            <h3>
                                <span class="c-name c-theme">John Snow</span>, CEO, Mockingbird
                            </h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-testimonial">
                            <p>
                                “After co-founding the company in 2006 the group launched Camiflexkids, the first digital marketplace which focused on rich multimedia web content”
                            </p>
                            <h3>
                                <span class="c-name c-theme">Arya Stark</span>,  CFO, Valar Dohaeris
                            </h3>
                        </div>
                    </div>	
                    <div class="item">
                        <div class="c-testimonial">
                            <p>
                                “It was the smoothest implementation process I have ever been through with Camiflexkids’s process and schedule.”
                            </p>
                            <h3>
                                <span class="c-name c-theme">Arya Stark</span>,  CFO, Valar Dohaeris
                            </h3>
                        </div>
                    </div>	
                    <div class="item">
                        <div class="c-testimonial">
                            <p>
                                “A system change is always stressful and Camiflexkids did a great job of staying positive, helpful, and patient with us.”
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
<?php endif; ?>

<!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<!-- END: PAGE CONTENT -->
