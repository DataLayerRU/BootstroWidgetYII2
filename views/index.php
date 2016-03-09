<?php
/* @var $this yii\web\View */
/* @var $pluginOptions array */
/* @var $startSelector string */

use yii\helpers\Json;
use professionalweb\BootstroWidget\assets\BootstroAsset;

BootstroAsset::register($this);

$this->registerJs(''
        .'bootstro.start(\''.$startSelector.'\', '.Json::encode($pluginOptions).');'
        .'');
