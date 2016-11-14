<?php

use humhub\widgets\TopMenu;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\humhubModuleExample\controllers;

return [
    'id' => 'humhubModuleExample',
    'class' => 'humhub\modules\humhubModuleExample\Module',
    'namespace' => 'humhub\modules\humhubModuleExample',
    'events' => [
        [
            'class' => TopMenu::className(),
            'event' => TopMenu::EVENT_INIT,
            'callback' => ['humhub\modules\humhubModuleExample\Events', 'onTopMenuInit']
        ],
        [
            'class' => Sidebar::className(),
            'event' => Sidebar::EVENT_INIT,
            'callback' => ['humhub\modules\humhubModuleExample\Events', 'onDashboardSidebarInit']
        ]
    ]
];
