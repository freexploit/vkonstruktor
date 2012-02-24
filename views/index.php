<?php include ("header.php"); ?>

<div id="maincontent">
   <div class="innertube">
   <div id="homeBox">
   <!-- <table>
    <tr>
    <td><a href="#"><img src="img/icons/add_bb.png" /></a></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    </tr>
    <tr>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    <td><a href="#"><img src="img/icons/configure_bb.png" /></td>
    </tr>
    </table>
    -->
    <ul class='table'>
    <?php
	$c=count($icons);
	$li=0;
	echo "<li>";
	for($i=0;$i<$c;$i++)
	{
	    echo "<a href='".$controllers[$i]."' class='button large blue' title='".$controllers[$i]."'><img src='".$icons[$i]."'/></a>";
	    
	    if($li>3)
	    {
	       echo "</li><li>";
	       $li=0;
	    }
	    $li++;

	 
	}


    ?>
    <!--<li>
    <a href="#" class="button large blue" title="Nuevo Proveedor"><img src="img/icons/add_bb.png" /></a>
    <a href="conta" class="button large blue" title="Contabilidad"><img src="img/icons/conta_bb.png" /></a>
    </li>
    <li>
    <a href="#" class="button large blue" title="Add Provider"><img src="img/icons/add_bb.png" /></a>
    </li>-->
    </ul>

  
   </div>

   </div>
<?php
include('footer.php');
?>
