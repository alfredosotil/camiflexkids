<?php

$config = [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=application-base',
            'username' => 'root',
            'password' => '',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
    ],
];

return $config;
