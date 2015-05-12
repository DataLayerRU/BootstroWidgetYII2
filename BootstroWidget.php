<?php

namespace datalayerru\ScheduleWidget;

class BootstroWidget extends \yii\base\Widget
{
    /**
     * CSS selector
     *
     * @var string
     */
    public $startSelector = '';

    /**
     * Plugin's options
     *
     * @var array
     */
    public $pluginOptions = [];

    public function run()
    {
        return $this->render('index',
                        ['pluginOptions' => $this->pluginOptions,
                    'startSelector' => $this->startSelector]);
    }
}