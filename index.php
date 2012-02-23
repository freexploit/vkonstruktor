<?php

/*
* Author Christopher Valerio
* License GPL 3
*/

/*** activa los errores ***/
error_reporting(E_ALL);
/* define el directorio raiz */
$site_path=realpath(dirname(__FILE__));
define('__SITE_PATH',$site_path);

/* incluye el iniciador */
include('includes/init.php');

/** carga el enrutador **/

$registry->router = new Router($registry);


/** asigna el directorio para los controladores */
$registry->router->setPath(__SITE_PATH.'/controller');

$registry->template = new Template($registry);

$registry->router->loader();

?>
