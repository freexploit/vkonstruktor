<?php

/* include the controller class */

include __SITE_PATH.'/application/'.'controller_base.class.php';

/* include the registry class */
include __SITE_PATH.'/application/'.'registry.class.php';

/* include the router class */

include __SITE_PATH.'/application/'.'router.class.php';

/* include the template class */ 

include __SITE_PATH.'/application/'.'template.class.php';


/** recarga automaticamente  la clases del modelo */

function __autoload($class_name)
{
   $filename = strtolower($class_name).'.class.php';
   $file = __SITE_PATH.'/model/'.$filename; 

   if (file_exists($file)==false)
   {
      return false;
   }
   include ($file);
}


/* crear una instancia de registro */

$registry = new registry;

/** crea el registro para el objeto de  la base de datos **/

//$registry->db =db::getInstance();


?>
