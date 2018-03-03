<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
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
 * @property int $created_at
 * @property int $updated_at
 * @property int $shipped
 * @property string $tracking_number
 * @property int $ispaid
 * @property string $typepayment
 * @property string $notes
 * @property int $active
 * @property int $user_id
 *
 * @property Detailorder[] $detailorders
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount', 'ship_name', 'ship_address', 'departament', 'province', 'district', 'country', 'phone', 'email', 'shipping', 'tax', 'tracking_number', 'user_id'], 'required'],
            [['amount', 'shipping', 'tax'], 'number'],
            [['created_at', 'updated_at', 'shipped', 'ispaid', 'active', 'user_id'], 'integer'],
            [['ship_name', 'ship_address', 'departament', 'province', 'district', 'country', 'phone', 'fax', 'email', 'tracking_number'], 'string', 'max' => 255],
            [['typepayment'], 'string', 'max' => 20],
            [['notes'], 'string', 'max' => 500],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function behaviors()
    {
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
            'ispaid' => Yii::t('app', 'Ispaid'),
            'typepayment' => Yii::t('app', 'Typepayment'),
            'notes' => Yii::t('app', 'Notes'),
            'active' => Yii::t('app', 'Active'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailorders()
    {
        return $this->hasMany(Detailorder::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
