<?php

	$db_host = "localhost";
	$db_name = "dept";
	$db_user = "root";
	$db_pass = "";
	
	try{
		
		$db_con2 = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>