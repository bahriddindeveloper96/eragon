<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-merchant',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'merchant\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        // 'theme' => [
        //     'pathMap' => [
        //        '@app/views' => '@vendor/hail812/yii2-adminlte3/src/views'
        //     ],
        // ],
        'request' => [
            'csrfParam' => '_csrf-merchant',
            'baseUrl' => '/merchant',
        ],
        // 'user' => [
        //     'identityClass' => 'common\models\User',
        //     'enableAutoLogin' => true,
        //     'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        // ],
        'user' => [           
                'identityClass' => 'common\models\Vendor',
                'enableAutoLogin' => true,           
            
            'identityCookie' => ['name' => '_identity-vendor', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-merchant',
            //'class' => 'yii\web\Session',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
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
                '' => 'site/index',                                
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        
    ],
    'params' => $params,
];
