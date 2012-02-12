<?php
/*
 * @Author: Christopher Valerio
 * @License: GPL 3 https://www.gnu.org/licenses/gpl.html
 */
 require("config/config.php");
 
 if(file_exists($viewsDir."/header.php") && file_exists($viewsDir."/body.php") && file_exists($viewsDir."/footer.php"))
 {
 	include ($viewsDir."/header.php");
 	include ($viewsDir."/body.php");
 	include ($viewsDir."/footer.php");
 }

 else
 {
 	printf("Error no se encuentra algun archivo importante");
 }
 
 

 
 
 
?>
