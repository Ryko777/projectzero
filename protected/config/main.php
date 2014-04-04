<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ProjectZero',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
        'application.modules.user.components.*',
	),

	'modules'=>array(

		// user module
		'user'=>array(

			'tableUsers' => 'zero_users',
            'tableProfiles' => 'zero_profiles',
            'tableProfileFields' => 'zero_profiles_fields',

            // encrypting method (php hash function)
            'hash' => 'md5',

            // send activation email
            'sendActivationMail' => true,

            // allow access for non-activated users
            'loginNotActiv' => false,

            // activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,

            // automatically login from registration
            'autoLogin' => true,

            // registration path
            'registrationUrl' => array('/user/registration'),

            // recovery password path
            'recoveryUrl' => array('/user/recovery'),

            // login form path
            'loginUrl' => array('/user/login'),

            // page after login
            'returnUrl' => array('/user/profile'),

            // page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),


		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'zomgffs117781',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
            'class'=>'WebUser',
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'loginUrl'=>array('/user/login'),
		),

		// uncomment the following to enable URLs in path-format
		
		// 'urlManager'=>array(
		// 	'urlFormat'=>'path',
		// 	'rules'=>array(
		// 		'<controller:\w+>/<id:\d+>'=>'<controller>/view',
		// 		'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		// 		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		// 	),
		// ),
		
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=projectzero',
			'emulatePrepare' => true,
			'username' => 'projectzero',
			'password' => 'zomgffs117781',
			'tablePrefix' => 'zero_',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);