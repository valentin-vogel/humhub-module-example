<?php

namespace humhub\modules\humhubModuleExample;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class Assets
 *
 * @package humhub\modules\humhubModuleExample
 */
class Assets extends AssetBundle
{
    public $css = [

    ];

    public $js = [

    ];

    public $jsOptions = [
        'position' => View::POS_BEGIN
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
