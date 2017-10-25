<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $name
 * @property string $short_desc
 * @property string $long_desc
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $active
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'long_desc'], 'required'],
            [['created_at', 'updated_at', 'active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['short_desc'], 'string', 'max' => 100],
            [['long_desc'], 'string', 'max' => 250],
            [['name'], 'unique'],
        ];
    }
    
     public function behaviors() {
        return [
            \yii\behaviors\TimestampBehavior::class,
            'galleryBehavior' => [
                'class' => \zxbodya\yii2\galleryManager\GalleryBehavior::className(),
                'type' => 'slider',
                'tableName' => 'slider_gallery',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/img/content/slider/gallery',
                'url' => Yii::getAlias('@web') . '/img/content/slider/gallery',
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
            'id' => Yii::t('product', 'ID'),
            'name' => Yii::t('product', 'Name'),
            'short_desc' => Yii::t('product', 'Short Desc'),
            'long_desc' => Yii::t('product', 'Long Desc'),
            'created_at' => Yii::t('product', 'Created At'),
            'updated_at' => Yii::t('product', 'Updated At'),
            'active' => Yii::t('product', 'Active'),
        ];
    }
}
