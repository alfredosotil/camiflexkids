<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $sku
 * @property double $price
 * @property double $weight
 * @property string $cart_desc
 * @property string $short_desc
 * @property string $long_desc
 * @property string $thumb
 * @property string $image
 * @property integer $category_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property double $stock
 * @property integer $active
 *
 * @property Category $category
 */
class ProductModel extends \yii\db\ActiveRecord implements \yii2mod\cart\models\CartItemInterface {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'sku', 'price', 'cart_desc', 'long_desc', 'thumb', 'image', 'category_id', 'created_at', 'updated_at', 'stock'], 'required'],
            [['price', 'weight', 'stock'], 'number'],
            [['category_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['name', 'sku'], 'string', 'max' => 255],
            [['cart_desc'], 'string', 'max' => 32],
            [['short_desc'], 'string', 'max' => 100],
            [['long_desc'], 'string', 'max' => 250],
            [['thumb', 'image'], 'string', 'max' => 60],
            [['name'], 'unique'],
            [['sku'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryModel::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function behaviors() {
        return [
            \yii\behaviors\TimestampBehavior::class,
            'galleryBehavior' => [
                'class' => \zxbodya\yii2\galleryManager\GalleryBehavior::className(),
                'type' => 'product',
                'tableName' => 'gallery_image',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/img/content/product/gallery',
                'url' => Yii::getAlias('@web') . '/img/content/product/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        return $img
                                        ->copy()
                                        ->thumbnail(new \Imagine\Image\Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                                        ->copy()
                                        ->resize($dstSize);
                    },
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('product', 'ID'),
            'name' => Yii::t('product', 'Name'),
            'sku' => Yii::t('product', 'Sku'),
            'price' => Yii::t('product', 'Price'),
            'weight' => Yii::t('product', 'Weight'),
            'cart_desc' => Yii::t('product', 'Cart Desc'),
            'short_desc' => Yii::t('product', 'Short Desc'),
            'long_desc' => Yii::t('product', 'Long Desc'),
            'thumb' => Yii::t('product', 'Thumb'),
            'image' => Yii::t('product', 'Image'),
            'category_id' => Yii::t('product', 'Category ID'),
            'created_at' => Yii::t('product', 'Created At'),
            'updated_at' => Yii::t('product', 'Updated At'),
            'stock' => Yii::t('product', 'Stock'),
            'active' => Yii::t('product', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory() {
        return $this->hasOne(CategoryModel::className(), ['id' => 'category_id']);
    }

    public function getPrice() {
        return $this->price;
    }

    public function getLabel() {
        return $this->name;
    }

    public function getUniqueId() {
        return $this->id;
    }

}
