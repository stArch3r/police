<?php


namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class TagsInputAsset
 *
 * 
 * @package frontend\assets
 */
class TagsInputAsset extends AssetBundle
{
    public $basePath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsinput';
    public $css = [
        'tagsinput.css'
    ];

    public $js = [
        'tagsinput.js'
    ];

    public $depends = [
        JqueryAsset::class
    ];
}