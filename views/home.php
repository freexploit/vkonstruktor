<?php include ("header.php"); ?>
<div class="container">
    <ul class='well coolButtons'>
    <?php
	$c=count($icons);
	$li=0;
	echo "<li>";
	for($i=0;$i<$c;$i++)
	{
	    $li++;
	    echo "<a href='".$controllers[$i]."' class='button large blue' title='".$controllers[$i]."'><img src='".$icons[$i]."'/></a>";
	    if ($c<2 || $li>2 || $i==$c)
	    {
	         echo "</li>";
	    }
	    
	    if ($li > 2)
	    {
	       $li=0;
	    }

	 
	}
	


    ?>
    </ul>
</div>
<?php
include('footer.php');
?>
