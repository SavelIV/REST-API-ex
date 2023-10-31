<?php

use yii\rest\UrlRule;
use yii\web\JsonParser;
use yii\web\JsonResponseFormatter;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'         => 'app-api',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'controllerNamespace' => 'api\controllers',
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => JsonParser::class
            ]
        ],
        'response' => [
            'formatters' => [
                'json' => [
                    'class'         => JsonResponseFormatter::class,
                    'prettyPrint'   => YII_DEBUG,
                    'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
                ]
            ]
        ],
        'user' => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => false,
            'enableSession'   => false
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'rules'               => [
                [
                    'class'      => UrlRule::class,
                    'controller' => 'product'
                ]
            ]
        ]
    ],
    'params'     => $params
];
