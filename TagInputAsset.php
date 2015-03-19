<?php

/**
 * @copyright Copyright &copy; Thành Nguyễn 2015
 * @package kun-widgets
 * @subpackage kun-widget-tagsinput
 * @version 1.0.0
 */

namespace kun391\tagsinput;

use Yii;

/**
 * Asset bundle for Tags input Widget
 *
 * @author kun <nguyentruongthanh.dn@gmail.com>
 * @since 1.0
 */
class TagInputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '';

    public $css = [
        'css/bootstrap-tagsinput.css',
    ];
    public $js = [
        'js/bootstrap-tagsinput.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}