<?php 
    
    $host="localhost";  ///connected server index,delete,login,view,logout,read,update
 	$user="root";
    $pass="root";
    $db_name="newviewww";   /// Database name view


   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }

 ?>