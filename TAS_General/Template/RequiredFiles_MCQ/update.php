<?php
require_once '../RequiredFiles_MCQ/dbconfig.php';
$upOne = basename(__DIR__ ); 
$dept="Automation";

	
	if($_POST)
	{
		$id = $_POST['id'];
		$prog_desc = $_POST[$upOne.'_desc'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		
				
		$stmt = $db_con->prepare("UPDATE tbl_".$dept."_".$upOne." SET ".$upOne."_desc=:pd,option1=:option1,option2=:option2,option3=:option3,option4=:option4,answer=:answer WHERE ".$upOne."_id=:id");
		$stmt->bindParam(":pd", $prog_desc);
		$stmt->bindParam(":id", $id);
		
		$stmt->bindParam(":option1", $option1);
		$stmt->bindParam(":option2", $option2);
		$stmt->bindParam(":option3", $option3);
		$stmt->bindParam(":option4", $option4);
		$stmt->bindParam(":answer", $answer);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>