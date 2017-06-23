<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['gc_id'];
		$prog_desc = $_POST['gc_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_general_computing(gc_id,gc_desc) VALUES(:pid, :pdesc)");
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