<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['notes_id'];
		$prog_desc = $_POST['notes_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_manual_notes(notes_id,notes_desc) VALUES(:pid, :pdesc)");
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