<?php

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii2mod\notify\BootstrapNotify;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
    <head>
        <?php $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
        <?php $this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']); ?>
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo implode(' | ', array_filter([Html::encode($this->title), Yii::$app->name])); ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php echo BootstrapNotify::widget(); ?>
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-5 c-layout-header-dark-mobile" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container-fluid">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index.html" class="c-logo">
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
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
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
                            <ul class="nav navbar-nav c-theme-nav"> 
                                <li class="c-active">
                                    <a href="<?= Url::toRoute("site/index") ?>" class="c-link">Inicio<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li class="c-menu-type-classic">
                                    <a href="<?= Url::toRoute("site/about") ?>" class="c-link">Nosotros<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li >
                                    <a href="<?= Url::toRoute("site/products") ?>" class="c-link">Productos<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li>
                                    <a href="<?= Url::toRoute("site/simulator") ?>" class="c-link">Simulador<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li>
                                    <a href="<?= Url::toRoute("site/contact") ?>" class="c-link">Contacto<span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li class="c-search-toggler-wrapper">
                                    <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                                </li>

                                <li class="c-cart-toggler-wrapper">
                                    <a  href="#" class="c-btn-icon c-cart-toggler"><i class="icon-handbag c-cart-icon"></i> <span class="c-cart-number c-theme-bg">2</span></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Sign In</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->		
                    </div>			
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    <div class="c-cart-menu">
                        <div class="c-cart-menu-title">
                            <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                            <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                        </div>
                        <ul class="c-cart-menu-items">
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/shop2/24.jpg"/>
                                <div class="c-cart-menu-content">
                                    <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                                    <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                                </div>
                            </li>
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/shop2/12.jpg"/>
                                <div class="c-cart-menu-content">
                                    <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                                    <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                                </div>
                            </li>
                        </ul> 
                        <div class="c-cart-menu-footer">
                            <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                            <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                        </div>
                    </div>
                    <!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->

        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">                
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form>
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Fullname</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname">
                            </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Country</label>
                                <select class="form-control input-lg c-square" id="signup-country">
                                    <option value="1">Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form>
                            <div class="form-group">
                                <label for="login-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="login-rememberme" class="c-check">
                                    <label for="login-rememberme" class="c-font-thin c-font-17">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                            Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i>
                                            Google
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">                
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/USER/LOGIN-FORM -->

        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <nav class="c-layout-quick-sidebar">
            <div class="c-header">
                <button type="button" class="c-link c-close">
                    <i class="icon-login"></i>		
                </button>
            </div>
            <div class="c-content">
                <div class="c-section">
                    <h3>JANGO DEMOS</h3>
                    <div class="c-settings c-demos c-bs-grid-reset-space">	
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.html" class="c-demo-container c-demo-img-lg">
                                    <div class="c-demo-thumb active">
                                        <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/quick-sidebar/default.jpg" class="c-demo-thumb-img"/>
                                    </div>
                                </a>	
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="../corporate_1/index.html" class="c-demo-container">
                                    <div class="c-demo-thumb  c-thumb-left">
                                        <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/quick-sidebar/corporate_1.jpg" class="c-demo-thumb-img"/>
                                    </div>
                                </a>	
                            </div>
                            <div class="col-md-6">
                                <a href="../agency_1/index.html" class="c-demo-container">
                                    <div class="c-demo-thumb  c-thumb-right">
                                        <img src="<?= Yii::$app->request->baseUrl; ?>/img/content/quick-sidebar/corporate_1-onepage.jpg" class="c-demo-thumb-img"/>
                                    </div>
                                </a>	
                            </div>
                        </div>			
                    </div>
                </div>	
                <div class="c-section">
                    <h3>Theme Colors</h3>
                    <div class="c-settings">

                        <span class="c-color c-default c-active" data-color="default"></span>

                        <span class="c-color c-green1" data-color="green1"></span>
                        <span class="c-color c-green2" data-color="green2"></span>
                        <span class="c-color c-green3" data-color="green3"></span>

                        <span class="c-color c-yellow1" data-color="yellow1"></span>
                        <span class="c-color c-yellow2" data-color="yellow2"></span>
                        <span class="c-color c-yellow3" data-color="yellow3"></span>

                        <span class="c-color c-red1" data-color="red1"></span>
                        <span class="c-color c-red2" data-color="red2"></span>
                        <span class="c-color c-red3" data-color="red3"></span>

                        <span class="c-color c-purple1" data-color="purple1"></span>
                        <span class="c-color c-purple2" data-color="purple2"></span>
                        <span class="c-color c-purple3" data-color="purple3"></span>

                        <span class="c-color c-blue1" data-color="blue1"></span>
                        <span class="c-color c-blue2" data-color="blue2"></span>
                        <span class="c-color c-blue3" data-color="blue3"></span>

                        <span class="c-color c-brown1" data-color="brown1"></span>
                        <span class="c-color c-brown2" data-color="brown2"></span>
                        <span class="c-color c-brown3" data-color="brown3"></span>

                        <span class="c-color c-dark1" data-color="dark1"></span>
                        <span class="c-color c-dark2" data-color="dark2"></span>
                        <span class="c-color c-dark3" data-color="dark3"></span>
                    </div>
                </div>	
                <div class="c-section">
                    <h3>Header Type</h3>
                    <div class="c-settings">				
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed"/>
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid"/>
                    </div>
                </div>		
                <div class="c-section">
                    <h3>Header Mode</h3>
                    <div class="c-settings">			
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed"/>
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static"/>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Mega Menu Style</h3>
                    <div class="c-settings">			
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark"/>
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Font Style</h3>
                    <div class="c-settings">			
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default"/>
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Reading Style</h3>
                    <div class="c-settings">	
                        <a href="../../index.html" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>		
                        <a href="http://www.themehats.com/themes/jango/rtl/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>		
                    </div>
                </div>
            </div>
        </nav><!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
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
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
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
                                    <h3 class="c-font-uppercase c-font-bold">About <span class="c-theme-font">CAMIFLEXKIDS</span></h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Your Email Here"/>
                                        <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
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