<?php

$config = [

];

$configFile = __DIR__ . '/../../vendor/yii2rails/yii2-extension/yusrc/common/src/project/api/config/routes.php';
return \yii2rails\extension\common\helpers\Helper::includeConfig($configFile, $config);