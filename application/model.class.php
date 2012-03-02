<?php
/*
*  Author: Christopher Valerio
*  License: GPL 3
*  Clase de modelaje para la base de datos basada en mysqli
*/

Class Model extends mysqli
{
    private $host;
    private $user;
    private $password;
    private $registry;
    
    function __construct($registry,$cfg)
    {
        
       $this->registry=$registry;
       parent::__construct($cfg['db']['host'],$cfg['db']['user'],$cfg['db']['pass'],$cfg['db']['dbname']);
       if (mysqli_connect_error()) 
       {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
       }
       

    }//fin constructor


    function get_json($sql)
    {
       if ($result=parent::query($sql))
       {
          while($row=$result->fetch_object())
	  {
	      $rows[]=$row; 
	  }
	  $result->close();
       }
       return json_encode($rows);


    }//fin get_json 


    function __destruct()
    {
    
       parent::close();//desconecta cuando el objeto es destruido.
    
    }//fin destructor




}//fin clase model

?>
