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
        'css/style.css',
        'css/left.css',
        'css/side.css',
        'css/bootstrap-reset.css',
        'css/jquery.steps.css',
        'asset/vendor/cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css',
        'asset/vendor/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        'asset/vendor/api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css',
    ];
    public $js = [

        'js/app.js',
        'js/index.js',
        'js/main.js',
        'js/stepper',
        'asset/vendor/code.jquery.com/jquery-3.5.1.slim.min.js',
        'asset/vendor/cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',
        'asset/vendor/cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js',
        'asset/vendor/unpkg.com/ionicons@5.1.2/dist/ionicons.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
