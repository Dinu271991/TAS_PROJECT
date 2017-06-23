<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['q_id'];
		$qdesc = $_POST['qdesc'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO mcq(qid,qdesc,option1,option2,option3,option4,answer) VALUES(:qid, :qdesc, :option1, :option2,:option3,:option4,:answer)");
			$stmt->bindParam(":qid", $id);
			$stmt->bindParam(":qdesc", $qdesc);
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