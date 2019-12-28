<?php

return [
    'test' => [
        //'dumpDangerResponse' => true,
        'mode' => 'dev', // режим сервера: dev, test, prod
        'skipBug' => true,
    ],
    'account' => [
        'login' => [
            'defaultCompanyId' => 1, // ID компании по умолчанию
        ],
        'registration' => [
            'access' => 'open', // доступность регистрации (open,invite,close)
            'defaultStatus' => 1, // начальный статус пользователя (если 0, то только по премодерации)
        ],
        'confirm' => [
            'smsInterval' => 60, // интервал отправки СМС с подтверждением в секундах
        ],
    ],
    'cors' => [
        'credentials' => true,
    ],
    'url' => [
        'frontend' => 'http://app.tpl/',
        'backend' => 'http://admin.app.tpl/',
        'api' => 'http://api.app.tpl/',
    ],
    'servers' => [
        'storage' => [
            'resourceHost' => 'http://app.tpl/',
        ],
        /*'storage' => [
            'apiHost' => 'http://api.storage.srv/',
            'resourceHost' => 'http://app.tpl/',
            'driver' => 'core',
        ],*/
        'static' => [
            'publicPath' => '@frontend/web/',
            'domain' => 'http://app.tpl/',
            'driver' => 'local',
            'connection' => [
                'path' => '@frontend/web',
            ],
        ],
        'db' => [
            'main' => [
                'driver' => 'pgsql',
                'username' => 'postgres',
                'password' => 'postgres',
                'dbname' => 'app_tpl',
                'defaultSchema' => 'common',
            ],
        ],
    ],
    'mode' => [
        'env' => 'dev',
        'debug' => true,
        'benchmark' => true,
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
    'cookieValidationKey' => [
        'frontend' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'backend' => 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq',
    ],
    /*'encrypt' => [
        'profiles' => [
            'unionCard' => [
                'key' => [
                    'type' => OPENSSL_KEYTYPE_RSA,
                    //'private' => 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz',
                    'private' => '-----BEGIN PRIVATE KEY-----
MIIBVAIBADANBgkqhkiG9w0BAQEFAASCAT4wggE6AgEAAkEAzC7Yuot/UR4sODkS
...
l5UIxll1OJQ4ChvGjMpfUWHIAcVVAiEA0KqXpZZiNCNFHxU9RrYeIXmiFfh4PRc6
AlnzJRz8c5M=
-----END PRIVATE KEY-----',
                    'public' => '-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAMwu2LqLf1EeLDg5Ek573pYKTX473lHy...
-----END PUBLIC KEY-----',
                ],
                'algorithm' => EncryptAlgorithmEnum::SHA256,
            ],
        ],
    ],*/
];
