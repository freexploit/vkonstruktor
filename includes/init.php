<?php

/* incluye la clase controller_base */

include __SITE_PATH.'/application/'.'controller_base.class.php';

/* incluye la clase registry */
include __SITE_PATH.'/application/'.'registry.class.php';

/* incluye la clase router */

include __SITE_PATH.'/application/'.'router.class.php';

/* incluye la clase template */ 

include __SITE_PATH.'/application/'.'template.class.php';

/* incluye clase model */
include __SITE_PATH.'/application/'.'model.class.php';


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
