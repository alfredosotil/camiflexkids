<?php

namespace app\controllers;

use app\models\forms\ContactForm;
use app\models\forms\ResetPasswordForm;
use app\models\Subscribers;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii2mod\rbac\filters\AccessControl;
use yii2mod\user\models\LoginForm;
use yii2mod\user\models\PasswordResetRequestForm;
use yii2mod\user\models\SignupForm;
use yii2mod\user\traits\EventTrait;
use yii\helpers\Url;

/**
 * Class SiteController
 *
 * @package app\controllers
 */
class SiteController extends Controller {

    use EventTrait;

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
                    Yii::$app->getSession()->setFlash('error', Yii::t('yii2mod.user', 'Please, you need to Sing In.'));
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
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
                    Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'Check your email for further instructions.'));
                    return $this->redirect(['site/index']);
//                    return $this->redirectTo(Yii::$app->getHomeUrl());
                } else {
                    Yii::$app->getSession()->setFlash('error', Yii::t('yii2mod.user', 'Sorry, we are unable to reset password for email provided.'));
                    Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                    return \yii\widgets\ActiveForm::validate($model);
                }
            }
        } else {
            throw new HttpException(404, 'Page not found');
        }
    }

    public function actionSignup() {
        if (Yii::$app->request->isAjax) {
            $model = new SignupForm();
            $event = $this->getFormEvent($model);
            $this->trigger('beforeSignup', $event);
            if ($model->load(Yii::$app->request->post()) && ($user = $model->signup()) !== null) {
                $this->trigger('afterSignup', $event);
                Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'User Created Successfully.'));
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
        Yii::$app->session->setFlash('success', 'Excelente | esto es una prueba | Continuar');
        return $this->render('index', ['slides' => $this->getIndexMainSlides()]);
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
                Yii::$app->session->setFlash('success', Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error sending email.'));
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
            Yii::$app->session->setFlash('success', Yii::t('app', 'Password has been updated.'));

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
            $detail = new \app\models\Detailorder();
            $detail->name = $model->name;
            $detail->qty = $qty;
            $detail->price_per_unit = $model->price;
            $detail->price = $detail->price_per_unit * $detail->qty;
            $detail->tax = 0;
            $detail->vat = $detail->price + $detail->tax;
            $detail->product_id = $model->id;
            $detail->detailorderuniqueid = strtotime('now');
            Yii::$app->cart->add($detail);
            Yii::$app->getSession()->setFlash('success', Yii::t('yii2mod.user', 'Excelente | The product was added to cart. | Continuar'));
            return $this->redirect(Url::to(is_null($id) ? ['productdetail', 'id' => $model->id] : ['products']));
        } else {
            throw new \yii\web\HttpException(404, 'Page not found');
        }
    }

    /**
     * Displays simulator page.
     *
     * @return string
     */
    public function actionSimulator() {
        Yii::$app->assetsAutoCompress->jsFileCompile = false; //se desactiva compresion js tema tecnico con angular
        if (Yii::$app->request->isPost) {
            if (Yii::$app->request->isAjax) {
                $model = new Subscribers();
//                return $this->asJson(['post' => Yii::$app->request->post()]);
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    return $this->asJson(['successAjax' => true, 'hasError' => false, 'errors' => $model->errors]);
                } else {
                    return $this->asJson(['successAjax' => true, 'hasError' => true, 'errors' => $model->errors]);
                }
////                return \yii\widgets\ActiveForm::validate($model);
            }
        }
        return $this->render('simulator', [
        ]);
    }
    
    public function actionAddarraytocart(){
        if (Yii::$app->request->isPost) {
            if (Yii::$app->request->isAjax) {
                    return $this->asJson(['successAjax' => true]);
////                return \yii\widgets\ActiveForm::validate($model);
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
        $model = \app\models\Slider::findOne(['name' => 'about-slider']);
        $htmlSlides = "";
        if (isset($model)) {
            $slides = [];
            foreach ($model->getBehavior('galleryBehavior')->getImages() as $image) {
                $slides[] = $image->getUrl('original');
            }
            foreach ($slides as $value) {
                $htmlSlides .= $this->renderPartial('slideabout-template', ['data' => $value]);
//            $htmlSlides .= $this->renderPartial('slideabout-template', ['data' => '/'.$value->urlFile]);
            }
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

    private function getAboutClients() {
        $slides = json_decode(Yii::$app->params['clients']);
        $htmlClients = "";
        foreach ($slides as $value) {
            $htmlClients .= $this->renderPartial('clients-template', ['data' => $value]);
        }
        return $htmlClients;
    }

}
