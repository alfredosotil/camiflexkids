<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailorder".
 *
 * @property integer $id
 * @property string $name
 * @property double $price_per_unit
 * @property double $price
 * @property double $tax
 * @property double $vat
 * @property integer $qty
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $active
 *
 * @property Order $order
 * @property Product $product
 */
class Detailorder extends \yii\db\ActiveRecord implements \yii2mod\cart\models\CartItemInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price_per_unit', 'price', 'tax', 'vat', 'product_id'], 'required'],
            [['price_per_unit', 'price', 'tax', 'vat'], 'number'],
            [['qty', 'order_id', 'product_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
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
            'name' => Yii::t('app', 'Name'),
            'price_per_unit' => Yii::t('app', 'Price Per Unit'),
            'price' => Yii::t('app', 'Price'),
            'tax' => Yii::t('app', 'Tax'),
            'vat' => Yii::t('app', 'Vat'),
            'qty' => Yii::t('app', 'Qty'),
            'order_id' => Yii::t('app', 'Order ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
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
