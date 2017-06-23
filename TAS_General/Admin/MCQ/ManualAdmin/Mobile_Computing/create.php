<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['mobile_computing_id'];
		$prog_desc = $_POST['mobile_computing_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_mobile_computing(mobile_computing_id,mobile_computing_desc) VALUES(:pid, :pdesc)");
				$stmt->bindParam(":pid", $id);
				$stmt->bindParam(":pdesc", $prog_desc);
								
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