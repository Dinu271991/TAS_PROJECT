<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_email = $_POST['emp_email'];
		$emp_pwd = $_POST['emp_pwd'];
		
		$stmt = $db_con->prepare("UPDATE tbl_employees SET emp_id=:id,emp_name=:en, emp_dept=:ed, emp_email=:ee,emp_pwd=:ep WHERE emp_id=:id");
		$stmt->bindParam(":en", $emp_name);
		$stmt->bindParam(":ed", $emp_dept);
		$stmt->bindParam(":ee", $emp_email);
		$stmt->bindParam(":ep", $emp_pwd);
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