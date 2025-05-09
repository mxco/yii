<?php

return [
    'id' => 'web',
    'basePath' => dirname(__DIR__),
    'name' => 'yii',
    'bootstrap' => [
        'log'
    ],
    'components' => [
        'log' => [
            'targets' => [
                ['class' => 'yii\log\FileTarget', 'levels' => ['error', 'warning']],
            ],
            'traceLevel' => YII_DEBUG ? 3 : 0,
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
];
