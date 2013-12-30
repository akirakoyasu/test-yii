<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
    'name' => 'Yii test',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    'controllerNamespace' => '\application\controllers',

//    'defaultController' => '/service1/site',

    'controllerMap' => array(
        'service2_site' => '\application\controllers\service2\SiteController',
    ),

    'modules' => array(
        'service1' => array(
            'class' => '\application\modules\service1\Service1Module',
        ),
        'service4' => array(
            'class' => '\application\modules\service4\Service4Module',
        ),
    ),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'db' => array(
            'connectionString' => 'sqlite:protected/data/blog.db',
            'tablePrefix' => 'tbl_',
        ),
        // uncomment the following to use a MySQL database
        /*
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=blog',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
        ),
        */
        'errorHandler' => array(
            // use 'site/error' action to display errors
//            'errorAction' => 'service1/site/error',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
//                'service1/<controller:\w+>' => 'service1/<controller>',
//                '<service:\w+>/<controller:\w+>' => '<service>_<controller>',
//                '<service:\w+>/<controller:\w+>/<action:\w+>' => '<service>_<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                array(
                    'class' => 'CWebLogRoute',
                ),
            ),
        ),
    ),
);