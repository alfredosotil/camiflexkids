<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CulqiForm extends Model
{

    public $cardnumber;
    public $email;
    public $expirationmonth;
    public $expirationyear;
    public $cvv;

    /**
     * @return array the validation rules
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['cardnumber', 'email', 'expirationmonth', 'expirationyear', 'cvv'], 'required'],
            [['cardnumber'], 'string', 'max' => 16],
            [['expirationmonth'], 'number', 'min' => 2],
            [['expirationyear'], 'number', 'min' => 4],
            [['cvv'], 'number', 'min' => 3],
            [['email'], 'string', 'max' => 100],
            // email has to be a valid email address
            ['email', 'email'],
//            ['cardnumber', 'validateCardnumber'],
            ['cardnumber', 'match', 'pattern' => '/(^3[47][0-9]{13}$|^3(?:0[0-5]|[68][0-9])[0-9]{11}$|^6(?:011|5[0-9]{2})[0-9]{12}$|^5[1-5][0-9]{14}$|^3[47][0-9]{13}$|^5[1-5][0-9]{14}$|^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$)/g', 'message' => 'Numero de tarjeta incorrecto'],
            ['expirationmonth', 'match', 'pattern' => '/^(0?[1-9]|1[012])$/g', 'message' => 'Mes incorrecto'],
            ['expirationyear', 'match', 'pattern' => '/^\d{4}$/g', 'message' => 'Año incorrecto'],
            ['cvv', 'match', 'pattern' => '/^\d{3}$/g', 'message' => 'Numero cvv incorrecto'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'cardnumber' => Yii::t('app', 'Numero de Tarjeta'),
            'email' => Yii::t('app', 'Email'),
            'expirationmonth' => Yii::t('app', 'Mes Expiracion'),
            'expirationyear' => Yii::t('app', 'Año Expiracion'),
            'cvv' => Yii::t('contact', 'CVV'),
        ];
    }
    
}
