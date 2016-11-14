<?php

namespace humhub\modules\humhubModuleExample\widgets;

use Yii;
use humhub\components\Widget;

/**
 * Class BaseWidget

 * @package humhub\modules\humhubModuleExample\widgets
 */
class BaseWidget extends Widget
{
    /**
     * @return void
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('base');
    }
}
