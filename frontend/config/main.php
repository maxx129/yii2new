<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'ru',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => FALSE,
        ],
        'user' => [
            'identityClass' => 'frontend\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identityFrontend', 'httpOnly' => true,],
            
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'novosti-news' => 'test/index',
                'novosti/<id:\d+>' => 'test/view',
            ],
        ],
        
        'stringHelper' => [
            'class' => 'common\components\StringHelper',
        ],
        
        'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport' => false,
        'transport' => [
                        'class' => 'Swift_SmtpTransport',
                        'host' => 'smtp.gmail.com',
                        'username' => 'max.anga.inc@gmail.com',
                        'password' => '137Q21Y1904o79129+_)',
                        'port' => '587',
                        'encryption' => 'tls',
                    ],
        ],
        
        
//    'assetManager' => [
//        'bundles' => [
//            'yii\web\JqueryAsset' => [
//                'js'=>[]
//            ],
//            'yii\web\YiiAsset' => [
//                'js'=>[]
//            ],
//            'yii\bootstrap\BootstrapPluginAsset' => [
//                'js'=>[]
//            ],
//        ],
//    ],
        
        
        
    ],
    'params' => $params,
    'aliases' => [
        '@images' => '/files/photos',
    ]
];
