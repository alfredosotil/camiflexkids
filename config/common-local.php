<?php

$config = [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=qlnvdczv_camiflexkids',
            'username' => 'qlnvdczv_root',
            'password' => 'kK547dY1az',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
    ],
];

return $config;
