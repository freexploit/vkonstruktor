<?php

Class Router 
{
   /** El registro **/
   private $registry;

   
   private $path;
   private $args =array();
   public $file;
   public $controller;
   public $action;

   function __construct($registry)
   {
      $this->registry=$registry;
   }

   function setPath($path)
   {
       if (is_dir($path) == false)
       {
          throw new Exception ('Invalid controller path:'.$path);
       }
       $this->path=$path;

   }//fin setPath
   
   /** carga el controlador **/

   public function loader()
   {
      /** checkea la ruta **/
      $this->getController();

      /** mensaje de error 404 **/
      if (is_readable($this->file)==false)
      {
          echo $this->file;
	  die('404 Not Found');
      }
      
      /** incluye el controlador */
      include $this->file;

      $class = $this->controller.'Controller';
      $controller=new $class($this->registry);

      /** checkea si se puede llamar el metodo **/

      if (is_callable(array($controller,$this->action))==false)
      {
         $action='index';

      }
      else
      {
         $action= $this->action;
      }
      
      /** ejecuta la actin **/

      $controller->$action();


   
   }//fin loader
   
   public function getController()
   {
      $route =(empty($_GET['ex'])) ? '' : $_GET['ex'];

      if(empty($route))
      {
         $route='index';
      }
      else
      {
         $parts=explode ('/', $route);
	 $this->controller = $parts[0];
	 if(isset($parts[1]))
	 {
	    $this->action=$parts[1];

	 }
	 
      }

      if (empty($this->controller))
      {
         $this->controller='index';
      }

      if (empty($this->action))
      {
         $this->action='index';
      }

      $this->file = $this->path.'/'.$this->controller.'Controller.php';
   
   }

   public function get_controllers()

   {
      $dir=$this->path;
      
      $files=scandir($dir);

      foreach($files as $value)
      {
         if($value !='.' && $value !='..' && $value!="indexController.php" )
	 {
	    $controllers[]=substr($value,0,-14);
	 }
      }

      return $controllers;


   }





}//fin clase Router

?>
