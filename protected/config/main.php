<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'PRISMA Kalkulator Tangan',

    'theme' => 'lte',
    'language' => 'id',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.models.form.*',
        'application.models.custom.*',
        'application.models.const.*',
        'application.models.search.*',
        'application.components.*',
        'application.vendor.phpexcel.PHPExcel'
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'bolo',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1', '172.17.0.1'),
        ),

    ),

    // application components
    'components' => array(
        'clientScript' => array(
            'scriptMap' => array(
                'jquery.js' => false,
                'jquery.min.js' => false,
                'pager.css' => false,
                'styles.css' => false,
//				'jquery.yiilistview.js'=>false
            ),
            'coreScriptPosition' => CClientScript::POS_END,
            'defaultScriptFilePosition' => CClientScript::POS_END
        ),
        'format' => array(
            'dateFormat' => 'd F Y, H:i'
        ),

        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),

        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<_c:(site)>/news/<permalink>'=>'<_c>/news',
                '<_c:(news)>/<permalink>'=>'<_c>/read',
            ),
        ),
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),

        'session' => array(
            'class' => 'CDbHttpSession',
            'timeout' => 900,
            'connectionID' => 'db'
        ),

        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'authitem',
            'itemChildTable' => 'authitemchild',
            'assignmentTable' => 'authassignment'
        ),

        // mailer using SwiftMail
        'mailer' => array(
            'class' => 'ext.swiftMailer.SwiftMailer',
            'mailer' => 'smtp',
            'security' => 'tls',
            'host' => 'mail.modefashiongroup.com',
            'port' => '587',
            'username' => 'notification@alulumterpadu.sch.id',
            'password' => '3YAjy8Wnq2',
        ),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => YII_DEBUG ? null : 'site/error',
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                //uncomment the following to show log messages on web pages
                array(
                  'class'=>'CWebLogRoute',
                ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'info@prismakalkulatortangan.id',
        'basePath' => '/www',
        'uploadPath' => array(
            'image' => 'assets/images/',
            'banner' => 'assets/images/',
            'file' => 'assets/files/',
            'album' => 'assets/album/'
        ),
        'imageUrl' => '/assets/images/',
        'fileUrl' => '/assets/files/',
        'albumUrl' => '/assets/album/'
    ),
);
