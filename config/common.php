<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = require(__DIR__ . '/params.php');

$config = [
    'name' => 'camiflex kids',
    'language' => 'es',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'assetsAutoCompress'],
    'components' => [
        'assetsAutoCompress' => (YII_ENV === 'dev')  ?
        [
    'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
    'webroot' => '/home/qlnvdczv/public_html',
    'enabled' => true
        ] :
        [
    'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
    'enabled' => false
        ],
//        'assetsAutoCompress' =>
//        [
//            'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
//            'enabled' => true,
//            'readFileTimeout' => 3, //Time in seconds for reading each asset file
//            'jsCompress' => true, //Enable minification js in html code
//            'jsCompressFlaggedComments' => true, //Cut comments during processing js
//            'cssCompress' => true, //Enable minification css in html code
//            'cssFileCompile' => true, //Turning association css files
//            'cssFileRemouteCompile' => false, //Trying to get css files to which the specified path as the remote file, skchat him to her.
//            'cssFileCompress' => true, //Enable compression and processing before being stored in the css file
//            'cssFileBottom' => false, //Moving down the page css files
//            'cssFileBottomLoadOnJs' => false, //Transfer css file down the page and uploading them using js
//            'jsFileCompile' => false, //Turning association js files
//            'jsFileRemouteCompile' => false, //Trying to get a js files to which the specified path as the remote file, skchat him to her.
//            'jsFileCompress' => true, //Enable compression and processing js before saving a file
//            'jsFileCompressFlaggedComments' => false, //Cut comments during processing js
//            'htmlCompress' => true, //Enable compression html
//            'noIncludeJsFilesOnPjax' => true, //Do not connect the js files when all pjax requests
//            'htmlCompressOptions' => //options for compressing output result
//            [
//                'extra' => false, //use more compact algorithm
//                'no-comments' => true   //cut all the html comments
//            ],
//        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
        ],
        'cache' => [
            'class' => 'yii\caching\ArrayCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ],
            ],
        ],
    ],
    'params' => $params,
];


if (YII_DEBUG) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => [@$_SERVER['REMOTE_ADDR'], '127.0.0.1', '::1'],
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => [@$_SERVER['REMOTE_ADDR'], '127.0.0.1', '::1'],
        'generators' => [
            'enumerable' => [
                'class' => 'yii2mod\gii\enum\Generator',
            ],
            'crud' => [
                'class' => 'yii2mod\gii\crud\Generator',
            ],
        ],
    ];
}

return $config;
