<?php
namespace frontend\themes\manop;
use yii\web\AssetBundle;

class ManopAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/manop/assets/';

    public $css = [
        'css/bootstrap.css',
        'css/style.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
