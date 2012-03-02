<?php 
/*
*  Author:Christopher Valerio
*  License: GPL 3
*  Archivo de configuracion 
*  Se configuran parametros como la base de datos, controlador principal y paths.
*/

/*** activa los errores ***/
error_reporting(E_ALL);
/* array global con info de la base de datos y el ruteo */
$cfg = array(
"db"=> array(
"host"=>"localhost",
"user"=>"root",
"pass"=>"",
"dbname"=>"vyv"
),
"router"=>"home"
);


?>
