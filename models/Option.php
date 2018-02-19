<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "option".
 *
 * @property integer $id
 * @property string $name
 * @property integer $optiongroup_id
 * @property integer $active
 *
 * @property Optiongroup $optiongroup
 * @property Productoption[] $productoptions
 */
class Option extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'optiongroup_id'], 'required'],
            [['optiongroup_id', 'active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['optiongroup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Optiongroup::className(), 'targetAttribute' => ['optiongroup_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'optiongroup_id' => Yii::t('app', 'Optiongroup ID'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptiongroup()
    {
        return $this->hasOne(Optiongroup::className(), ['id' => 'optiongroup_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoption::className(), ['option_id' => 'id']);
    }
}
