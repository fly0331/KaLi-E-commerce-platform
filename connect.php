<?php
     
     $serverName="LAPTOP-6EEC8PBA\SQLEXPRESS";
     $connectionInfo=array("Database"=>"KALI_408530037","UID"=>"CCU","PWD"=>"ap565639","CharacterSet" => "UTF-8");
     $conn=sqlsrv_connect($serverName,$connectionInfo);
         if($conn){
             
         }else{
             echo "Error!!!<br />";
             die(print_r(sqlsrv_errors(),true));
         }            
?>