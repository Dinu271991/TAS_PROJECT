<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$user_name = $_POST['user_name'];
		$department = $_POST['department'];
		$user_password = $_POST['user_password'];
		$city = $_POST['city'];
		$user_email = $_POST['user_email'];
		$phone = $_POST['phone'];
		
		$stmt = $db_con->prepare("UPDATE tbl_candidates SET user_id=:id,user_name=:un, department=:ud, user_password=:upwd,city=:uc,user_email=:ue,phone=:uph  WHERE user_id=:id");
		$stmt->bindParam(":un", $user_name);
		$stmt->bindParam(":ud", $department);
		$stmt->bindParam(":upwd", $user_password);
		$stmt->bindParam(":uc", $city);
		$stmt->bindParam(":ue", $user_email);
		$stmt->bindParam(":uph", $phone);
		
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>