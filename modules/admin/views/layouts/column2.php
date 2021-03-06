<?php

use app\assets\AdminAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii2mod\notify\BootstrapNotify;

/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
    <head>
        <?php $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo implode(' | ', array_filter([Html::encode($this->title), Yii::$app->name])); ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php
        echo BootstrapNotify::widget([
            'clientOptions' => [
                'delay' => 5000,
                'mouse_over' => 'pause',
                'showProgressbar' => true,
                'placement' => [
                    'from' => 'bottom',
                    'align' => 'left'
                ]
            ]
        ]);

        ?>
        <div class="wrap">
            <?php
            NavBar::begin([
//                'brandLabel' => 'Admin Panel',
//                'brandUrl' => yii\helpers\Url::toRoute(['/admin']),
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            if (Yii::$app->getUser()->can('admin')) {
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'encodeLabels' => false,
                    'items' => [
                        [
                            'label' => '<i class="glyphicon glyphicon-user"></i> Users',
                            'items' => [
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> User List',
                                    'url' => ['/admin/user/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Subscriber List',
                                    'url' => ['/subscribers/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Create User',
                                    'url' => ['/admin/user/create'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Subscriber User',
                                    'url' => ['/subscribers/create'],
                                ],
                            ],
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicons-package"></i> Products',
                            'items' => [
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Product List',
                                    'url' => ['/product/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Create Product',
                                    'url' => ['/product/create'],
                                ],
                            ],
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicons-package"></i> Orders',
                            'items' => [
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Order List',
                                    'url' => ['/order/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Create Order',
                                    'url' => ['/order/create'],
                                ],
                            ],
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicon-file"></i> CMS',
//                    'url' => ['/admin/cms/index'],
                            'items' => [
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Comments List',
                                    'url' => ['/comment/manage/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Pages List',
                                    'url' => ['/admin/cms/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> Slider List',
                                    'url' => ['/slider/index'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Create Page',
                                    'url' => ['/admin/cms/create'],
                                ],
                                [
                                    'label' => '<i class="glyphicon glyphicon-plus"></i> Create Slider',
                                    'url' => ['/slider/create'],
                                ],
                            ]
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicon-user"></i> RBAC',
                            'url' => ['/admin/rbac/assignment/index'],
                            'active' => $this->context->module->id == 'rbac',
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicon-wrench"></i> Settings Storage',
                            'url' => ['/admin/settings-storage'],
                            'active' => $this->context->module->id == 'settings-storage',
                        ],
                        [
                            'label' => '<i class="glyphicon glyphicon-cog"></i> Cron Schedule Log',
                            'url' => ['/admin/settings/cron'],
                        ],
                    ],
                ]);
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => '<i class="glyphicon glyphicon-globe"></i> Ir al sitio', 'url' => ['/']],
                    ['label' => '<i class="glyphicon glyphicon-user"></i> Cuenta', 'url' => ['/site/account']],
                    ['label' => '<i class="glyphicon glyphicon-off"></i> Salir (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post'],
                    ],
                ],
                'encodeLabels' => false,
            ]);
            NavBar::end();

            ?>
            <div class="container">
                <?php
                echo Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])

                ?>
                <div class="row">
                    <?php if (isset($this->params['sidebar'])): ?>
                        <div class="col-lg-2">
                            <?php
                            echo Menu::widget([
                                'items' => $this->params['sidebar'],
                                'encodeLabels' => false,
                                'options' => [
                                    'class' => 'nav nav-pills nav-stacked admin-side-nav',
                                ],
                            ]);

                            ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-10">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>