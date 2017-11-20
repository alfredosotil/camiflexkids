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
<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/content/backgrounds/bg-84.jpg)">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Mira Nuestra Galer&iacute;a</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="c-content-isotope-filter-1 c-center">
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom c-active" data-filter="*">Mostrar Todo</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-web">Nidos</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-brand">Casas</button>
            <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-design">Cl&iacute;nicas</button>
            <!--<button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-photo">Photo</button>-->
        </div>
        <div class="c-content-isotope-gallery c-opt-4">
            <div class="c-content-isotope-item c-isotope-photo">
                <div class="c-content-isotope-image-container">
                    <img class="c-content-isotope-image" src="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg"/>
                    <div class="c-content-isotope-overlay c-ilightbox-image-4"
                         href="<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg"
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/13.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/81.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/63.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/48.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/33.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/2.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/7.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock/11.jpg'"
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
                         data-options="thumbnail:'<?= Yii::$app->request->baseUrl; ?>/img/content/stock5/9.jpg'"
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
<!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-2 -->
<!-- END: PAGE CONTENT -->
