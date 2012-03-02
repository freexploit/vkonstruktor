$(
function (){
   
   meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
   dias=['Domingo','Lunes','Martes','Miercoles','Jueves', 'Viernes','Sabado'];
   diasMin=['Do','Lu','Ma','Mi','Ju','Vi','Sa'];
   url="http://127.0.0.1/vkonstruktor"
   
   $("#tabs").tabs();
   $("#sp").button();
   $("#fechaDocu").datepicker(
   {
      monthNames:meses,
      dayNames: dias,
      dateFormat:'dd-mm-yy',
      dayNamesMin: diasMin,
      showOn:"button",
      showAnim: 'slide',
      buttonImage:"img/icons/calendar.png",
      buttonImageOnly:true,
      changeMonth:true,
      changeYear:true
   }
   );

   $("#guardar").button().click(
      function(){
       $.post(url+"/contabilidad/guardar_compras",$("#compras form").serialize(), function(res) { alert(res) } ) 
       }
   );

}

);
