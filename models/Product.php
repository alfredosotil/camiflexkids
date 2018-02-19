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
 * @property string $color
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
 * @property Detailorder[] $detailorders
 * @property Category $category
 * @property Productoption[] $productoptions
 */
class Product extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sku', 'price', 'color', 'cart_desc', 'long_desc', 'thumb', 'image', 'category_id', 'created_at', 'updated_at', 'stock'], 'required'],
            [['price', 'weight', 'stock'], 'number'],
            [['category_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['name', 'sku', 'color'], 'string', 'max' => 255],
            [['cart_desc'], 'string', 'max' => 32],
            [['short_desc'], 'string', 'max' => 100],
            [['long_desc'], 'string', 'max' => 250],
            [['thumb', 'image'], 'string', 'max' => 60],
            [['name'], 'unique'],
            [['sku'], 'unique'],
            [['color'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function behaviors()
    {
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
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'sku' => Yii::t('app', 'Sku'),
            'price' => Yii::t('app', 'Price'),
            'weight' => Yii::t('app', 'Weight'),
            'color' => Yii::t('app', 'Color'),
            'cart_desc' => Yii::t('app', 'Cart Desc'),
            'short_desc' => Yii::t('app', 'Short Desc'),
            'long_desc' => Yii::t('app', 'Long Desc'),
            'thumb' => Yii::t('app', 'Thumb'),
            'image' => Yii::t('app', 'Image'),
            'category_id' => Yii::t('app', 'Category ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'stock' => Yii::t('app', 'Stock'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailorders()
    {
        return $this->hasMany(Detailorder::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoption::className(), ['product_id' => 'id']);
    }

    public function getFirstimage($size = 'medium')
    {
        return (count($this->getBehavior('galleryBehavior')->getImages()) > 0) ? $this->getBehavior('galleryBehavior')->getImages()[0]->getUrl($size) : null;
    }
}
