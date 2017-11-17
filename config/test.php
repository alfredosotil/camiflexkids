<?php
/**
 * Application configuration shared by all test types
 */
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/main.php',
    require __DIR__ . '/common.php',
    [
        'id' => 'basic-tests',
        'components' => [
            'db' => require __DIR__ . '/test_db.php',
            'urlManager' => [
                'showScriptName' => true,
            ],
        ],
    ]
);
