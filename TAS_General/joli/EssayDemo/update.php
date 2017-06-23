<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST['essay_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_essays SET essay_id=:id,essay_desc=:pd WHERE essay_id=:id");
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