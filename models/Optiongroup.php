<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "optiongroup".
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 *
 * @property Option[] $options
 * @property Productoption[] $productoptions
 */
class Optiongroup extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'optiongroup';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions() {
        return $this->hasMany(Option::className(), ['optiongroup_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions() {
        return $this->hasMany(Productoption::className(), ['optiongroup_id' => 'id']);
    }

}
