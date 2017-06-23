<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST['browser_internet_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_browser_and_internet SET browser_internet_id=:id,browser_internet_desc=:pd WHERE browser_internet_id=:id");
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