<?php

Abstract Class baseController
{
   protected $registry;
   
   function __construct($registry)
   {
      $this->registry=$registry; 
   }

   abstract function index();

}

?>
