<?php

namespace humhub\modules\humhubExampleModule\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use humhub\components\ActiveRecord;
use humhub\modules\user\models\User;

/**
 * This is the model class for table "humhub_module_example_base".
 *
 * The followings are the available columns in table 'humhub_module_example_base':
 *
 * @property integer $id
 * @property string $title
 * @property integer $user_id
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class HumhubModuleExampleBase extends ActiveRecord
{
    /**
     * @return void
     */
    public function init()
    {
        parent::init();
    }

    /**
     * the associated database table name
     *
     * @return string
     */
    public static function tableName()
    {
        return 'humhub_module_example_base';
    }

    /**
     * add related fields to searchable attributes
     *
     * @return array
     */
    public function attributes()
    {
        return array_merge(parent::attributes(), [
            'User.username'
        ]);
    }

    /**
     * validation for model attributes.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [
                [
                    'title',
	                'user_id'
                ],
                'required'
            ],
            [
                [
                    'user_id'
                ],
                'integer'
            ],
            [
                [
                    'title'
                ],
                'string',
                'max' => 255
            ],
            [
                [
                    'title',
	                'user_id'
                ],
                'safe'
            ]
        ];
    }

    /**
     * @return array
     */
    public function relations()
    {
        return [
            'User' => [self::BELONGS_TO, 'User', 'user_id']
        ];
    }

    /**
     * relation function for table user
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), [
            'id' => 'user_id'
        ])->from(['user' => User::tableName()]);
    }

    /**
     * customized labels (name=>label)
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('BaseModule.base', 'id'),
            'title' => Yii::t('BaseModule.base', 'title'),
            'user_id' => Yii::t('BaseModule.base', 'userID'),
            'created_at' => Yii::t('BaseModule.base', 'createdAt'),
            'created_by' => Yii::t('BaseModule.base', 'createdBy'),
            'updated_at' => Yii::t('BaseModule.base', 'updatedAt'),
            'updated_by' => Yii::t('BaseModule.base', 'updatedBy')
        ];
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = HumhubModuleExampleBase::find()->joinWith([
            'User'
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false
        ]);

        $dataProvider->setSort([
            'attributes' => [
	            'title',
                'user_id'
            ]
        ]);

        $this->load($params);

        $query->andFilterWhere(['like', 'title', $this->title]);
        $query->andFilterWhere(['like', 'User.username', $this->getAttribute('User.username')]);

        return $dataProvider;
    }
}
