<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);
$domain = $_SERVER['SERVER_NAME'];
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapPluginAsset' => ['js' => []],
                'yii\bootstrap\BootstrapAsset' => ['css' => []],
                'yii\widgets\MaskedInputAsset' => ['js' => []],
                'yii\web\YiiAsset' => ['js' => []],
                'yii\validators\ValidationAsset' => ['js' => []],
                'yii\widgets\ActiveFormAsset' => ['js' => []],
                'yii\web\JqueryAsset' => [
                    'js' => []
                ],
            ],
        ],
        'ipgeobase' => [
            'class' => 'himiklab\ipgeobase\IpGeoBase',
            'useLocalDB' => false,
        ],
        /* 'user' => [
          'identityClass' => 'common\models\User',
          'enableAutoLogin' => true,
          ], */
        /* 'log' => [
          'traceLevel' => YII_DEBUG ? 3 : 0,
          'targets' => [
          [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
          ],
          ],
          ], */
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'showScriptName' => false, // Disable index.php
            'enablePrettyUrl' => true, // Disable r= routes
            //'enableStrictParsing' => true,
            'rules' => [
                //'<controller:\w+>/<id:\d+>' => '<controller>/view',
                //'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                //'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'sitemap.xml' => 'page/sitemap',
                'karta-sayta' => 'page/sitemap-html',
                'minify-css' => 'page/css',
                'minify-js' => 'page/js',
                ['class' => 'app\components\MainUrlRule', 'connectionID' => 'db'],
            ],
        ],
    ],
    'params' => $params,
];
