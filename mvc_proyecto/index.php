<?php

// change the following paths if necessary
//variables publicas de entorno son las que configuran la aplicacion con el framwork de yii
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// especificar cuántos niveles de pila de llamadas debe ser demostrado en cada mensaje de registro
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
