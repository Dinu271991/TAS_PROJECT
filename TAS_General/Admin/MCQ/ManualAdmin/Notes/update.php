<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST['notes_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_manual_notes SET notes_id=:id,notes_desc=:pd WHERE notes_id=:id");
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