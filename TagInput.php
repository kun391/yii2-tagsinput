<?php

/**
 * @copyright Copyright &copy; Thành Nguyễn
 * @package yii2-widgets
 * @subpackage yii2-widget-TagInput
 * @version 1.0.0
 */

namespace kun391\tagsinput;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;

/**
 *
 * @author Thành Nguyễn <nguyentruongthanh.dn@gmail.com>
 * @since 1.0
 * @see http://kun391.github.com/yii2-tagsinput/
 */
class TagInput extends \kartik\base\InputWidget
{

    /**
     * Initializes the widget
     *
     * @throw InvalidConfigException
     */
    public function init()
    {
        parent::init();
        $this->setPluginOptions();
        $this->registerAssets();
        echo $this->getInput('textInput');
    }

    /**
     * Set the plugin options
     */
    protected function setPluginOptions()
    {
        $defaults = [
            'trimValue' => true,
            'tagClass' => 'label label-primary',
        ];
        $this->pluginOptions = array_replace_recursive($defaults, $this->pluginOptions);
        if (ArrayHelper::getValue($this->pluginOptions, 'verticalbuttons', false)
            && empty($this->pluginOptions['prefix'])) {
            Html::addCssClass($this->options, 'input-left-rounded');
        }
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        TagInputAsset::register($view);

        $this->registerPlugin('tagsinput');
    }
}
