<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailcart".
 *
 * @property integer $id
 * @property double $price_per_unit
 * @property double $price
 * @property double $tax_amount
 * @property integer $qty
 * @property integer $product_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $active
 *
 * @property Product $product
 */
class Detailcart extends \yii\db\ActiveRecord implements CartItemInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailcart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_per_unit', 'price', 'product_id', 'created_at', 'updated_at'], 'required'],
            [['price_per_unit', 'price', 'tax_amount'], 'number'],
            [['qty', 'product_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
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
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'price_per_unit' => Yii::t('app', 'Price Per Unit'),
            'price' => Yii::t('app', 'Price'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'qty' => Yii::t('app', 'Qty'),
            'product_id' => Yii::t('app', 'Product ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
    
    public function getPrice()
    {
        return $this->price;
    }

    public function getLabel()
    {
        return $this->name;
    }

    public function getUniqueId()
    {
        return $this->id;
    }
}
