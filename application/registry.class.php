<?php

class Registry 
{
   
   /*
   *
   * array que guarda las variables
   *
   */

   private $vars=array();

   // define las variables

   public function __set($index,$value)
   {
      $this->vars[$index]= $value;

   }

   // obtiene variables

   public function __get($index)
   {
      return $this->vars[$index];
   }



}

?>
