<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Abo Hetta Cars',
    'language'=>'ar',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>/<id>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

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
            
        'widgetFactory' => array(
            'widgets' => array(
                'CGridView' => array(
                    'cssFile' => false,
                    'itemsCssClass' => 'table table-th-block table-hover',
                    'pagerCssClass' => 'data-grid-pagination',
                    'summaryCssClass' => 'data-grid-summary',
                    'summaryText' => false,
                    'htmlOptions' => array(
                        'class' => 'table-responsive',
                    ),
                ),
                'CActiveForm' => array(
                    'errorMessageCssClass' => 'help-block',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => true,
                        'clientOptions' => array(
                        'validateOnSubmit' => true,
                        'validateOnChange' => true,
                        'errorCssClass' => 'has-error has-feedback',
                        'successCssClass' => 'has-success has-feedback',
                        'inputContainer' => 'div.form-group',
                    ),
                ),
                'CLinkPager' => array(
                    'cssFile' => false,
                    'header' => false,
                    'hiddenPageCssClass' => 'disabled',
                    'lastPageLabel' => '»',
                    'nextPageLabel' => '›',
                    'firstPageLabel' => '«',
                    'prevPageLabel' => '‹',
                    'selectedPageCssClass' => 'active',
                    'htmlOptions' => array(
                        'class' => 'pagination',
                    ),
                ),
                'CBreadcrumbs' => array(
                    'htmlOptions' => array(
                        'class' => 'breadcrumb default',
                    ),
                    'encodeLabel' => false,
                    'homeLink' => false,
                    'tagName' => 'ol',
                    'separator' => null,
                    'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                    'inactiveLinkTemplate' => '<li class="active">{label}</li>',
                ),
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
