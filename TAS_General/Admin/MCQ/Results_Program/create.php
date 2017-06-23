<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['uid'];
		$program_id = $_POST['program_id'];
		$prog_desc = $_POST['prog_desc'];
		
		try{
			
				$stmt = $db_con->prepare("INSERT INTO tbl_userprogram(uid,program_id,prog_desc) VALUES(:eid, :pid, :pdesc)");
				$stmt->bindParam(":eid", $id);
				$stmt->bindParam(":pid", $program_id);
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