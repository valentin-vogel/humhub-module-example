<?php

namespace humhub\modules\humhubModuleExample\commands;

use yii\console\Controller;

/**
 * Class BaseCronController
 *
 * @package humhub\modules\humhubModuleExample\commands
 */
class BaseCronController extends Controller
{
    /**
     * comment is displayed in console if you run php yii in protected directory
     *
     * @return void
     */
    public function actionIndex()
    {
        $this->stdout("\n Example Module Base Command: " . date('d.m.y h:i:s') . " Done!\n");
    }
}
