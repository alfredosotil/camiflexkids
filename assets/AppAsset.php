<?php
/**
 * @see      http://www.yiiframework.com/
 *
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since  2.0
 */
class AppAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $basePath = '@webroot';

    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
        'plugins/socicon/socicon.css',
        'plugins/bootstrap-social/bootstrap-social.css',
        'plugins/simple-line-icons/simple-line-icons.min.css',
        'plugins/font-awesome/css/font-awesome.min.css',
        'plugins/select2/css/select2.min.css',
        'plugins/select2/css/select2-bootstrap.min.css',
        'plugins/animate/animate.min.css',
//        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/revo-slider/css/settings.css',
        'plugins/revo-slider/css/layers.css',
        'plugins/revo-slider/css/navigation.css',
        'plugins/cubeportfolio/css/cubeportfolio.min.css',
        'plugins/owl-carousel/assets/owl.carousel.css',
        'plugins/fancybox/jquery.fancybox.css',
        'plugins/slider-for-bootstrap/css/slider.css',
        'plugins/ilightbox/css/ilightbox.css',
//        'plugins/ilightbox/dark-skin/skin.css',
        'plugins/ilightbox01/css/jquery.lightbox.css',
        'css/plugins.css',
        'css/ladda-themeless.min.css',
//        'css/ladda.min.css',
        'css/components.css',
        'css/custom.css',
        'css/default.css',
        'css/site.css',
    ];

    /**
     * @var array
     */
    public $js = [
//        'plugins/jquery.min.js',
        'plugins/jquery-migrate.min.js',
//        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/jquery.easing.min.js',
        'plugins/select2/js/select2.full.min.js',
        'plugins/jquery-validation/js/jquery.validate.min.js',
        'plugins/jquery-validation/js/additional-methods.min.js',
        'plugins/zoom-master/jquery.zoom.min.js',
        'plugins/reveal-animate/wow.js',
        'plugins/reveal-animate/reveal-animate.js',
        'plugins/revo-slider/js/jquery.themepunch.tools.min.js',
        'plugins/revo-slider/js/jquery.themepunch.revolution.min.js',
        'plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js',
        'plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js',
        'plugins/revo-slider/js/extensions/revolution.extension.video.min.js',
        'plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js',
        'plugins/cubeportfolio/js/jquery.cubeportfolio.min.js',
        'plugins/owl-carousel/owl.carousel.min.js',
        'plugins/counterup/jquery.waypoints.min.js',
        'plugins/counterup/jquery.counterup.min.js',
        'plugins/fancybox/jquery.fancybox.pack.js',
        'plugins/smooth-scroll/jquery.smooth-scroll.js',
        'plugins/typed/typed.min.js',
        'plugins/slider-for-bootstrap/js/bootstrap-slider.js',
        'plugins/js-cookie/js.cookie.js',
        
        'js/components.js',
        'js/components-shop.js',
        'js/app.js',
        'js/main.js',
        
        'plugins/revo-slider/slider-3.js',
        'plugins/isotope/isotope.pkgd.min.js',
        'plugins/isotope/imagesloaded.pkgd.min.js',
        'plugins/isotope/packery-mode.pkgd.min.js',
//        'plugins/ilightbox/js/jquery.requestAnimationFrame.js',
//        'plugins/ilightbox/js/jquery.mousewheel.js',
//        'plugins/ilightbox/js/ilightbox.packed.js',
        'plugins/ilightbox01/js/jquery.lightbox.min.js',
        'plugins/isotope/isotope-gallery.js',
        'plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js',
//        'plugins/isotope/isotope-grid.js',
        'js/spin.min.js',
        'js/ladda.min.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii2mod\alert\AlertAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public static function custom_echo($x, $length)
    {
        if (strlen($x) <= $length) {
            echo $x;
        } else {
            $y = substr($x, 0, $length) . '...';
            echo $y;
        }
    }
}
