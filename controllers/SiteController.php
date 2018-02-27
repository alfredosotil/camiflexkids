<?php

namespace app\controllers;

use app\models\forms\ContactForm;
use app\models\forms\ResetPasswordForm;
use app\models\Subscribers;
use app\models\Order;
use app\models\forms\card;
use app\models\Ubigeoperu;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii2mod\rbac\filters\AccessControl;
use yii2mod\user\models\LoginForm;
use yii2mod\user\models\PasswordResetRequestForm;
use yii2mod\user\models\SignupForm;
use yii2mod\user\traits\EventTrait;
use yii\helpers\Url;
use Culqi\Culqi;

/**
 * Class SiteController
 *
 * @package app\controllers
 */
class SiteController extends Controller {

    use EventTrait;

    private $PUBLIC_API_KEY;
    private $API_KEY;
    private $culqi_token;
    private $culqi;

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => [
                    'login',
                    'logout',
                    'signup',
                    'request-password-reset',
                    'password-reset',
                    'account',
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup', 'request-password-reset', 'password-reset'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout', 'account'],
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function($rule, $action) {
                    Yii::$app->getSession()->setFlash('error', Yii::t('yii2mod.user', 'Error | Please, you need to Sing In. | Continuar'));
                    return Yii::$app->response->redirect(Yii::$app->getUser()->loginUrl);
                },
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'index' => ['get'],
                    'contact' => ['get', 'post'],
                    'account' => ['get', 'post'],
                    'login' => ['get', 'post'],
                    'logout' => ['post'],
                    'signup' => ['get', 'post'],
                    'request-password-reset' => ['get', 'post'],
                    'password-reset' => ['get', 'post'],
                    'page' => ['get', 'post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//            'captcha' => [
//                'class' => 'mdm\captcha\CaptchaAction',
//                'level' => 1, // avaliable level are 1,2,3 :D
//            ],
//            'captcha' => [
//                'class' => 'developit\captcha\CaptchaAction',
//                'type' => 'numbers', // 'numbers', 'letters' or 'default' (contains numbers & letters)
//                'minLength' => 4,
//                'maxLength' => 4,
//            ],
//            'login' => [
//                'class' => 'yii2mod\user\actions\LoginAction',
//            ],
            'logout' => [
                'class' => 'yii2mod\user\actions\LogoutAction',
            ],
            'signup' => [
                'class' => 'yii2mod\user\actions\SignupAction',
            ],
//            'request-password-reset' => [
//                'class' => 'yii2mod\user\actions\RequestPasswordResetAction',
//            ],
            'password-reset' => [
                'class' => 'yii2mod\user\actions\PasswordResetAction',
            ],
            'page' => [
                'class' => 'yii2mod\cms\actions\PageAction',
            ],
        ];
    }

    public function actionLogin() {
        if (Yii::$app->request->isAjax) {
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post())) {
                if ($model->login()) {
                    Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Bienvenido |  | Continuar'));
                    return $this->goBack();
                } else {
                    Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                    return \yii\widgets\ActiveForm::validate($model);
                }
            }
        } else {
            throw new HttpException(404, 'Page not found');
        }
    }

    public function actionRequestpasswordreset() {
        if (Yii::$app->request->isAjax) {
            $model = new PasswordResetRequestForm();
            $event = $this->getFormEvent($model);
            $this->trigger('beforeRequest', $event);
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if ($model->sendEmail()) {
                    $this->trigger('afterRequest', $event);
                    Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'Excelente | Check your email for further instructions. | Continuar'));
                    return $this->redirect(['site/index']);
//                    return $this->redirectTo(Yii::$app->getHomeUrl());
                } else {
                    Yii::$app->getSession()->setFlash('error', Yii::t('yii2mod.user', 'Error | Sorry, we are unable to reset password for email provided. | Continuar'));
                    Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                    return \yii\widgets\ActiveForm::validate($model);
                }
            }
        } else {
            throw new HttpException(404, 'Page not found');
        }
    }

    public function actionViewcart() {
        return $this->render('viewcart', [
        ]);
    }

    public function actionUpdateprovince() {
        $states = Ubigeoperu::find()->where(['departamento' => $_POST['value'], 'distrito' => '00'])->orderBy('nombre')->all();
        foreach ($states as $value) {
            echo \yii\helpers\Html::tag('option', $value->nombre, ['value' => $value->provincia]);
        }
    }

    public function actionUpdatedistrict() {
        $zip = Ubigeoperu::find()->where(['departamento' => $_POST['valuedepartamento'], 'provincia' => $_POST['valueprovincia']])->orderBy('nombre')->all();
        foreach ($zip as $value) {
            echo \yii\helpers\Html::tag('option', $value->nombre, ['value' => $value->provincia]);
        }
    }

    public function actionCheckout() {
        Yii::$app->assetsAutoCompress->jsFileCompile = false; //se desactiva compresion js tema tecnico con angular
        $culqimodel = new card();
        $culqimodel->number = '4111111111111111';
        $culqimodel->email = 'alfredosotil@gmail.com';
        $culqimodel->exp_month = '09';
        $culqimodel->exp_year = '2020';
        $culqimodel->cvv = '123';
        $model = new Order();
        $model->country = 'PERU';
        $model->departament = '15';
        $model->province = '00';
        $model->district = '00';
//        test
        $model->ship_name = 'alfredo sotil';
        $model->ship_address = 'avenida brigida silva';
        $model->phone = '980727281';
        $model->fax = '980727281';
        $model->email = 'alfredosotil@gmail.com';

        $model->amount = number_format(doubleval(Yii::$app->cart->getAttributeTotal('vat')), 2, '.', '');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Order has been created.');
            return $this->redirect(['index']);
        }

        return $this->render('checkout', [
                    'model' => $model,
                    'culqimodel' => $culqimodel,
        ]);
    }

    public function actionCheckoutcomplete() {
        return $this->render('checkoutcomplete', []);
    }

    public function actionSignup() {
        if (Yii::$app->request->isAjax) {
            $model = new SignupForm();
            $event = $this->getFormEvent($model);
            $this->trigger('beforeSignup', $event);
            if ($model->load(Yii::$app->request->post()) && ($user = $model->signup()) !== null) {
                $this->trigger('afterSignup', $event);
                Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'Excelente | Usuario creado Exitosamente! | Continuar'));
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect(['site/index']);
                }
            } else {
                Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                return \yii\widgets\ActiveForm::validate($model);
            }
        } else {
            throw new HttpException(404, 'Page not found');
        }
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
//        Yii::$app->session->setFlash('success', 'Excelente | esto es una prueba | Continuar');
        return $this->render('index', [
                    'slides' => $this->getIndexMainSlides(),
                    'reasons' => $this->getReasons(),
                    'gallery' => $this->getIndexGallery(),
        ]);
    }

    public function actionAbout() {
        return $this->render('about', [
                    'slides' => $this->getAboutMainSlides(),
                    'team' => $this->getAboutTeam(),
                    'clients' => $this->getAboutClients()]);
    }

    /**
     * Displays contact page.
     *
     * @return string|\yii\web\Response
     */
    public function actionContact() {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Listo | Gracias por contactarnos, te escribiremos lo antes posible | Continuar'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Error | Hubo un error, no se envió el correo. | Continuar'));
            }

            return $this->refresh();
        }

        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays account page.
     *
     * @return string|\yii\web\Response
     */
    public function actionAccount() {
        $this->layout = '@app/modules/admin/views/layouts/column2';
        $resetPasswordForm = new ResetPasswordForm(Yii::$app->user->identity);

        if ($resetPasswordForm->load(Yii::$app->request->post()) && $resetPasswordForm->resetPassword()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Excelente | Password has been updated. | Continuar'));

            return $this->refresh();
        }

        return $this->render('account', [
                    'resetPasswordForm' => $resetPasswordForm,
        ]);
    }

    /**
     * Displays products page.
     *
     * @return string
     */
    public function actionProducts() {
        return $this->render('products');
    }

    public function actionAddtocart($id = null) {
        $model = null;
        $qty = 0;
        if (is_null($id)) {
            $model = \app\models\Product::findOne(Yii::$app->request->post('product_id'));
            $qty = intval(Yii::$app->request->post('qty'));
        } else {
            $model = \app\models\Product::findOne($id);
            $qty = 9;
        }

        if (isset($model)) {
            if ($this->addtocart($model, $qty)) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Excelente | El producto fue agregado al carrito de compras. | Continuar'));
            } else {
                Yii::$app->getSession()->setFlash('error', Yii::t('app', 'Error | No se agrego el producto al carrito de compras. | Continuar'));
            }
            return $this->redirect(Url::to(is_null($id) ? ['productdetail', 'id' => $model->id] : ['products']));
        } else {
            throw new \yii\web\HttpException(404, 'Page not found');
        }
    }

    public function addtocart($product, $qty) {
        $items = Yii::$app->cart->getItems();
        $temp_detail = null;
        $result = false;
        foreach ($items as $value) {
            if ($value->product_id === $product->id) {
                $temp_detail = $value;
                break;
            }
        }
        $detail = new \app\models\Detailorder();
        if (is_null($temp_detail)) {
            $detail->name = $product->name;
            $detail->qty = $qty;
            $detail->price_per_unit = $product->price;
            $detail->price = $detail->price_per_unit * $detail->qty;
            $detail->tax = 0;
            $detail->vat = $detail->price + $detail->tax;
            $detail->product_id = $product->id;
            $detail->detailorderuniqueid = strtotime('now');
            Yii::$app->cart->add($detail);
            $result = true;
        } else {
            Yii::$app->cart->remove($temp_detail->detailorderuniqueid);
            $detail->name = $product->name;
            $detail->qty = $temp_detail->qty + $qty;
            $detail->price_per_unit = $product->price;
            $detail->price = $detail->price_per_unit * $detail->qty;
            $detail->tax = 0;
            $detail->vat = $detail->price + $detail->tax;
            $detail->product_id = $product->id;
            $detail->detailorderuniqueid = strtotime('now');
            Yii::$app->cart->add($detail);
            $result = true;
        }
        return $result;
    }

    public function actionDeletedetailorder($id) {
        Yii::$app->cart->remove($id);
        Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'Hecho | El producto fue eliminado del carrito de compras. | Continuar'));
        return $this->redirect(Url::to(['viewcart']));
    }

    /**
     * Displays simulator page.
     *
     * @return string
     */
    public function actionSimulator() {
        Yii::$app->assetsAutoCompress->jsFileCompile = false; //se desactiva compresion js tema tecnico con angular
        return $this->render('simulator', [
        ]);
    }

    public function actionSubscriber() {
        if (Yii::$app->request->isPost) {
            if (Yii::$app->request->isAjax) {
                $model = new Subscribers(['scenario' => Subscribers::SCENARIO_MAIN]);
//                return $this->asJson(['post' => Yii::$app->request->post()]);
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//                    if ($model->save()) {
                    return $this->asJson(['successAjax' => true, 'hasError' => false, 'errors' => $model->errors]);
//                    }
                } else {
                    return $this->asJson(['successAjax' => true, 'hasError' => true, 'errors' => $model->errors]);
                }
////                return \yii\widgets\ActiveForm::validate($model);
            }
        }
    }

    public function actionSubscribersimulator() {
        if (Yii::$app->request->isPost) {
            if (Yii::$app->request->isAjax) {
                $model = new Subscribers(['scenario' => Subscribers::SCENARIO_SIMULATOR]);
//                return $this->asJson(['post' => Yii::$app->request->post()]);
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $exists = Subscribers::find()->where(['email' => $model->email])->exists();
                    if (!$exists) {
//doesn't exist so create record
                        $model->save();
                    }
                    return $this->asJson(['successAjax' => true, 'hasError' => false, 'errors' => $model->errors]);
                } else {
                    return $this->asJson(['successAjax' => true, 'hasError' => true, 'errors' => $model->errors]);
                }
////                return \yii\widgets\ActiveForm::validate($model);
            }
        }
    }

    public function actionMakeorder() {
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $model = new Order();
            $model->tax = 0;
            $model->shipping = 0;
            $model->tracking_number = strval(strtotime("now"));
//            $model->load(Yii::$app->request->post());
//                return $this->asJson(['post' => Yii::$app->request->post()]);
            if ($model->load(Yii::$app->request->post())) {
                return $this->asJson(['order' => $model]);
            }
        }
    }

    public function actionAcceptcreditcard() {
        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            $order = new Order();
            $card = new card();
            $order->attributes = Yii::$app->request->post('order');
            $card->attributes = Yii::$app->request->post('form')['card'];
            try {
//                https://www.culqi.com/docs/#/pagos/inicio
                $this->API_KEY = 'sk_test_5dBvsJJspPxmwzMF'; //getenv("API_KEY");
                $this->culqi = new Culqi(array("api_key" => $this->API_KEY));
                $charge = $this->culqi->Charges->create(
                        array(
                            'amount' => $order->amount,
                            'capture' => true,
                            'currency_code' => 'PEN',
                            'description' => 'Pago de orden Camiflexkids',
                            'email' => $card->email,
                            'installments' => 0,
                            'metadata' => array('test' => 'test'),
                            'source_id' => Yii::$app->request->post('token')
                        )
                );
                if (strcmp($charge->object, 'charge') === 0) {
                    $order->ispaid = 1;
                    $order->amount = substr_replace($order->amount, '.', -2, -1);
                    $order->save();
                    \Yii::$app->cart->clear();
                    return $this->asJson(['successAjax' => true, 'hasError' => false, 'order' => $order, 'charge' => $charge, 'redirect' => Url::to(['products'])]);
                } else {
                    return $this->asJson(['successAjax' => true, 'hasError' => true, 'charge' => $charge]);
                }
            } catch (Exception $e) {
            // ERROR: El cargo tuvo algún error o fue rechazado
            //                echo $e->getMessage(); 
                return $this->asJson(['successAjax' => true, 'hasError' => true, 'error_message' => $e->getMessage()]);
            }
        }
    }

    public function actionAddarraytocart() {
        if (Yii::$app->request->isPost) {
            if (Yii::$app->request->isAjax) {
                $data = json_decode(Yii::$app->request->getRawBody());
                foreach ($data->details as $value) {
//                    $model = \app\models\Product::findOne(['color' => $value->color]);
                    $model = \app\models\Product::find()->where(['color' => $value->color])->one();
                    if (isset($model)) {
                        $this->addtocart($model, $value->quantity);
                        sleep(1);
                        unset($model);
                    }
                }
                return $this->asJson(['successAjax' => true, 'redirect' => Url::to(['viewcart']), 'count' => count($data->details)]);
            }
        }
    }

    public function actionProductdetail($id) {
        $model = \app\models\Product::findOne($id);
        if (isset($model)) {
            return $this->render('productdetail', ['model' => $model]);
        } else {
            throw new \yii\web\HttpException(404, 'Page not found');
        }
    }

    private function getIndexMainSlides() {
        $slides = json_decode(Yii::$app->params['mainSlider']);
        $htmlSlides = "";
        foreach ($slides as $value) {
            (strcmp($value->file, 'image') === 0) ? $htmlSlides .= $this->renderPartial('slideimage-template', ['data' => $value]) : $htmlSlides .= $this->renderPartial('slidevideo-template', ['data' => $value]);
        }
        return $htmlSlides;
    }

    private function getAboutMainSlides() {
        $slides = json_decode(Yii::$app->params['latestProjectSlider']);
        $htmlSlides = "";
        foreach ($slides as $value) {
            $htmlSlides .= $this->renderPartial('slideabout-template', ['data' => '/' . $value->urlFile]);
        }
        return $htmlSlides;
    }

    private function getAboutTeam() {
        $slides = json_decode(Yii::$app->params['team']);
        $htmlTeam = "";
        foreach ($slides as $value) {
            $htmlTeam .= $this->renderPartial('team-template', ['data' => $value]);
        }
        return $htmlTeam;
    }

    private function getReasons() {
        $slides = json_decode(Yii::$app->params['reasons']);
        $htmlTeam = "";
        foreach ($slides as $value) {
            $htmlTeam .= $this->renderPartial('reason-template', ['data' => $value]);
        }
        return $htmlTeam;
    }

    private function getAboutClients() {
        $slides = json_decode(Yii::$app->params['clients']);
        $htmlClients = "";
        foreach ($slides as $value) {
            $htmlClients .= $this->renderPartial('clients-template', ['data' => $value]);
        }
        return $htmlClients;
    }

    private function getIndexGallery() {
        $slides = json_decode(Yii::$app->params['gallery']);
        $htmlClients = "";
        foreach ($slides as $value) {
            $htmlClients .= $this->renderPartial('galleryindex-template', ['data' => $value]);
        }
        return $htmlClients;
    }

}
