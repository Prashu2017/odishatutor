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
        'css/site.css',
        'css/main.css',
        'css/style.css',
        'css/homestyle.css',
        'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/jquery-ui.css',
        'css/responsive.css',
        'css/simplyscroll.css',
    ];
    public $js = [
        // 'js/appear.js',
        // 'js/bootstrap-add-clear.min.js',
        // 'js/bootstrap-timepicker.min.js',
        // 'js/bootstrap.js',
        // 'js/bootstrap.min.js',
        // 'js/chosen.jquery.js',
        // 'js/jquery-ui.js',
        // 'js/jquery.countdown.js',
        // 'js/jquery.min.js',
        // 'js/main.js',
        // 'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
