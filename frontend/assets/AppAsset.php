<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [ 
     "css/font-awesome.min.css",
    "css/ionicons.min.css",
     "css/linearicons.css",
     "css/nice-select.css",
     "css/jquery.fancybox.css",
    "css/jquery-ui.min.css",
     "css/meanmenu.min.css",
    "css/nivo-slider.css",
    "css/owl.carousel.min.css",
    "css/bootstrap.min.css",
    "css/default.css",
    "css/style.css",
    "css/responsive.css" ,

    ];
    public $js = [
        "js/jquery-3.2.1.min.js",
        "js/jquery.countdown.min.js", 
        "js/jquery.meanmenu.min.js",
        "js/jquery.scrollUp.js",
        "js/jquery.nivo.slider.js",
        "js/jquery.fancybox.min.js", 
        "js/jquery.nice-select.min.js",
        "js/jquery-ui.min.js",
        "js/owl.carousel.min.js",     
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/plugins.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
