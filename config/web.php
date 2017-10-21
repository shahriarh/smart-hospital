<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '5wffD3jAWb81A0StMKAKAMlxNl31JGnL',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
         'urlManager' => [
   'class' => 'yii\web\UrlManager',
   // Disable index.php
   'showScriptName' => false,
   // Disable r= routes
   'enablePrettyUrl' => true,
   'rules' => array(
     '<controller:\w+>/<id:\d+>' => '<controller>/view',
     '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
     '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
     //'<alias:register>' => 'user/registration/<alias>',
     //'<alias:logout|login>' => 'user/security/<alias>'
   ),
  ],
    ],
    'params' => $params,
	'modules' => [
		//your another module
		  'gridview' => [
			  'class' => '\kartik\grid\Module',
			  // see settings on http://demos.krajee.com/grid#module
		  ],
		  'datecontrol' => [
			  'class' => '\kartik\datecontrol\Module',
			  // see settings on http://demos.krajee.com/datecontrol#module
		  ],
		  // If you use tree table
		  'treemanager' =>  [
			  'class' => '\kartik\tree\Module',
			  // see settings on http://demos.krajee.com/tree-manager#module
		  ]
		// your another module
		],
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
