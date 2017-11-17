<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property integer $id
 * @property string $email
 * @property string $phone
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $active
 */
class Subscribers extends \yii\db\ActiveRecord {

    const SCENARIO_SIMULATOR = 'simulator';
    const SCENARIO_MAIN = 'main';

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_SIMULATOR] = ['email', 'phone'];
        $scenarios[self::SCENARIO_MAIN] = ['email'];
        return $scenarios;
    }
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['created_at', 'updated_at', 'active'], 'integer'],
            [['email', 'phone'], 'string', 'max' => 255],
            [['email'], 'unique' , 'on' => self::SCENARIO_MAIN],
        ];
    }

    public function behaviors() {
        return [
            \yii\behaviors\TimestampBehavior::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

}
