$(
function (){
   
   meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
   dias=['Domingo','Lunes','Martes','Miercoles','Jueves', 'Viernes','Sabado'];
   diasMin=['Do','Lu','Ma','Mi','Ju','Vi','Sa'];
  
   
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

   $("#guardar").button();

}

);
