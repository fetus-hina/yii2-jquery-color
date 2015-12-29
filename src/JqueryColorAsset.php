<?php
/**
 * @copyright Copyright (C) 2015 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-jquery-color/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\jqueryColor;

use yii\web\AssetBundle;

class JqueryColorAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-color';
    public $js = [
        'jquery.color.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
