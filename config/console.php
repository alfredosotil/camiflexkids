<?php

$config = [
    'id' => 'console',
    'controllerNamespace' => 'app\commands',
    'controllerMap' => [
        'migrate-base' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => [
                '@vendor/yii2mod/yii2-cms/migrations',
                '@vendor/yii2mod/yii2-cron-log/migrations',
                '@vendor/yii2mod/yii2-user/migrations',
                '@vendor/yii2mod/yii2-comments/migrations',
                '@vendor/yii2mod/yii2-settings/migrations',
                '@yii/rbac/migrations',
                '@yii/migrations',
            ],
        ],
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'app\tests\fixtures',
        ],
    ],
    'components' => [
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'scriptUrl' => 'http://dev.application-base',
            'baseUrl' => 'http://dev.application-base', // Setup your domain
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'errorHandler' => [
            'class' => 'yii2mod\cron\components\ErrorHandler',
        ],
        'mutex' => [
            'class' => 'yii\mutex\FileMutex',
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => 'yii2mod\rbac\ConsoleModule',
        ],
        'user' => [
            'class' => 'yii2mod\user\ConsoleModule',
        ],
    ]
];

return $config;
