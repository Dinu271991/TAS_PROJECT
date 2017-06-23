<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$essay_id = $_POST['essay_id'];
		$essay_desc = $_POST['essay_desc'];
		$essay_score=$_POST['essay_score'];
		
		$stmt = $db_con->prepare("UPDATE tbl_useressays SET essay_score=:escore WHERE uid=:id and essay_id=:esid");
		$stmt->bindParam(":esid", $essay_id);
		$stmt->bindParam(":escore", $essay_score);
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