<?php

$config = [

];

$parentConfig = include(__DIR__ . '/../../../../../vendor/yii2rails/yii2-extension/yusrc/common/src/project/common/config/domains.php');
return \yii\helpers\ArrayHelper::merge($parentConfig, $config);