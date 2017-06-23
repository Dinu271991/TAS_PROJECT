<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$DeptName = $_POST['DeptName'];
		
		
		$stmt = $db_con->prepare("UPDATE department SET DeptId=:id,DeptName=:dn WHERE DeptId=:id");
		$stmt->bindParam(":dn", $DeptName);
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