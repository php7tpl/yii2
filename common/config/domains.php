<?php

$config = [
    'i18n' => 'yii2bundle\i18n\domain\Domain',
    'model' => 'yii2bundle\model\domain\Domain',
    'settings' => 'yii2bundle\settings\domain\v1\Domain',
    //'account' => 'yubundle\user\domain\v1\Domain',
];

$configFile = __DIR__ . '/../../vendor/yii2rails/yii2-extension/yusrc/common/src/project/common/config/domains.php';

return \yii2rails\extension\common\helpers\Helper::includeConfig($configFile, $config);