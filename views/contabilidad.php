<?php include ('header.php'); ?>
<div id="maincontent">
   <div class="innertube">
   <div id="homeBox">

   <!-- inician los tab -->
       <div id="tabs">
           <ul>
	      <li><a href="#compras">Compras</a></li>
	      <li><a href="#ventas">Ventas</a></li>
	   </ul>

           <div id="compras">
	       <h1>Ingreso Facturas de Proveedores</h1>
	       <br />
	       <form>
	          <fieldset>
		      <h3>Datos Generales</h3>
	             <label for ="fechaIngreso">Fecha de Ingreso</label>
	             <input type="date" class="text ui-widget-content ui-corner-all" value="">
		     <label for="fechaDocumento">Fecha de Documento</label>
	             <input type="date" class="text ui-widget-content ui-corner-all" value="">
		     <label for="tipoDocumento">Tipo de Documento</label><br/>
		     <select>
                    <option>Factura</option>
		     </select>
		     <br />
		     <label for="numeroDocumento">Numero de Documento</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="obra">Obra</label>
		     <select>
			<option>Clinica Aleman...</option>
		     </select>

	          </fieldset>
	          <fieldset>
		     <h3>Montos de Documentos</h3>
		     <label for="valorNeto">Valor neto</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="iva">Iva</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="montoTotal">Monto Total</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="diasCredito">Dias de credito</label>
		     <select>
			<option>En efectivo</option>
		     </select>
	          </fieldset>
	          <fieldset>
		     <h3>Datos Proveedor</h3>
		     <button id="sp">Buscar</button>
		     <label for="rutProveedor">Rut Proveedor</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >


		     <label for="nombreProveedor">Nombre del Proveedor</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="direccion">Direccion</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     <label for="giro">Giro</label>
                     <input type="text" class="text ui-widget-content ui-corner-all" value="" >
		     
	          </fieldset>
	       </form>
	   
	   </div>

           <div id="ventas">Chao</div>
       </div>
       <!-- fin tabs -->

   </div>

 </div>



<?php include ('footer.php');?>
