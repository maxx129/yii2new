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
            'enableCsrfValidation' => TRUE,
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
        
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
//                'google' => [
//                    'class' => 'yii\authclient\clients\Google',
//                    'clientId' => 'google_client_id',
//                    'clientSecret' => 'google_client_secret',
//                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '1267517770085595',
                    'clientSecret' => '14b141ed8776904aa37905fd8cf8ee32',
                ],
                'VKontakte' => [
                    'class' => 'yii\authclient\clients\VKontakte',
                    'clientId' => '7146067',
                    'clientSecret' => 'a0163473a0163473a0163473bda07b3e20aa016a0163473fd9f83f48528fed8f810114a',
                ],
                // etc.
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
