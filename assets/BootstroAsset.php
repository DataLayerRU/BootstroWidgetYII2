<?php

namespace datalayerru\BootstroWidget\assets;

use yii\web\AssetBundle;

class BootstroAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstro';
    public $css        = [
        'bootstro.css'
    ];
    public $js         = [
        'bootstro.min.js'
    ];
    public $depends    = [
        'datalayerru\ScheduleWidget\assetbundles\AngularAsset',
        'datalayerru\ScheduleWidget\assetbundles\UITreeAsset',
        'datalayerru\ScheduleWidget\assetbundles\CssElementQueriesAsset'
    ];

}