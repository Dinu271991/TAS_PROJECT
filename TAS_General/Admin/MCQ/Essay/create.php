<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['program_Id'];
		$prog_desc = $_POST['prog_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_programs(program_id,prog_desc) VALUES(:pid, :pdesc)");
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