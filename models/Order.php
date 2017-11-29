<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property double $amount
 * @property string $ship_name
 * @property string $ship_address
 * @property string $departament
 * @property string $province
 * @property string $district
 * @property string $country
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property double $shipping
 * @property double $tax
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $shipped
 * @property string $tracking_number
 * @property string $typepayment
 * @property string $notes
 * @property integer $active
 *
 * @property Detailorder[] $detailorders
 */
class Order extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['amount', 'ship_name', 'ship_address', 'departament', 'province', 'district', 'country', 'phone', 'email', 'shipping', 'tax', 'created_at', 'updated_at', 'tracking_number'], 'required'],
            [['amount', 'shipping', 'tax'], 'number'],
            [['created_at', 'updated_at', 'shipped', 'active'], 'integer'],
            [['ship_name', 'ship_address', 'departament', 'province', 'district', 'country', 'phone', 'fax', 'email', 'tracking_number'], 'string', 'max' => 255],
            [['typepayment'], 'string', 'max' => 20],
            [['notes'], 'string', 'max' => 500],
            ['email', 'email'],
            ['phone', 'match', 'pattern' => '/^\d{3}\d{3}\d{3}$/gm', 'message' => 'El telefono debe ser numero de 9 digitos'],
            ['fax', 'match', 'pattern' => '/^\d{3}\d{3}\d{3}$/gm', 'message' => 'El telefono debe ser numero de 9 digitos']
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
            'amount' => Yii::t('app', 'Amount'),
            'ship_name' => Yii::t('app', 'Ship Name'),
            'ship_address' => Yii::t('app', 'Ship Address'),
            'departament' => Yii::t('app', 'Departament'),
            'province' => Yii::t('app', 'Province'),
            'district' => Yii::t('app', 'District'),
            'country' => Yii::t('app', 'Country'),
            'phone' => Yii::t('app', 'Phone'),
            'fax' => Yii::t('app', 'Fax'),
            'email' => Yii::t('app', 'Email'),
            'shipping' => Yii::t('app', 'Shipping'),
            'tax' => Yii::t('app', 'Tax'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'shipped' => Yii::t('app', 'Shipped'),
            'tracking_number' => Yii::t('app', 'Tracking Number'),
            'typepayment' => Yii::t('app', 'Typepayment'),
            'notes' => Yii::t('app', 'Notes'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailorders() {
        return $this->hasMany(Detailorder::className(), ['order_id' => 'id']);
    }

}
