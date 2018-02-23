<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class card extends Model
{

    public $number;
    public $email;
    public $exp_month;
    public $exp_year;
    public $cvc;

    /**
     * @return array the validation rules
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['number', 'email', 'exp_month', '$exp_year', 'cvc'], 'required'],
            [['number'], 'string', 'max' => 16],
            [['exp_month'], 'number', 'min' => 2],
            [['$exp_year'], 'number', 'min' => 4],
            [['cvc'], 'number', 'min' => 4],
            [['email'], 'email'],
            // email has to be a valid email address
            ['email', 'email'],
            ['number', 'match', 'pattern' => '/(^3[47][0-9]{13}$|^3(?:0[0-5]|[68][0-9])[0-9]{11}$|^6(?:011|5[0-9]{2})[0-9]{12}$|^5[1-5][0-9]{14}$|^3[47][0-9]{13}$|^5[1-5][0-9]{14}$|^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$)/g', 'message' => 'Numero de tarjeta incorrecto'],
            ['exp_month', 'match', 'pattern' => '/^(0?[1-9]|1[012])$/g', 'message' => 'Mes incorrecto'],
            ['$exp_year', 'match', 'pattern' => '/^\d{4}$/g', 'message' => 'Año incorrecto'],
            ['cvc', 'match', 'pattern' => '/^\d{3}$/g', 'message' => 'Numero cvc incorrecto'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'number' => Yii::t('app', 'Numero de Tarjeta'),
            'email' => Yii::t('app', 'Email'),
            '$exp_month' => Yii::t('app', 'Mes Expiracion'),
            '$exp_year' => Yii::t('app', 'Año Expiracion'),
            'cvc' => Yii::t('contact', 'CVC'),
        ];
    }
    
}
