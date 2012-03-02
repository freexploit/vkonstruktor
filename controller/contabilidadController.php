<?php

Class contabilidadController Extends baseController {

   public function index() {
      $this->registry->template->title="Modulo de Contabilidad";
      $this->registry->template->jsfile="conta.js";
      $this->registry->template->show('contabilidad');

   } 

   public function guardar_compras () 
   { 
      if (isset($_POST))
      {
           $fechaIngreso = $_POST['fechaIngreso'];
           $fechaDocu = $_POST['fechaDocu'];
           $valorNeto = $_POST['valorNeto'];
           $tipoDocumento = $_POST['tipoDocu'];
           $numDocumento = $_POST['numDocu'];
           $credito = $_POST['credito'];
           $rutProveedor = $_POST['rutProveedor'];
	   $nomProveedor = $_POST["nomProveedor"];
	   $direccion=$_POST["direccion"];
	   $giro=$_POST["giro"]; 
           $iva = $_POST['iva'];
           $montoTotal = $_POST['montoTotal'];
           $obra = $_POST['obra'];
	   $cancelada=0;
	   $documento="";

	   $sql="select num_documento from compras where num_documento='$numDocumento'";

	   $query= $this->registry->db->query($sql);
	   while($row=$query->fetch_array)
	   {
	      $documento=$row[0];
	   }
	   if($documento != "")
	   {
	       echo "Error: Esta factura ya ha sido agregada";
	   }
	   else
	   { 
	       $sql="insert into compras values('','$fechaIngreso','$fechaDocu','$tipoDocumento','$numDocumento','$credito','$rutProveedor','$valorNeto','$iva','$montoTotal','$obra','$cancelada')";
	       if($this->registry->db->query($sql))
	       {
	          echo "Esta Factura se ha guardado correctamente";
	       }
	       else
	       {
	          echo mysqli_error();
	       }


	   }
          
      }
      else 
      {
         echo "Error";
      
      }
   }

   public function ventas () {
   
   echo  "chao";
   
   }



}

?>
