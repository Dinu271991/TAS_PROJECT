<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST['mobile_computing_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_mobile_computing SET mobile_computing_id=:id,mobile_computing_desc=:pd WHERE mobile_computing_id=:id");
		$stmt->bindParam(":pd", $prog_desc);
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