<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TD Prommash',
	'defaultController' => 'home',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'ext.yii-mail.YiiMailMessage',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/


	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'mail' => array(
			'class' => 'ext.yii-mail.YiiMail',
			'transportType'=>'smtp',
			'transportOptions'=>array(
				'host'=>'smtp.gmail.com',
				'username'=>'adm.duplays@gmail.com',
				'password'=>'Duplays!123',

				'port' => '465',
				'encryption'=>'tls',
			),
			'viewPath' => 'application.views.mail',
        ),

		'request'=>array(
			'enableCookieValidation'=>true,
			'enableCsrfValidation'=>true,
		),

		// uncomment the following to enable URLs in path-format
        'urlManager'=>array(
			'class'=>'application.components.UrlManager',
            'urlFormat'=>'path',
            'showScriptName'=> false,
            'rules'=>array(

				'<language:(ru|ua|en)>/<controller:\w+>/'=>'<controller>/index',
				'<language:(ru|ua|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',

				//'<controller:[\w-]+>/<id:\d+>'=>'<controller>/view',
				//'<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>'=>'<controller>/<action>',
				//'<controller:[\w-]+>/<action:[\w-]+>'=>'<controller>/<action>',


			),
        ),


		// database settings are configured in database.php
		//'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
			// 'errorAction'=>YII_DEBUG ? null : 'home',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(

		'languages'=>array('ru'=>'Русский', 'ua'=>'Украинский', 'en'=>'Английский'),

		// this is used in contact page
		'adminEmail'=>'roman.lesnichyi@gmail.com',
	),
);
