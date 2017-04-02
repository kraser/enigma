<?php

$params = require(__DIR__ . '/params.php');

$config = 
[
    'id' => 'basic',
    'basePath' => dirname ( __DIR__ ),
    'bootstrap' => [ 'log' ],
    'aliases' =>
    [
        '@engineroot' => __DIR__ . '/../',
        '@lib' => '@engineroot/tests',
        'myViews' => '@app/myViews',
        '@cucumber' => '@myViews/cucumber'
        
    ],
    'version' => '0.0.1',
    'language' => 'ru-RU',
    'name' => 'Сайт куртуазного маньеризма',
    'catchAll' => 
    [
        'site/say',
        'message' => 'Перехват'
    ],
    'defaultRoute' => 'site/fuck',
    'components' => 
    [
        'request' => 
        [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'DepAX5so4rzHPmAkmRipYOQXvhLdsugY',
        ],
        'cache' => 
        [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => 
        [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => 
        [
            'errorAction' => 'site/error',
        ],
        'mailer' => 
        [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => 
        [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => 
            [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'mysqlDb' => 
        [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=enigma',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'pgsqlDb' => require(__DIR__ . '/db.php'),
        'urlManager' =>
        [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => 
            [
            
            ],
        ],
        
    ],
    'timeZone' => "Asia/Novosibirsk",
    'runtimePath' => '/tmp/runtime/',
    'params' => $params,
    'controllerMap' =>
    [
        'check' => 'app\controllers\CountryController'
    ],
    'layout' => 'layout',
    'layoutPath' => '@cucumber',
    'viewPath' => '@myViews'
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
