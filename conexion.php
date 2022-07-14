<?php
	
	$server = "160.153.72.70";

    $username = "pablo216_data";
    
    $password = "AdminProCorp@2020";
    
    $database = "pablo216_dataset";
	
	$mysqli = new mysqli($server, $username, $password, $database);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_error) {

        die("Connection failed: " . $mysqli->connect_error);
      
      }else{
          
      }
?>
