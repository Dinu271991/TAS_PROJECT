<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$CutOff = $_POST['CutOff'];
		
		echo "I am in update page";
				
			$stmt = $db_con->prepare("UPDATE tbl_dept_cutoff SET CutOff=:CutOff WHERE DeptId=:id");
			$stmt->bindParam(":CutOff", $CutOff);
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