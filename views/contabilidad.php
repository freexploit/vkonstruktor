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
	     <div class="cont" class="ui-widget">
	       <h1>Ingreso Facturas de Proveedores</h1>
	        <br />
		 
                <table class="ui-widget ui-widget-content">
                   <form>
                    <tr class="ui-widget-header">
                        <th>
                            Datos Generales
                        </th>
                        <th>
                            Montos Documento  
                        </th>
                        <th>

                            Datos Proveedor
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Fecha de Ingreso
                        </td>
                        <td>
                            Valor Neto 
                        </td>

                        <td>
                            Rut Proveedor
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input disabled type="text" name="fechaIngreso" id="fechaIngreso" value="<?php echo date('d-m-Y'); ?>">
                        </td>
                        <td>

                            <input type="text" name="valorNeto" id="valorNeto">
                        </td>
                        <td>
                            <input type="text" name="rutProveedor" id="rutProveedor"> 
			    <button id="sp">Buscar</butto/n>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            Fecha de Documento
                        </td>
                        <td>
                            Iva
                        </td>
                        <td>
                            Nombre Proveedor
                        </td>
                    </tr>
                    <tr>

                        <td>
                                   <input type="text" name="fechaDocu" id="fechaDocu" />
                        </td>

                        <td>
                            <input type="text" name="iva" id="iva">
                        </td>
                        <td>
                            <input disabled type="text" name="nomProveedor" id="nomProveedor" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>

                            Tipo de Documento
                        </td>
                        <td>
                            Monto Total
                        </td>
                        <td>
                            Direccion
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <select id="tipoDocu">
                                <option value="Factura">Factura</option>
                                <option value="Guia">Guia</option>
                                <option value="Guia de Tercero">Guia de Tercero</option>
                            </select>                           
                        </td>
                        <td>

                            <input type="text" name="montoTotal" id="montoTotal">
                        </td>
                        <td>
                            <input disabled type="text" name="direccion" id="direccion"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Numero de Documento
                        </td>

                        <td>
                            Dias de Credito
                        </td>
                        <td>
                            Giro
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="text" name="numDocumento" id="numDocumento">

                        </td>
                        <td>
                            <select name="credito" id="credito">
                                <option value="0">En efectivo</option>
                                <option value="15">15 dias</option>
                                <option value="30">30 dias</option>
                                <option value="60">60 dias</option>

                                <option value="90">90 dias</option>
                            </select>                            
                        </td>
                        <td>
                            <input disabled  type="text" name="giro" id="giro"> 
                        </td>
                    </tr>
                    <tr>
                        <td>

                            Obra
                        </td>
                        <td>
                            
                        </td>
                        <td>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select id="obra">

                                <option value="1">Clinica Alemana</option>
                                <option value="2">Casino Dreams</option>
                            </select>
                        </td>
                        <td>                        
                        </td>
                        <td>
                            <button id="guardar">Guardar</button>

                        </td>
                    </tr>
                    </form> 
                    
                </table>
		 

		   
	     </div>
	     
	   </div>
	   <div class="respuesta"></div>

           <div id="ventas">Chao</div>
	   <div class="clean"></div>
       </div>
       <!-- fin tabs -->

   </div>

 </div>



<?php include ('footer.php');?>
