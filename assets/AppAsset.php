<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            'css/style.css?v=006',
            'css/bootstrap.min.css',
    ];
    public $js = [
        'js/jquery-3.3.1.js',
        'js/bootstrap.js',
    ];
    public $depends = [
//        'app\assets\JqueryAsset'
//        'yii\web\YiiAsset',

//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
