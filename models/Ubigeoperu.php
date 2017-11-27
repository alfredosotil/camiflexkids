<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubigeoperu".
 *
 * @property integer $id
 * @property string $departamento
 * @property string $provincia
 * @property string $distrito
 * @property string $nombre
 */
class Ubigeoperu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ubigeoperu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departamento', 'provincia', 'distrito', 'nombre'], 'required'],
            [['departamento', 'provincia', 'distrito', 'nombre'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'departamento' => Yii::t('app', 'Departamento'),
            'provincia' => Yii::t('app', 'Provincia'),
            'distrito' => Yii::t('app', 'Distrito'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }
}
