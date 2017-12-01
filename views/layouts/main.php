<?php

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\LoginFormWidget;
use app\widgets\PasswordResetRequestFormWidget;
use app\widgets\SignupFormWidget;
use app\widgets\CartViewWidget;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>" data-ng-app="camiflexkids-app">
    <head>
        <?php
        $this->registerMetaTag(['charset' => Yii::$app->charset]);
        $this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
        $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);
        $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, user-scalable=no']);
        $this->registerMetaTag(['name' => 'title', 'content' => "CAMIFLEXKIDS | www.camiflexkids.com"]);
        $this->registerMetaTag(['name' => 'description', 'content' => 'Empresa Peruana dedicada al rubro de la proteccion de los niños con productos antibacteriales e higienicos.']);
        $this->registerMetaTag(['name' => 'author', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'DC.Title', 'content' => "CAMIFLEXKIDS | www.camiflexkids.com"]);
        $this->registerMetaTag(['name' => 'DC.Contributor', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'DC.Creator', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'DC.Description', 'content' => 'Empresa Peruana dedicada al rubro de la proteccion de los niños con productos antibacteriales e higienicos.']);
        $this->registerMetaTag(['name' => 'DC.Language', 'content' => "es"]);
        $this->registerMetaTag(['name' => 'DC.Publisher', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'geo.region', 'content' => 'PE-CAL']);
        $this->registerMetaTag(['name' => 'geo.placename', 'content' => 'Lima']);
        $this->registerMetaTag(['name' => 'geo.position', 'content' => '-12.046373;-77.042754']);
        $this->registerMetaTag(['name' => 'ICBM', 'content' => '-12.046373;-77.042754']);
        $this->registerMetaTag(['name' => 'og:site_name', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'og:type', 'content' => "website"]);
        $this->registerMetaTag(['name' => 'og:title', 'content' => 'CAMIFLEXKIDS | www.camiflexkids.com']);
        $this->registerMetaTag(['name' => 'og:description', 'content' => 'Empresa Peruana dedicada al rubro de la proteccion de los niños con productos antibacteriales e higienicos.']);
        $this->registerMetaTag(['name' => 'og:url', 'content' => "http://www.camiflexkids.com/"]);
        $this->registerMetaTag(['name' => 'og:image', 'content' => yii\helpers\Url::base(true) . '/img/logo-transparente.png']);
        $this->registerMetaTag(['name' => 'og:image:type', 'content' => "image/png"]);
        $this->registerMetaTag(['name' => 'og:image:height', 'content' => "226"]);
        $this->registerMetaTag(['name' => 'og:image:width', 'content' => "55"]);
        ?>

        <link rel="icon" href="<?= Yii::$app->request->baseUrl; ?>/img/favicon.ico" type="image/x-icon"> 
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo implode(' | ', array_filter([Html::encode($this->title), Yii::$app->name])); ?></title>
        <?php $this->head() ?>
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fixed-non-minimized c-layout-header-fullscreen" data-ng-controller="MainController">
        <?php $this->beginBody() ?>
        <?= (Yii::$app->user->isGuest ? LoginFormWidget::widget([]) : ''); ?>
        <?= (Yii::$app->user->isGuest ? PasswordResetRequestFormWidget::widget([]) : ''); ?>
        <?= (Yii::$app->user->isGuest ? SignupFormWidget::widget([]) : ''); ?>
        <?= app\widgets\ViewAlertWidget::widget([]); ?>
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-5 c-layout-header-dark-mobile" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container-fluid">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="<?= Url::toRoute("site/index") ?>" class="c-logo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/img/logo-transparente.png" alt="CAMIFLEXKIDS" class="c-desktop-logo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/img/logo-transparente.png" alt="CAMIFLEXKIDS" class="c-desktop-logo-inverse">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/img/logo-transparente.png" alt="CAMIFLEXKIDS" class="c-mobile-logo">
                            </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <!--                            <button class="c-search-toggler" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>-->
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg"><?= count(Yii::$app->cart->getItems()); ?></span>
                            </button>
                        </div>
                        <!-- END: BRAND -->				
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->	
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <?php
                            $items = [
                                [
                                    'label' => 'Inicio<span class="c-arrow c-toggler"></span>',
                                    'url' => ['/site/index'],
                                    'linkOptions' => ['class' => 'c-link', 'style' => ($this->context->route == 'site/index') ? 'color: red;' : null],
//                                    'active' => $this->context->route == 'site/index',
                                ],
                                [
                                    'label' => 'Nosotros<span class="c-arrow c-toggler"></span>',
                                    'url' => ['/site/about'],
                                    'linkOptions' => ['class' => 'c-link', 'style' => ($this->context->route == 'site/about') ? 'color: red;' : null],
//                                    'active' => $this->context->route == 'site/about',
                                ],
                                [
                                    'label' => 'Productos<span class="c-arrow c-toggler"></span>',
                                    'url' => ['/site/products'],
                                    'linkOptions' => ['class' => 'c-link', 'style' => ($this->context->route == 'site/products') ? 'color: red;' : null],
//                                    'active' => $this->context->route == 'site/products',
                                ],
                                [
                                    'label' => 'Simulador<span class="c-arrow c-toggler"></span>',
                                    'url' => ['/site/simulator'],
                                    'linkOptions' => ['class' => 'c-link', 'style' => ($this->context->route == 'site/simulator') ? 'color: red;' : null],
//                                    'active' => $this->context->route == 'site/simulator',
                                ],
                                [
                                    'label' => 'Contacto<span class="c-arrow c-toggler"></span>',
                                    'url' => ['/site/contact'],
                                    'linkOptions' => ['class' => 'c-link', 'style' => ($this->context->route == 'site/contact') ? 'color: red;' : null],
//                                    'active' => $this->context->route == 'site/contact',
                                ],
                                [
                                    'label' => '<i class="icon-handbag c-cart-icon"></i> <span class="c-cart-number c-theme-bg">' . count(Yii::$app->cart->getItems()) . '</span>',
                                    'url' => '#',
                                    'linkOptions' => ['class' => 'c-btn-icon c-cart-toggler'],
                                    'options' => ['class' => 'c-cart-toggler-wrapper']
                                ],
                                [
                                    'label' => '<i class="icon-user"></i>' . Yii::t('yii2mod.user', 'Sign In'),
                                    'url' => '#',
                                    'linkOptions' => [
                                        'class' => 'c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold',
                                        'data' => [
                                            'toggle' => 'modal',
                                            'target' => '#login-form',
                                        ]
                                    ],
                                    'visible' => Yii::$app->user->isGuest
                                ],
                                [
                                    'label' => Yii::t('app', 'User Opt'),
                                    'linkOptions' => ['class' => 'c-link'],
                                    'options' => ['class' => 'c-menu-type-classic'],
                                    'dropDownOptions' => ['class' => 'c-menu-type-classic c-pull-left', 'style' => 'min-width: auto;'],
                                    'items' => [
                                        [
                                            'label' => Yii::t('yii2mod.user', 'Account'),
                                            'url' => ['site/account'],
//                                            'linkOptions' => ['class' => 'c-menu-type-mega c-menu-type-fullwidth'],
//                                            'options' => ['class' => 'c-menu-type-mega c-menu-type-fullwidth']
                                        ],
                                        [
                                            'label' => Yii::t('yii2mod.user', 'Administration'),
                                            'url' => ['admin/'],
                                            'visible' => Yii::$app->getUser()->can('admin'),
//                                            'linkOptions' => ['class' => 'c-menu-type-mega c-menu-type-fullwidth'],
//                                            'options' => ['class' => 'c-menu-type-mega c-menu-type-fullwidth']
                                        ],
                                    ],
//                                    'options' => ['class' => 'c-menu-type-mega c-menu-type-fullwidth'],
                                    'visible' => !Yii::$app->user->isGuest
                                ],
                                ['label' => Yii::t('yii2mod.user', 'Logout'), 'url' => ['site/logout'], 'linkOptions' => ['class' => 'c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold', 'data' => [
                                            'confirm' => Yii::t('yii2mod.user', 'Are you sure you want to sign out?'),
                                            'method' => 'post',
                                        ]],
                                    'visible' => !Yii::$app->user->isGuest
                                ],
                            ];
                            echo Nav::widget([
//                                'options' => ['class' => 'nav navbar-nav c-theme-nav'],
                                'options' => ['class' => 'nav navbar-nav'],
                                'items' => $items,
                                'encodeLabels' => false,
                            ]);
                            ?>
                        </nav>
                        <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->		
                    </div>			
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <?php
                    if (!in_array(Yii::$app->controller->action->id, ['viewcart', ''])) {
                        echo CartViewWidget::widget([]);
                    }
                    ?>
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->        
        <div class="c-layout-page">
            <?= $content ?>
        </div>
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">

            <div class="container">

                <div class="c-prefooter c-bg-white">

                    <div class="c-head">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-left">
                                    <div class="socicon">
                                        <a href="https://www.facebook.com/camiflexkids/" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                        <a href="https://www.instagram.com/camiflexperu/?hl=es-la" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-instagram tooltips" data-original-title="Instagram" data-container="body"></a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="c-line"></div>

                    <div class="c-foot">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Sobre <span class="c-theme-font">CAMIFLEXKIDS</span></h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">Empresa Peruana dedicada al rubro de la proteccion de los niños con productos antibacteriales e higienicos.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Subscribete a nuestras noticias!</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <?= app\widgets\SubscribesFormWidget::widget([]); ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="c-postfooter c-bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey"><?php echo date("Y"); ?> &copy; CubeIT
                                <span class="c-font-grey-3">All Rights Reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>