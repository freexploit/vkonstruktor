<?php include ('header.php'); ?>

   <!-- inician los tab -->
<div class="container well ">
	       <legend>Ingreso Facturas de Proveedores</legend>
	        <br />
		 
                <table >
                   <form id="compras">
                    <tr >
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
                            <input  type="text" name="fechaIngreso" id="fechaIngreso" value="<?php echo date('d-m-Y'); ?>">
                        </td>
                        <td>

                            <input type="text" name="valorNeto" id="valorNeto">
                        /</td>
                        <td>
                            <input type="text" name="rutProveedor" id="rutProveedor"> 
			    <button id="sp">Buscar</button>
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
                            <input  type="text" name="nomProveedor" id="nomProveedor" /> 
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
                            <select id="tipoDocu" name="tipoDocumento">
                                <option value="Factura">Factura</option>
                                <option value="Guia">Guia</option>
                                <option value="Guia de Tercero">Guia de Tercero</option>
                            </select>                           
                        </td>
                        <td>

                            <input type="text" name="montoTotal" id="montoTotal">
                        </td>
                        <td>
                            <input  type="text" name="direccion" id="direccion"> 
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
                            <input type="text" name="numDocu" id="numDocu">

                        </td>
                        <td>
                                                        
                        </td>
                        <td>
                            <input   type="text" name="giro" id="giro"> 
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
                            <select id="obra" name="obra">

                                <option value="1">Clinica Alemana</option>
                                <option value="2">Casino Dreams</option>
                            </select>
                        </td>
                        <td>                        
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                    </form> 
                    <button id="guardarCompras" class="btn btn-primary">Guardar</button>
 
                </table>
		 

	</div>	   




<?php include ('footer.php');?>
