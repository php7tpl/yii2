<?php

$config = [
    'name' => 'Dev',
];

$configFile = __DIR__ . '/../../vendor/yii2rails/yii2-extension/yusrc/common/src/project/common/config/main.php';
return \yii2rails\extension\common\helpers\Helper::includeConfig($configFile, $config);