<?php

Class contabilidadController Extends baseController {

   public function index() {
      $this->registry->template->title="Modulo de Contabilidad";
      $this->registry->template->jsfile="conta.js";
      $this->registry->template->show('contabilidad');

   } 

   public function compras () {
      echo "hola";
   }

   public function ventas () {
   
   echo  "chao";
   
   }



}

?>
