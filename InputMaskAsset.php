<?php

namespace panix\ext\inputmask;

use yii\web\AssetBundle;
use yii\web\View;

class InputMaskAsset extends AssetBundle
{

    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $sourcePath = '@vendor/robinherbots/jquery.inputmask/dist/min/inputmask';

    public $js = [
        'inputmask.min.js',
        'jquery.inputmask.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
