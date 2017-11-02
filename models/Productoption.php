<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productoption".
 *
 * @property integer $id
 * @property string $name
 * @property integer $priceincrement
 * @property integer $product_id
 * @property integer $option_id
 * @property integer $optiongroup_id
 * @property integer $active
 *
 * @property Option $option
 * @property Optiongroup $optiongroup
 * @property Product $product
 */
class Productoption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoption';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'product_id', 'option_id', 'optiongroup_id'], 'required'],
            [['priceincrement', 'product_id', 'option_id', 'optiongroup_id', 'active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['option_id'], 'exist', 'skipOnError' => true, 'targetClass' => Option::className(), 'targetAttribute' => ['option_id' => 'id']],
            [['optiongroup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Optiongroup::className(), 'targetAttribute' => ['optiongroup_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
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
            'priceincrement' => Yii::t('app', 'Priceincrement'),
            'product_id' => Yii::t('app', 'Product ID'),
            'option_id' => Yii::t('app', 'Option ID'),
            'optiongroup_id' => Yii::t('app', 'Optiongroup ID'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOption()
    {
        return $this->hasOne(Option::className(), ['id' => 'option_id']);
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
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
