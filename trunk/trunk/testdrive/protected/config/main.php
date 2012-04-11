<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Digital EpheX',

	// preloading 'log' component
	'preload'=>array('log', 'bootstrap',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'abcde',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('75.169.7.125','::1'),
			'generatorPaths'=>array('bootstrap.gii'),
		),
		
	),

	'defaultController'=>'post',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'bootstrap'=>array(
       		'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		       'coreCss'=>true, // whether to register the Bootstrap core CSS (bootstrap.min.css), defaults to true
        		'responsiveCss'=>false, // whether to register the Bootstrap responsive CSS (bootstrap-responsive.min.css), default to false
        		'plugins'=>array(
            			// Optionally you can configure the "global" plugins (button, popover, tooltip and transition)
            			// To prevent a plugin from being loaded set it to false as demonstrated below
            			'transition'=>false, // disable CSS transitions
            			'tooltip'=>array(
              		  'selector'=>'a.tooltip', // bind the plugin tooltip to anchor tags with the 'tooltip' class
              		  'options'=>array(
              		      'placement'=>'bottom', // place the tooltips below instead
              		  ),
            			),
            			// If you need help with configuring the plugins, please refer to Bootstrap's own documentation:
            			// http://twitter.github.com/bootstrap/javascript.html
        		),
    		),
		
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=W00006074',
			'emulatePrepare' => true,
			'username' => 'W00006074',
			'password' => 'Stephencs!',
			'charset' => 'utf8',
			'tablePrefix' => 'final_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'urlManager'=>array(
        	'urlFormat'=>'path',
        	'rules'=>array(
				'<controller:\w+>/<id:\d+\w*\d*>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>/<id>',
        			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        	),
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
	'params'=>require(dirname(__FILE__).'/params.php'),
);