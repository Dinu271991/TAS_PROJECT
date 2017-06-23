<?php
require_once '../RequiredFiles_MCQ/dbconfig.php';
$upOne = basename(__DIR__ ); 
$dept="Automation";

	
	if($_POST)
	{
		$id=$_POST[$upOne.'_id'];
		$prog_desc = $_POST[$upOne.'_desc'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		
				
		try{
			
			
						
				$stmt = $db_con->prepare("INSERT INTO tbl_".$dept."_".$upOne."(".$upOne."_id,".$upOne."_desc,option1,option2,option3,option4,answer) VALUES(:pid, :pdesc, :option1, :option2,:option3,:option4,:answer)");
				$stmt->bindParam(":pid", $id);
				$stmt->bindParam(":pdesc", $prog_desc);
				
				$stmt->bindParam(":option1", $option1);
				$stmt->bindParam(":option2", $option2);
				$stmt->bindParam(":option3", $option3);
				$stmt->bindParam(":option4", $option4);
				$stmt->bindParam(":answer", $answer);
								
				if($stmt->execute())
				{
					echo "Successfully Added";
				}
				else{
					echo "Query Problem";
				}	
			
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>