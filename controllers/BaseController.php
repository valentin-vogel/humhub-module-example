<?php

namespace humhub\modules\humhubModuleExample\controllers;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\components\Controller;
use humhub\components\behaviors\AccessControl;

/**
 * Class BaseController
 *
 * @package humhub\modules\humhubModuleExample\controllers
 */
class BaseController extends Controller
{
    /**
     * @var string
     */
    public $subLayout = "@humhub/modules/humhubModuleExample/views/base/_layout";

    /**
     * @return void
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => AccessControl::className(),
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
