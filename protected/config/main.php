<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(    
    
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Área Naval No. 2',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                //----------------------//
                'application.modules.cruge.components.*',
                'application.modules.cruge.extensions.crugemailer.*',
                
	),
        'sourceLanguage'=>'en',
        'language'=>'es',
        //'defaultController'=>'controlador/admin',

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
                //-------------------------//
                'cruge'=>array(
                    'tableprefix'=>'cruge_',

                    // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
                    //
                    // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
                    // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
                    //
                    'availableAuthMethods'=>array('default'),

                    'availableAuthModes'=>array('username','email'),

                    // url base para los links de activacion de cuenta de usuario
                    'baseUrl'=>'http://www.grupocastro.com/',

                     // NO OLVIDES PONER EN FALSE TRAS INSTALAR
                     'debug'=>true,
                     'rbacSetupEnabled'=>true,
                     'allowUserAlways'=>false,

                    // MIENTRAS INSTALAS..PONLO EN: false
                    // lee mas abajo respecto a 'Encriptando las claves'
                    //
                    'useEncryptedPassword' => true,

                    // Algoritmo de la función hash que deseas usar
                    // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
                    'hash' => 'md5',

                    // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
                    // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
                    //  lee en la wiki acerca de:
                    //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
                    //
                    // ejemplo:
                    //		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
                    //		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
                    //

                    'afterLoginUrl'=>array('/site/index'),
                    'afterLogoutUrl'=>array('/site/page', 'view'=>'about'),
                    'afterSessionExpiredUrl'=>null,

                    // manejo del layout con cruge.
                    //
                    'loginLayout'=>'//layouts/column2',
                    'registrationLayout'=>'//layouts/column2',
                    'activateAccountLayout'=>'//layouts/column2',
                    'editProfileLayout'=>'//layouts/column2',
                    // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
                    // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
                    // requerirá de un portlet para desplegar un menu con las opciones de administrador.
                    //
                    'generalUserManagementLayout'=>'ui',

                    // permite indicar un array con los nombres de campos personalizados, 
                    // incluyendo username y/o email para personalizar la respuesta de una consulta a: 
                    // $usuario->getUserDescription(); 
                    'userDescriptionFieldsArray'=>array('email'), 
                    //-------------------------------//
            ),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class' => 'application.modules.cruge.components.CrugeWebUser',
			'loginUrl' => array('/cruge/ui/login'),
		),
		// uncomment the following to enable URLs in path-format
		
            //URL AMIGABLES
            /*
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=bdAdmGuardia',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '69brygmy',
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
                                        //'enabled'=>YII_DEBUG, CUANDO ES PRODUCCION
					//'levels'=>'error, warning,trace info,profile',
                                        'filter'=>'CLogFilter',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
                                        'enabled'=>false, //si es falso es como comentado
                                        'levels'=>'error, warning,trace info,profile',
                                        'filter'=>'CLogFilter',
                                        'categories'=>'system.*',
				),/*
                                array(  //guarda en la bese de datos
					'class'=>'CDbLogRoute',
                                        'enabled'=>true, 
                                        'levels'=>'error, warning,trace info,profile',
				),
				array(
					'class'=>'CEmailLogRoute',
                                        'enabled'=>true, 
                                        'levels'=>'error, warning,trace info,profile',
				),
                                array(
					'class'=>'CProfileLogRoute',
                                        'enabled'=>true, 
                                        'levels'=>'error, warning,trace info,profile',
				),*/
			),
		),
                
            /////////////WIDGETS////////
        
                'widgetFactory'=>array(
                'widgets'=>array(
                    'CGridView'=>array(
                        'cssFile'=>false,
                        //'pager'=>array('cssFile'=>false),
                        //'pagerCssClass'=>'paginator',
                        //'rowCssClass'=>array('light','dark'),      
                    ),
                    'CListView'=>array(
                        'cssFile'=>false,
                        //'pager'=>array('cssFile'=>false),
                        //'pagerCssClass'=>'paginator',
                        //'rowCssClass'=>array('light','dark'),      
                    ),
                    'CDetailView'=>array(
                        'cssFile'=>false,
                        //'pager'=>array('cssFile'=>false),
                        //'pagerCssClass'=>'paginator',
                        //'rowCssClass'=>array('light','dark'),      
                    ),
                )
                ),
            //-----------------------//
            'authManager' => array(
                    'class' => 'application.modules.cruge.components.CrugeAuthManager',
            ),
            'crugemailer'=>array(
                    'class' => 'application.modules.cruge.components.CrugeMailer',
                    'mailfrom' => 'jaime7castro@gmail.com',
                    'subjectprefix' => 'Mensaje de Adm. Area Naval Nro. 2',
                    'debug' => true,
            ),
            'format' => array(
                    'datetimeFormat'=>"d M, Y h:m:s a",
            ),
            
            //---------------------------------//
            
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'jaime@grupocastro.com.bo',
	),
    
        
    
        'theme'=>'rhea',
);
