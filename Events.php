<?php

namespace humhub\modules\humhubModuleExample;

use Yii;
use yii\helpers\Url;
use yii\base\Object;
use humhub\modules\humhubModuleExample\widgets\BaseWidget;

/**
 * Class Events
 *
 * @package humhub\modules\humhubModuleExample
 */
class Events extends Object
{
    /**
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addItem(array(
            'label' => Yii::t('BaseModule.base', 'topMenuLabel'),
            'url' => Url::to(['/humhubModuleExample/base/index']),
            'icon' => '<i class="fa fa-bug"></i>',
            'isActive' => (
                Yii::$app->controller->module
                && Yii::$app->controller->module->id == 'humhubModuleExample'
                && Yii::$app->controller->id == 'base'
            ),
            'sortOrder' => 430,
        ));
    }

    /**
     * @param $event
     */
    public static function onDashboardSidebarInit($event)
    {
        $event->sender->addWidget(BaseWidget::className(), array(), array('sortOrder' => -1));
    }
}
