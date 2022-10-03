<?php
    $server_name="localhost";
	$username="root";
	$password="";
	$database_name="vizabridge";
			 
			try{
		$conn = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$db->setAttrubute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}
    defined('VizaBridge_API');
?>