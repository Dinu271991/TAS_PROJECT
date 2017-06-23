<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST['gc_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_general_computing SET gc_id=:id,gc_desc=:pd WHERE gc_id=:id");
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