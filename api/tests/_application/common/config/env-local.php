<?php

return [
    /*'url' => [
        'test-api' => 'http://api.yumail.project/index-test.php',
    ],*/
    'mode' => [
        'env' => 'test',
        'debug' => true,
    ],
    'jwt' => [
        'profiles' => [
            'auth' => [
                'key' => 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz',
            ],
        ],
    ],
    'domain' => [
        'driver' => [
            'primary' => 'ar',
            'slave' => 'ar',
        ],
    ],
];

/*$config = [

];

$parentConfig = include(__DIR__ . '/../../../../../vendor/yii2rails/yii2-extension/yusrc/common/src/project/common/config/env-local.php');
return \yii\helpers\ArrayHelper::merge($parentConfig, $config);*/