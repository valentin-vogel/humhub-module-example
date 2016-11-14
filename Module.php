<?php

namespace humhub\modules\humhubModuleExample;

use Yii;
use yii\console\Application;

/**
 * Class Module
 *
 * @package humhub\modules\humhubModuleExample
 */
class Module extends \humhub\components\Module
{
    /**
     * @return void
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return void
     */
    public function enable()
    {
        if (!Yii::$app->hasModule('humhubModuleExample')) {
        }
        parent::enable();
    }
}
