<?php

namespace app\assets;

use yii\web\AssetBundle;
/**
 * Main application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/plugins.css',
        'style.css',
        'css/custom.css',
    ];
    public $js = [
        'js/vendor/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/plugins.js',
        'js/active.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\FontAwesomeAsset',
    ];
}