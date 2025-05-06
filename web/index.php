<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

define('YII_WEB', true);

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../config/main.php',
    require __DIR__ . '/../config/main-local.php',
);

(new yii\web\Application($config))->run();
