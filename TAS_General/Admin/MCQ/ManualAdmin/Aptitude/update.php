<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$qdesc = $_POST['qdesc'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		
		$stmt = $db_con->prepare("UPDATE tbl_manual_aptitude SET qid=:id,qdesc=:qd, option1=:o1, option2=:o2,option3=:o3,option4=:o4,answer=:ar WHERE qid=:id");
		$stmt->bindParam(":qd", $qdesc);
		$stmt->bindParam(":o1", $option1);
		$stmt->bindParam(":o2", $option2);
		$stmt->bindParam(":o3", $option3);
		$stmt->bindParam(":o4", $option4);
		$stmt->bindParam(":ar", $answer);
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